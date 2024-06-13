<?php

namespace App\Http\Controllers\Drive;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Profile\UpdateEmailRequest;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Http\Requests\Profile\UpdatePasswordRequest;

class SettingController extends Controller
{
    //TODO: Envoyer un mail a l'utilisateur lorsqu'il change son adresse mail.
    /**
     * Handle display view setting
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('drive.setting');
    }

    /**
     * Update profile 
     * 
     * @param \App\Http\Requests\Profile\UpdateProfileRequest $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProfile(UpdateProfileRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();

        $imagePath = $this->handleImageUpload($request, $user);
        if ($imagePath) {
            $data['avatar'] = $imagePath;
        }

        try {
            $user->update($data);

            emotify('success', 'Votre profil a été mis à jour avec succès');
            return redirect()->route('settings.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            emotify('error', 'Erreur lors de la mise à jour de votre profil');
            return back();
        }
    }

    /**
     * Update Email
     * 
     * @param \App\Http\Requests\Profile\UpdateEmailRequest $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateEmail(UpdateEmailRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();

        try {
            $user->update($data);

            emotify('success', 'Votre email a été mis à jour avec succès');
            return redirect()->route('settings.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            emotify('error', 'Erreur lors de la mise à jour de votre email');
            return back();
        }
    }

    /**
     * Update Password
     * 
     * @param \App\Http\Requests\Profile\UpdatePasswordRequest $request
     * @param \App\Models\User $user
     */
    public function updatePassword(UpdatePasswordRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();

        try {
            $user->update([
                'password' =>  Hash::make($data['password'])
            ]);

            emotify('success', 'Votre mot de passe a été mis à jour avec succès');
            return redirect()->route('settings.index');

        } catch (\Exception $e) {
            Log::error($e->getMessage());

            emotify('error', 'Erreur lors de la mise à jour de votre mot de passe');
            return back();
        }
    }


    /**
     * Handle image upload and return the image path
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return string|null
     */
    private function handleImageUpload($request, $user)
    {
        if ($request->hasFile('avatar')) {
            $folder = public_path('Users/' . $user->nom);
            if (!is_dir($folder)) {
                mkdir($folder, 0777, true);
            }

            $file = $request->file('avatar');
            $path = md5(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move($folder, $path);

            return 'Users/' . $user->nom . '/' . $path;
        }

        return null;
    }
}

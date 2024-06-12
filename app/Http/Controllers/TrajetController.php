<?php

namespace App\Http\Controllers;

use App\Http\Requests\Trajets\CreateRequest;
use App\Models\Trajet;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TrajetController extends Controller
{
    //TODO: Envoyer un message a tous les passagers apres la publication d'un trajets
    //TODO: Envoyer un message a l'utilisateur apres verification de son compte

    /**
     * 
     */
    public function create(): View
    {
        return view('trajets.create');
    }

    public function store(CreateRequest $request): RedirectResponse
    {
        $user = Auth::user();
        $conducteur_id = $user->conducteur->id;
        $data = $request->validated();
        $data['conducteur_id'] = $conducteur_id;

        // Add image path to data if image is uploaded
        $imagePath = $this->handleImageUpload($request, $user);
        if ($imagePath) {
            $data['image'] = $imagePath;
        }

        try {
            Trajet::create($data);
            emotify('success', 'Votre Trajet a été créé avec succès.');
            return redirect()->route('home');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            emotify('error', 'Une erreur est survenue lors de la création de votre trajet.');
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
        if ($request->hasFile('image')) {
            $folder = public_path('Trajets/' . $user->nom);
            if (!is_dir($folder)) {
                mkdir($folder, 0777, true);
            }

            $file = $request->file('image');
            $path = md5(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move($folder, $path);

            return 'Trajets/' . $user->nom . '/' . $path;
        }

        return null;
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Creativeorange\Gravatar\Facades\Gravatar;

class RegisterController extends Controller
{
    /**
     * Show register form
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('Auth.inscription');
    }

    /**
     * register new user in storage
     * 
     * @param \App\Http\Requests\Auth\RegisterRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(RegisterRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);

        try {
            // Générer l'avatar Gravatar
            $avatarUrl = Gravatar::get($request->email);

            // Créer l'utilisateur avec l'avatar Gravatar
            $data['avatar'] = $avatarUrl;
            $user = User::create($data);

            // Connecter l'utilisateur
            Auth::login($user);

            emotify('success', 'Votre Compte a été créé avec succès.');
            return redirect()->route('index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            emotify('error', 'Une erreur est survenue lors de la création de votre compte.');
            return back();
        }
    }
}

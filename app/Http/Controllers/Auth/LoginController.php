<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Show login form
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('Auth.login');
    }

    /**
     * login users
     * 
     * @param \App\Http\Requests\Auth\LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(LoginRequest $request): RedirectResponse
    {
        $data = $request->validated();

        // Déterminer si le login est un email ou un numéro de téléphone
        $fieldType = filter_var($data['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'telephone';

        // Préparer les informations de connexion
        $credentials = [
            $fieldType => $data['login'],
            'password' => $data['password']
        ];

        try {
            // Tentative de connexion de l'utilisateur
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
            
                if ($user->type === 'conducteur') {
                    return redirect()->route('home')->with('success', 'Connexion réussie en tant que conducteur.');
                } elseif ($user->type === 'passager') {
                    return redirect()->route('index')->with('success', 'Connexion réussie en tant que passager.');
                }
            }
            
            return back()->withInput($request->only('login', 'remember'))->withErrors([
                'login' => 'Les identifiants sont incorrects.',
            ]);
            

            // Si les identifiants sont incorrects, retourner avec une erreur de validation
            throw ValidationException::withMessages([
                'login' => ['Les identifiants sont incorrects.'],
            ]);
        } catch (\Exception $e) {
            // Gestion des erreurs
            Log::error('Erreur lors de la connexion : ' . $e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Logout users
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        auth()->logout();

        return redirect()->route('index');
    }
}

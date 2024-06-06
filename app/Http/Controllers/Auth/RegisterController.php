<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Auth;

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
        $data['avatar'] = 'avatar.png';
        $data['password'] = Hash::make($request->password);
        
        try {
           $user = User::create($data);
            Auth::login($user);
            return redirect()->route('index')->with('success', 'Votre compte a été créé avec succès.');
        } catch (\Exception $e) {

            Log::error($e->getMessage());
            return back()->with('error', 'Erreur lors de la création de votre compte');
        }
    }
}

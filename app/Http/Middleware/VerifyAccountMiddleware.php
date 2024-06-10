<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerifyAccountMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //on verifie si le compte de l'utilisateur a été verifier ou pas
        if (Auth::user()->status === false) {
            
            emotify('error', 'Vous devez faire vérifier votre compte afin de publier un trajet.');
            return redirect()->route('home');
        }
        
        return $next($request);
    }
}

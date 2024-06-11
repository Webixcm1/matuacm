<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckVerifyAccountMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        //on verifi si l'utilisateur est connecté ou pas
        if (Auth::check() && !Auth::user()->status) {
            emotify('error', 'Vous devez faire vérifier votre compte afin de publier un trajet.');
            return back();
        }


        return $next($request);
    }
}

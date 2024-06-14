<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\ActivityLog;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ActivityLogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Si l'utilisateur est authentifié
        if (Auth::check()) {
            $user = Auth::user();
            $session_id = session()->getId();

            $existingLog = ActivityLog::where('user_id', $user->id)
                ->where('session_id', $session_id)
                ->first();

            if (!$existingLog) {
                $agent = new Agent();
                $ip = $request->ip();
                $browser = $agent->browser();
                $os = $agent->platform();
                $device = $agent->device();

                // Enregistrez les informations de connexion
                ActivityLog::create([
                    'user_id' => $user->id,
                    'session_id' => $session_id,
                    'ip_address' => $ip,
                    'browser' => $browser,
                    'os' => $os,
                    'device' => $device,
                ]);
            }
        }

        return $response;
    }
}

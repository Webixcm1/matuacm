<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\ActivityLog;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
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

        if ($request->user()) {
            $user_id = $request->user()->id;
        } else {
            $user_id = null;
        }

        $agent = new Agent();
        $ip = $request->ip();
        $browser = $agent->browser();
        $os = $agent->platform();
        $action = $request->path();
        $method = $request->method();

        ActivityLog::create([
            'user_id' => $user_id,
            'ip_address' => $ip,
            'browser' => $browser,
            'os' => $os,
            'action' => "{$method} {$action}",
        ]);

        return $response;
    }
}

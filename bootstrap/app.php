<?php

use App\Http\Middleware\ActivityLog;
use App\Http\Middleware\ActivityLogMiddleware;
use App\Http\Middleware\CheckVerifyAccountMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->append(ActivityLogMiddleware::class);

        $middleware->alias([
            'checkVerify' => CheckVerifyAccountMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

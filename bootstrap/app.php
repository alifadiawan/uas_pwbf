<?php

use App\Http\Middleware\CheckUserMiddleware;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\RedirectIfAdmin;
use App\Http\Middleware\RedirectIfUser;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->append(CheckUserMiddleware::class);
        $middleware->alias([
            'Guest' => \App\Http\Middleware\GuestMiddleware::class,
            'AdminMiddleware' => \App\Http\Middleware\AdminMiddleware::class,
            'UserMiddleware' => \App\Http\Middleware\UsersMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

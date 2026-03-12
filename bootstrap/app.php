<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
<<<<<<< HEAD
        // $middleware->
=======
        $middleware->redirectUsersTo('/games');
>>>>>>> 2610de7a3d3e55be173d03c2915e944cd42f5dd7
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

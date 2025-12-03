<?php

use App\Http\Middleware\VerifyCustomer;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
        Route::middleware(['web','auth'])
        ->name('backend.')
        ->group(base_path('/routes/admin.php'));
            }
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
        'customer' => VerifyCustomer::class
    ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

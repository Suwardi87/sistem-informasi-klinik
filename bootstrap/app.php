<?php

use App\Http\Middleware\RoleMiddleware;
use Illuminate\Foundation\Application;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\PasienMiddleware;
use App\Http\Middleware\PegawaiMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
        'admin' => AdminMiddleware::class,
        'pasien' => PasienMiddleware::class,
        'pegawai' => PegawaiMiddleware::class,
        'role' => RoleMiddleware::class
    ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

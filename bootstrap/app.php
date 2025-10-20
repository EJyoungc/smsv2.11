<?php

use App\Http\Middleware\Custom\Admin;
use App\Http\Middleware\Custom\ExamIsLocked;
use App\Http\Middleware\Custom\MyParent;
use App\Http\Middleware\Custom\SuperAdmin;
use App\Http\Middleware\Custom\TeamAccount;
use App\Http\Middleware\Custom\TeamSA;
use App\Http\Middleware\Custom\TeamSAT;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'admin' => Admin::class,
            'super_admin' => SuperAdmin::class,
            'teamSA' => TeamSA::class,
            'teamSAT' => TeamSAT::class,
            'teamAccount' => TeamAccount::class,
            'examIsLocked' => ExamIsLocked::class,
            'my_parent' => MyParent::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

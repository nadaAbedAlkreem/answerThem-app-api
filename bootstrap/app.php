<?php

use App\Http\Middleware\NoCache;
use App\Http\Middleware\UpdateLastActive;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\SetLocale;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Auth\AuthenticationException;
use App\Traits\ResponseTrait;


return Application::configure(basePath: dirname(__DIR__))

    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(SetLocale::class);
        $middleware->append(StartSession::class);
        $middleware->append(UpdateLastActive::class);
        $middleware->append(NoCache::class);
//
//        $middleware->validateCsrfTokens(except: [
//            env('APP_URL', 'http://127.0.0.1:8000').'/dashboard/setting' ,
//            env('APP_URL', 'http://127.0.0.1:8000').'/dashboard/setting/update'
//        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {

        $exceptions->render(function (AuthenticationException $e ) {
            return (new class {
                use ResponseTrait;

                public function handleUnauthorized($e) {
                     return $this->errorResponse('NOTAUTHORIZED', [],401, app()->getLocale());
                }
            })->handleUnauthorized($e);

        });
    })->create();

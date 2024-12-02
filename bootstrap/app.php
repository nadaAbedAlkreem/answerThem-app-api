<?php

 use App\Http\Middleware\EnsureCsrfTokenIsSet;
 use App\Http\Middleware\UpdateLastActive;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\SetLocale;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Auth\AuthenticationException;
use App\Traits\ResponseTrait;
use Illuminate\View\Middleware\ShareErrorsFromSession;


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
        $middleware->append(EnsureCsrfTokenIsSet::class);
//        $middleware->append(AddQueuedCookiesToResponse::class);
//        $middleware->append(ShareErrorsFromSession::class);
  //        Illuminate\Cookie\Middleware\EncryptCookies
//Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse
//Illuminate\Session\Middleware\StartSession
//Illuminate\View\Middleware\ShareErrorsFromSession
//Illuminate\Foundation\Http\Middleware\ValidateCsrfToken
//Illuminate\Routing\Middleware\SubstituteBindings
 //
//        $middleware->append(CustomVerifyCsrfToken::class);



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

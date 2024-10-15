<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\RegisterController;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\PasswordResetController;
use App\Http\Controllers\Api\V1\Auth\SocialAuthController;
use App\Http\Controllers\Api\V1\Auth\ForgotPasswordController;
use App\Http\Middleware\SetLocale ; 
 

    Route::group(['middleware' => SetLocale::class], function () {
    
                Route::prefix('auth')->group(function () 
            {
                Route::get('/register', [RegisterController::class, 'create']);
                Route::get('/login', [LoginController::class, 'create']);
                Route::post('/register', [RegisterController::class, 'register']);
                Route::post('/login', [LoginController::class, 'login']);
                // Route::post('/password/reset', [ForgotPasswordController::class, 'reset']);
                // Route::post('/password/verify', [ForgotPasswordController::class, 'verify']);
                // Route::get('google', [SocialAuthController::class, 'redirectToGoogle']);
                // Route::get('google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
                // Route::get('twitter', [SocialAuthController::class, 'redirectToTwitter']);
                // Route::get('twitter/callback', [SocialAuthController::class, 'handleTwitterCallback']);
                // Route::get('instagram', [SocialAuthController::class, 'redirectToInstagram']);
                // Route::get('instagram/callback', [SocialAuthController::class, 'handleInstagramCallback']);
                Route::middleware(['web'])->group(function () {
                    Route::get('google', [SocialAuthController::class, 'redirectToGoogle']);
                    Route::get('google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
                    
                    Route::get('twitter', [SocialAuthController::class, 'redirectToTwitter']);
                    Route::get('twitter/callback', [SocialAuthController::class, 'handleTwitterCallback']);
                    
                    Route::get('instagram', [SocialAuthController::class, 'redirectToInstagram']);
                    Route::get('instagram/callback', [SocialAuthController::class, 'handleInstagramCallback']);
                    Route::post('instagram/deauthorize', [SocialAuthController::class, 'handleInstagramDeauthorization']);

                });
                Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink']);
                Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword']);
                Route::post('verifyToken', [ForgotPasswordController::class, 'verifyToken']);

            });
    
    });
 
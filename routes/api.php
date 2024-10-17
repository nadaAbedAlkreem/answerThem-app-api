<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\RegisterController;
use App\Http\Controllers\Api\V1\Auth\UserController;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\SocialAuthController;
use App\Http\Controllers\Api\V1\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\V1\Friends\FriendRequestController;
use App\Http\Middleware\SetLocale ;


    Route::group(['middleware' => SetLocale::class], function () {

                Route::prefix('auth')->group(function ()
            {  //getTranslatedPagesAuthentication
                Route::get('/translate', [UserController::class, 'getTranslatedPagesAuthentication']);
                Route::get('/login', [LoginController::class, 'notAuthorized'])->name('login');
                Route::post('/register', [RegisterController::class, 'register']);
                Route::post('/login', [LoginController::class, 'login']);
                Route::get('/users', [UserController::class, 'getAllUsers']);
                Route::get('/users/search', [UserController::class, 'getSearchUsers']);
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
            Route::group(['middleware' =>  'auth','session'], function () {
                Route::put('update-device-token', [FriendRequestController::class, 'updateDeviceToken']);
                Route::post('send-fcm-notification', [FriendRequestController::class, 'sendFcmNotification']);


            });

    });

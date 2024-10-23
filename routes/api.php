<?php

use App\Http\Controllers\Api\V1\NotificationController;
use App\Http\Controllers\Api\V1\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\RegisterController;
use App\Http\Controllers\Api\V1\Auth\UserController;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\SocialAuthController;
use App\Http\Controllers\Api\V1\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\V1\Friends\FriendRequestController;
use App\Http\Controllers\Api\V1\Friends\FriendController;
use App\Http\Middleware\SetLocale ;


    Route::group(['middleware' => SetLocale::class], function () {
                Route::prefix('auth')->group(function ()
            {
                Route::get('/translate', [UserController::class, 'getTranslatedPagesAuthentication']);
                Route::get('/login', [LoginController::class, 'notAuthorized'])->name('login');
                Route::post('/register', [RegisterController::class, 'register']);
                Route::post('/login', [LoginController::class, 'login']);
                Route::get('/users', [UserController::class, 'getAllUsers']);
                Route::get('/users/search', [UserController::class, 'getSearchUsers']);
                Route::get('/user', [UserController::class, 'getCurrentUser']);

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

            Route::prefix('friends-request')->group(function ()
            {
                Route::get('users', [FriendController::class, 'getUsersForFriendsRequest']);
                Route::get('current-user', [FriendRequestController::class, 'getFriendRequestsForCurrentUser']);
                Route::put('update-device-token', [FriendRequestController::class, 'updateDeviceToken']);
                Route::post('send-fcm-notification', [FriendRequestController::class, 'sendFcmNotification']);


            });

            Route::prefix('friends')->group(function ()
            {
                Route::get('current-user', [FriendController::class, 'getFriendsForCurrentUser']);

            });
            Route::prefix('notifications')->group(function ()
            {
              Route::get('current-user', [NotificationController::class, 'getNotificationForCurrentUser']);
            });

            Route::prefix('setting')->group(function ()
            {
                Route::get('', [SettingController::class, 'index']);
                Route::get('{id}', [SettingController::class, 'show'])->name('setting.show');
                Route::post('update/{id}', [SettingController::class, 'update'])->name('setting.update');

            });

    });

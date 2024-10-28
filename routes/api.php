<?php

use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\ContactUsController;
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


    Route::group(['middleware' =>  SetLocale::class], function () {
                Route::prefix('auth')->group(function ()
            {
                Route::get('/translate', [UserController::class, 'getTranslatedPagesAuthentication']);

                Route::get('/users', [UserController::class, 'getAllUsers']);
                Route::get('/users/search', [UserController::class, 'getSearchUsers']);
                Route::get('/user', [UserController::class, 'getCurrentUser']);
                Route::post('/register', [RegisterController::class, 'register']);
                Route::post('/login', [LoginController::class, 'login']);
                Route::post('social/mobile', [SocialAuthController::class, 'handleSocialLogin']);
                Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink']);
                Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword']);
                Route::post('verifyToken', [ForgotPasswordController::class, 'verifyToken']);

            });
        Route::group(['middleware' =>  'auth:api'], function ()
        {
            Route::post('profile/update', [UserController::class, 'updateProfile']);

            Route::prefix('friends')->group(function ()
            {
                Route::get('current-user', [FriendController::class, 'getFriendsForCurrentUser']);
            });
            Route::prefix('notifications')->group(function ()
            {
                Route::get('current-user', [NotificationController::class, 'getNotificationForCurrentUser']);
            });
            Route::prefix('friends-request')->group(function ()
            {
                Route::get('users', [FriendController::class, 'getUsersForFriendsRequest']);
                Route::get('current-user', [FriendRequestController::class, 'getFriendRequestsForCurrentUser']);
                Route::post('update-device-token', [FriendRequestController::class, 'updateDeviceToken']);
                Route::post('send-fcm-notification', [FriendRequestController::class, 'sendFcmNotification']);
            });
        });

            Route::prefix('categories')->group(function ()
            {
                Route::get('primary', [CategoryController::class, 'getPrimaryCategories']);
                Route::get('{id}/subcategories', [CategoryController::class, 'getSubcategories']);

                Route::get('primary/search', [CategoryController::class, 'searchPrimaryCategories']);
                Route::get('{id}/subcategories/search', [CategoryController::class, 'searchSubcategories']);
            });





        Route::prefix('setting')->group(function ()
            {
                Route::get('', [SettingController::class, 'index']);
                Route::get('{id}', [SettingController::class, 'show'])->name('setting.show');
                Route::post('update/{id}', [SettingController::class, 'update'])->name('setting.update');

            });

            Route::prefix('contact-us')->group(function ()
            {
                  Route::post('', [ContactUsController::class, 'store']);
            });

    });

<?php

use App\Http\Controllers\Api\V1\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\RegisterController;
use App\Http\Controllers\Api\V1\Auth\SocialAuthController;
use App\Http\Controllers\Api\V1\Auth\UserController;
use App\Http\Controllers\Api\V1\ContactUsController;
use App\Http\Controllers\Api\V1\Friends\FriendController;
use App\Http\Controllers\Api\V1\Friends\FriendRequestController;
use App\Http\Controllers\Api\V1\Game\CategoryController;
use App\Http\Controllers\Api\V1\Game\ChallengeController;
use App\Http\Controllers\Api\V1\Game\ResultController;
use App\Http\Controllers\Api\V1\Game\UserTrackingController;
use App\Http\Controllers\Api\V1\NotificationController;
use App\Http\Controllers\Api\V1\SettingController;
use App\Http\Middleware\SetLocale;
use App\Http\Middleware\UpdateLastActive;
use App\Models\User;
use Google\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


Route::group(['middleware' =>  SetLocale::class  , UpdateLastActive::class], function () {
                Route::prefix('auth')->group(function ()
            {
                Route::get('/translate', [UserController::class, 'getTranslatedPagesAuthentication']);
                Route::get('/login', [LoginController::class, 'index'])->name('login');
                Route::get('/users', [UserController::class, 'getAllUsers']);
                Route::get('/users/search', [UserController::class, 'getSearchUsers']);
                Route::post('/register', [RegisterController::class, 'register']);
                Route::post('/login', [LoginController::class, 'login'])->name('login-post');
                Route::post('login/callback', [SocialAuthController::class, 'handleSocialLogin']);
                Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink']);
                Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword']);
                Route::post('verifyToken', [ForgotPasswordController::class, 'verifyToken']);

            });
        Route::group(['middleware' =>'auth:api'], function ()
        {
            Route::post('/logout', [LoginController::class, 'logout']);
            Route::get('/user', [UserController::class, 'getCurrentUser']);

            Route::post('profile/update', [UserController::class, 'updateProfile']);
            Route::prefix('user-tracking')->group(function ()
            {
                Route::get('game-track', [UserTrackingController::class, 'getLastGame']);
                Route::get('track-game/{userId}/{result}', [UserTrackingController::class, 'trackAppLogGameResult']);
                Route::get('track-entry/{userId}', [UserTrackingController::class, 'trackAppEntry']);
                Route::get('current-user', [UserTrackingController::class, 'getTrafficForCurrentUser']);

            });
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
                Route::post('send', [FriendRequestController::class, 'sendFriendRequest']);
                Route::get('accept/{id}', [FriendRequestController::class, 'acceptFriendRequest']);
                Route::get('declined/{id}', [FriendRequestController::class, 'declinedFriendRequest']);
                Route::get('users', [FriendController::class, 'getUsersForFriendsRequest']);
                Route::get('current-user', [FriendRequestController::class, 'getFriendRequestsForCurrentUser']);
                Route::post('update-device-token', [FriendRequestController::class, 'updateDeviceToken']);
             });
        });
            Route::prefix('categories')->group(function ()
            {
                Route::get('primary', [CategoryController::class, 'getPrimaryCategories']);
                Route::get('{id}/subcategories', [CategoryController::class, 'getSubcategories']);

                Route::get('primary/search', [CategoryController::class, 'searchPrimaryCategories']);
                Route::get('{id}/subcategories/search', [CategoryController::class, 'searchSubcategories']);

                Route::get('{id}/category', [CategoryController::class, 'getSubAndPrimeCategoryById']);
                Route::get('home', [CategoryController::class, 'getCategoriesDetails']);
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
            Route::prefix('active-user')->group(function ()
            {
                Route::get('offline', [LoginController::class, 'offline']);
            });
            Route::prefix('challenges')->group(function ()
            {
                Route::get('competitors', [ChallengeController::class, 'getFriendsWithSearch']);
                Route::post('create', [ChallengeController::class, 'create']);
                Route::get('show/{challengeId}', [ChallengeController::class, 'show'])->name('challenge.show');
                Route::get('result/{challengeId}', [ResultController::class, 'showResult']);
                Route::post('send/accept', [ChallengeController::class, 'statusStartGaming']);
                Route::get('end/{challengeId}', [ChallengeController::class, 'endOFChallenge']);
                Route::post('score', [ResultController::class, 'storeCompetitorsScore']);


            });


    });

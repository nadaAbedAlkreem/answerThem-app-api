<?php

use App\Http\Controllers\Api\V1\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\RegisterController;
use App\Http\Controllers\Api\V1\Auth\SocialAuthController;
use App\Http\Controllers\Api\V1\Auth\UserController;
use App\Http\Controllers\Api\V1\ContactUsController;
use App\Http\Controllers\Api\V1\EvaluationController;
use App\Http\Controllers\Api\V1\Friends\FriendController;
use App\Http\Controllers\Api\V1\Friends\FriendRequestController;
use App\Http\Controllers\Api\V1\Game\CategoryController;
use App\Http\Controllers\Api\V1\Game\ChallengeController;
use App\Http\Controllers\Api\V1\Game\InvitationController;
use App\Http\Controllers\Api\V1\Game\QuestionController;
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


Route::middleware([ SetLocale::class  , UpdateLastActive::class])->group( function () {
                Route::prefix('auth')->group(function ()
            {
                Route::get('/translate', [UserController::class, 'getTranslatedPagesAuthentication']);
                Route::get('/login', [LoginController::class, 'index'])->name('login');
                Route::get('/users', [UserController::class, 'getAllUsers']);
                Route::get('/user/delete/{id}', [UserController::class, 'deleteUser']);

                Route::get('/users/search', [UserController::class, 'getSearchUsers']);
                Route::post('/register', [RegisterController::class, 'register']);
                Route::post('/login', [LoginController::class, 'login'])->name('login-post');
                Route::post('login/callback', [SocialAuthController::class, 'handleSocialLogin']);
                Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink']);
                Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword']);
                Route::post('verifyToken', [ForgotPasswordController::class, 'verifyToken']);

            });
    Route::prefix('setting')->group(function ()
    {
        Route::get('', [SettingController::class, 'index']);
        Route::get('{id}', [SettingController::class, 'show'])->name('setting.show');
        Route::post('update/{id}', [SettingController::class, 'update'])->name('setting.update');

    });
    Route::middleware(['auth:sanctum' ,\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class , 'throttle:api' , Illuminate\Routing\Middleware\SubstituteBindings::class  ,  ])->group(function () {


            Route::post('/logout', [LoginController::class, 'logout']);
            Route::get('/user/{userId}', [UserTrackingController::class, 'getCurrentUser']);

            Route::post('profile/update', [UserController::class, 'updateProfile']);
            Route::prefix('user-tracking')->group(function ()
            {
                Route::get('track-entry/{userId}', [UserTrackingController::class, 'trackAppEntry']);
//                Route::get('{userId}', [UserTrackingController::class, 'getTrafficForCurrentUser']);

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

                Route::get('search', [CategoryController::class, 'searchCategories']);
                Route::get('search/subCategories', [CategoryController::class, 'searchSubCategories']);

                Route::get('{id}/category', [CategoryController::class, 'getSubAndPrimeCategoryById']);
                Route::get('home', [CategoryController::class, 'getCategoriesDetails']);
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
                Route::get('test-yourself', [QuestionController::class, 'tryChallengeAlone']);

            });

           Route::post('evaluation', [EvaluationController::class, 'store']);
           Route::get('invitation/current', [InvitationController::class, 'currentInvitationJoinChallenge']);





});
//dashboard


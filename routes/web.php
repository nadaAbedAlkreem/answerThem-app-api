<?php

use App\Http\Controllers\Api\V1\ContactUsController;
use App\Http\Controllers\Dashboard\Auth\LoginController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Api\V1\SettingController;
use App\Http\Controllers\Dashboard\QuestionController;
use App\Http\Middleware\AdminGuardMiddleware;
use App\Http\Middleware\CheckLanguage;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;




include_once __DIR__.'/api.php';


    Route::prefix('admin')->group(callback: function () {
        Route::get('login', [LoginController::class , 'index'])->name('admin.login');
        Route::post('login', [LoginController::class , 'login'])->name('admin.login.store');

    });


Route::group(['middleware' =>  CheckLanguage::class  , AdminGuardMiddleware::class ], function () {

    Route::get('admin/logout', [LoginController::class , 'logout'])->name('admin.logout');

    Route::prefix('dashboard')->group(function ()
    {
        Route::get('home/{lang}', [HomeController::class, 'index'])->name('dashboard.home');

        Route::get('setting/{lang}', [SettingController::class, 'show'])->name('dashboard.setting.create');
        Route::post('setting/update', [SettingController::class, 'update'])->name('dashboard.setting.update');


        Route::prefix('category')->group(function ()
        {
            Route::get('/{lang}', [CategoryController::class, 'index'])->name('dashboard.category');
            Route::post('create/', [CategoryController::class, 'store'])->name('dashboard.category.create');
            Route::post('update', [CategoryController::class, 'update'])->name('dashboard.category.update');
            Route::delete('delete/{id}', [CategoryController::class, 'destroy'])->name('dashboard.category.delete');
            Route::get('/get-categories', [CategoryController::class, 'getCategories']);
            Route::get('/search/filter', [CategoryController::class, 'searchCategories'])->name('categories.search');


        }
        );
        Route::prefix('question')->group(function ()
        {
            Route::get('/{lang}', [QuestionController::class, 'index'])->name('dashboard.question');
            Route::post('create/', [QuestionController::class, 'store'])->name('dashboard.question.create');
            Route::post('update', [QuestionController::class, 'update'])->name('dashboard.question.update');
            Route::post('filter', [QuestionController::class, 'filterLevelCategory'])->name('dashboard.question.filter');
            Route::delete('delete/{id}', [QuestionController::class, 'destroy'])->name('dashboard.question.delete');

        }
        );
        Route::prefix('users')->group(function ()
        {
            Route::get('/{lang}', [UserController::class, 'index'])->name('dashboard.users');
            Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('dashboard.users.delete');

        }
        );
        Route::prefix('contact_us')->group(function ()
        {
            Route::get('/{lang}', [ContactUsController::class, 'index'])->name('dashboard.contact_us');
            Route::post('update', [ContactUsController::class, 'updateStatus'])->name('dashboard.contact_us.update');

        }
        );

        Route::get('setting/{lang}', [SettingController::class, 'show'])->name('dashboard.setting.create');
        Route::post('setting/update', [SettingController::class, 'update'])->name('dashboard.setting.update');
        Route::post('lang', [CategoryController::class, 'changeLangVersion'])->name('dashboard.language');




    });
});



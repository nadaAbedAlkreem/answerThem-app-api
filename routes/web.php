<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Api\V1\SettingController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;




include_once __DIR__.'/api.php';


Route::prefix('auth')->group(function () {
    Route::get('login', function () {
        return view('dashboard.auth.pages.sign_in');
    });

});

Route::group(['middleware' =>  SetLocale::class  ], function () {
    Route::prefix('dashboard')->group(function ()
    {
        Route::get('home', function (){
            return  view('dashboard.pages.home');
        })->name('dashboard.home');

        Route::get('setting', [SettingController::class, 'show'])->name('dashboard.setting.create');
        Route::post('setting/update', [SettingController::class, 'update'])->name('dashboard.setting.update');


        Route::prefix('category')->group(function ()
        {
            Route::get('', [CategoryController::class, 'index'])->name('dashboard.category');
            Route::post('', [CategoryController::class, 'store'])->name('dashboard.category.create');
            Route::delete('{id}', [CategoryController::class, 'destroy'])->name('dashboard.category.delete');

        }
        );

        Route::get('setting', [SettingController::class, 'show'])->name('dashboard.setting.create');
        Route::post('setting/update', [SettingController::class, 'update'])->name('dashboard.setting.update');
        Route::post('lang', [CategoryController::class, 'changeLangVersion'])->name('dashboard.language');




    });
});



<?php

use App\Http\Controllers\Api\V1\SettingController;
use App\Http\Middleware\CustomVerifyCsrfToken;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\RegisterController;




include_once __DIR__.'/api.php';


Route::prefix('auth')->group(function () {
    Route::get('login', function () {
        return view('dashboard.auth.pages.sign_in');
    });

});
Route::group(['middleware' =>  SetLocale::class , 'web'  ], function () {
    Route::prefix('dashboard')->group(function ()
    {
        Route::get('home', function (){
            return  view('dashboard.pages.home');
        })->name('dashboard.home');
        Route::prefix('setting')->group(function ()
        {
            Route::get('', [SettingController::class, 'show'])->name('dashboard.setting.create');
            Route::post('update', [SettingController::class, 'update'])->name('dashboard.setting.update');
        });
    });
});


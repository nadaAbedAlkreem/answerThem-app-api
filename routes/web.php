<?php

use App\Http\Controllers\Api\V1\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\RegisterController;




include_once __DIR__.'/api.php';


Route::prefix('auth')->group(function ()
{
    Route::get('login', function (){
        return  view('dashboard.auth.pages.sign_in');
    });

});

Route::prefix('dashboard')->group(function ()
{
    Route::get('home', function (){
        return  view('dashboard.pages.home');
    })->name('dashboard.home');
    Route::get('setting/{lang}', [SettingController::class, 'show'])->name('dashboard.setting.create');

});

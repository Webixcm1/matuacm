<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Drive\AccueilController;
use App\Http\Controllers\Drive\SettingController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\VerifyAccountController;
use App\Http\Middleware\VerifyAccountMiddleware;

//HOME ROUTE
Route::get('/', [HomeController::class, 'index'])->name('index');

//ABOUT ROUTE
Route::get('about', [AboutController::class, 'index'])->name('about');

//CONTACT PAGE ROUTE
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'sendMessage'])->name('contact.store');

//REGISTER ROUTE
Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'index')->name('register');
    Route::post('register', 'register')->name('register.store');
});

//LOGIN ROUTE
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login', 'login')->name('login.store');
});
Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('auth')->prefix('drive')->group(function (){
    //DRIVE ROUTE
    Route::get('home', [AccueilController::class, 'index'])->name('home');
    
    //VERIFY ACCOUNT ROUTE
    Route::controller(VerifyAccountController::class)->group(function () {
        Route::get('verify-account', 'index')->name('verify-account');
        Route::post('verify-account/{id}/verify', 'verifyAccount')->name('verify-account.store');
    });

    //TRAJET ROUTE
    Route::controller(TrajetController::class)->group(function () {
        Route::get('trajets', 'create')->name('trajets.create')->middleware('checkVerify');
        Route::get('trajets/{trajet}/edit', 'edit')->name('trajets.edit');
        Route::post('trajets', 'store')->name('trajets.store');
        Route::put('tarjets/{trajet}', 'update')->name('trajets.update');
        Route::delete('trajets/{trajet}', 'destroy')->name('trajets.destroy');
        Route::patch('trajets/{trajet}/toggle', 'changeTrajetStatus')->name('trajets.changeStatus');
    });

    //SETTING ROUTE
    Route::controller(SettingController::class)->group(function (){
        Route::get('settings', 'index')->name('stettings.index');
    });
});
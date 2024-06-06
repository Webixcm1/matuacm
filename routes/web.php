<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Route;

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
    Route::post('logout', 'logout')->name('logout');
});
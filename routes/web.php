<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//HOME ROUTE
Route::get('/', [HomeController::class, 'index'])->name('index');

//CONTACT PAGE ROUTE
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');


//AUTHENTIFICATION ROUTE
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('login', [LoginController::class, 'index'])->name('login');
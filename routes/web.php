<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Аутентификация и регистрация пользователя
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('logining', [AuthController::class, 'logining'])->name('logining');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('registering', [AuthController::class, 'registering'])->name('registering');
});

// Страницы только для авторизованных пользователей
Route::middleware('auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('logout', 'logout')->name('logout');
    });

    Route::controller(HomeController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('profile', 'profile')->name('profile');
    });
});

Route::get('test', [HomeController::class, 'test'])->name('test');
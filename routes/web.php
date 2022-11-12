<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// User auths
Route::get('login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('logining', [AuthController::class, 'logining'])->name('logining');
Route::get('register', [AuthController::class, 'register'])->middleware('guest')->name('register');
Route::post('registering', [AuthController::class, 'registering'])->middleware('guest')->name('registering');

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
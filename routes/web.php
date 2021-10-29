<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('index')->middleware('activate');

Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'view'])->name('login');
    Route::get('/register', [RegisterController::class, 'view'])->name('register');

    Route::post('/register', [RegisterController::class, 'store']);
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware(['auth'])->group(function (){
    Route::get('/logout', [LogoutController::class, 'logoutGet']);
    Route::post('/logout',[LogoutController::class, 'logout'])->name('logout');

    Route::prefix('dashboard')->group(function (){
        Route::get('/', [DashboardController::class, 'index'])->name('index-dashboard');
    });
});
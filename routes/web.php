<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')
    ->group(function () {
        Route::get('/', [AuthController::class, 'login'])->name('login');
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::get('/authentication', [AuthController::class, 'authentication'])->name('authentication');
        Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
    });

Route::middleware('auth')
    ->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/home', [DashboardController::class, 'index'])->name('home');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('items', ItemController::class);
    });

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::get('/template', function () {
    return view('layouts.theme');
});

Route::middleware('guest')
->group(function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/authentication', [AuthController::class, 'authentication'])->name('authentication');
    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
});

Route::middleware('auth')
->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

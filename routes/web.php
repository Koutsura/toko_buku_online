<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [App\Http\Controllers\AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/password/reset', [App\Http\Controllers\AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/password/update', action: [App\Http\Controllers\AuthController::class, 'updatePassword'])->name('password.update');

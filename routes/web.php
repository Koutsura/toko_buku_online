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


Route::get('/toko/buku/index', [App\Http\Controllers\BukuController::class, 'index'])->name('buku.index')->middleware('admin');
Route::get('/toko/buku/create', [App\Http\Controllers\BukuController::class, 'create'])->name('buku.create')->middleware('admin');
Route::post('/toko/buku', [App\Http\Controllers\BukuController::class, 'store'])->name('buku.store')->middleware('admin');
Route::get('/toko/buku/{id}/edit', [App\Http\Controllers\BukuController::class, 'edit'])->name('buku.edit')->middleware('admin');
Route::put('/toko/buku/{id}', [App\Http\Controllers\BukuController::class, 'update'])->name('buku.update')->middleware('admin');
Route::delete('/toko/buku/{id}', [App\Http\Controllers\BukuController::class, 'destroy'])->name('buku.destroy')->middleware('admin');


Route::get('/toko/sale', [App\Http\Controllers\SaleController::class, 'index'])->name('sale.index')->middleware('admin');
Route::get('/toko/sale/create', [App\Http\Controllers\SaleController::class, 'create'])->name('sale.create')->middleware('customer');
Route::post('/toko/sale', [App\Http\Controllers\SaleController::class, 'store'])->name('sale.store')->middleware('customer');
Route::get('/invoice/{sale_id}', [App\Http\Controllers\SaleController::class, 'invoice'])->name('sale.invoice')->middleware('customer');
Route::get('invoice/download/{sale_id}', [App\Http\Controllers\SaleController::class, 'invoiceDownload'])->name('sale.invoice.download');

Route::get('/toko/hakakses', [App\Http\Controllers\HakaksesController::class, 'index'])->name('hakakses.index')->middleware('admin');
Route::get('/toko/hakakses/edit/{id}', [App\Http\Controllers\HakaksesController::class, 'edit'])->name('hakakses.edit')->middleware('admin');
Route::put('/toko/hakakses/update/{id}', [App\Http\Controllers\HakaksesController::class, 'update'])->name('hakakses.update')->middleware('admin');
Route::delete('/toko/hakakses/delete/{id}', [App\Http\Controllers\HakaksesController::class, 'destroy'])->name('hakakses.delete')->middleware('admin');

Route::get('layout/toko/buku', [App\Http\Controllers\BukuController::class, 'index'])->name('layout.toko.buku.index')->middleware('admin');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('customer');
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');



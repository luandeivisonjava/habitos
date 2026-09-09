<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');
Route::get('/cadastro', [RegisterController::class, 'index'])->name('site.register');
Route::post('/cadastro', [RegisterController::class, 'store'])->name('auth.register');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [SiteController::class, 'dashboard']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

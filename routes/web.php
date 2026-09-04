<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);

Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'authenticate']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [SiteController::class, 'dashboard']);
    Route::get('logout', [LoginController::class, 'logout']);
});

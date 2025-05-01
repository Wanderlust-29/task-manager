<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskSeController;
use App\Http\Controllers\AuthController;

// Routes publiques (non protégées)
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login-check', [AuthController::class, 'login'])->name('login.check');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes protégées par le middleware 'auth'
Route::middleware('auth')->group(function () {
    Route::get('/', [TaskSeController::class, 'index'])->name('index');
    Route::resource('/task', TaskSeController::class);
    
});
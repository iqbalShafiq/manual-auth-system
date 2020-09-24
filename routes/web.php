<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('register', [RegisterController::class, 'create'])->name('auth.register');
Route::post('register', [RegisterController::class, 'store']);

<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\P2dbController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']) -> name('login');
Route::get('/register', [RegisterController::class, 'register']) -> name('register');
Route::get('/p2db', [P2dbController::class, 'p2db']) -> name('p2db');
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get("/", fn () => view('home')) -> name('home');

// Auth
Route::get('/signin', [AuthController::class, 'signinPage'])->name('login');
Route::get('/signup', [AuthController::class, 'signupPage'])->name('signup');

Route::post('/register', [AuthController::class, 'register']) -> name('registerAccount');
Route::post('/login', [AuthController::class, 'login']) -> name('authAccount');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index']) -> middleware('auth') -> name('dashboard');
Route::resource('/tasks', TaskController::class) -> middleware('auth');
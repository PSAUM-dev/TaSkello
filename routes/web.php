<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get("/", fn () => view('home')) -> name('home');
Route::get('/dashboard', [DashboardController::class, 'index']) -> name('dashboard');

Route::resource('/tasks', TaskController::class);
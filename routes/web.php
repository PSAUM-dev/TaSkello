<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get("/", fn () => view('home')) -> name('home');
Route::resource('/tasks', TaskController::class);
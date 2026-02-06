<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\masterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WelcomeController;


Route::get('/master', [masterController::class, 'master']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/welcome', [WelcomeController::class, 'welcome']);




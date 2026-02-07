<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\masterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoriesController;
use App\Models\Category;

Route::get('/master', [masterController::class, 'master']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/welcome', [WelcomeController::class, 'welcome']);
Route::get('/categories', [CategoriesController::class, 'index']);
Route::resource('categories', CategoriesController::class);





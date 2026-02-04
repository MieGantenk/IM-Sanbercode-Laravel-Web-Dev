<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/signUp', [FormController::class, 'signUp']);
Route::get('/welcome', [FormController::class, 'welcome']);
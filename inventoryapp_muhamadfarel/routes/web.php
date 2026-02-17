<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ListCategoryController;
use App\Http\Controllers\TransactionController;

Route::middleware('role:admin')->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
    Route::resource('categories', CategoriesController::class);
    Route::resource('listcategories', ListCategoryController::class);
});

Route::middleware('role:staff')->group(function () {
    Route::get('/index', [HomeController::class, 'index'])->name('index');
    Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
});

Route::middleware('auth')->group(function () { 
    Route::get('/profile', [ProfilController::class, 'index'])->name('profile.index'); 
});

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::resource('products', ProductsController::class);
Route::resource('profiles', ProfilController::class);
Route::resource('transactions', TransactionController::class);





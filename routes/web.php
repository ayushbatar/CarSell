<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('signup', [AuthController::class, 'signupView'])->name('signup');
Route::post('signup', [AuthController::class, 'signup'])->name('signup.form');
Route::get('login', [AuthController::class, 'loginView'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.form');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/car/search', [CarController::class, 'search'])->name('car.search');
Route::resource('car', CarController::class)->except(['search']);

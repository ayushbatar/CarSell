<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('signup', [SignupController::class, 'create'])->name('signup');
Route::get('login', [LoginController::class, 'create'])->name('login');

Route::get('/car/search', [CarController::class, 'search'])->name('car.search');
Route::resource('car', CarController::class)->except(['search']);

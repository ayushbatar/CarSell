<?php

use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('signup', [SignupController::class, 'create'])->name('signup');
Route::get('login', [LoginController::class, 'create'])->name('login');

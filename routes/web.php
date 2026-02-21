<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
Route::get('/', function(){
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'LoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware('auth')->group (function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
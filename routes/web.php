<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected dashboard route (requires authentication)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

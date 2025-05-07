<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index']);
Route::post('/welcome', [FormController::class, 'welcome'])->name('welcome');
Route::get('/register', [FormController::class, 'register'])->name('register');


<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsUser;


Route::get('/', [DashboardController::class, 'index']);
Route::post('/welcome', [FormController::class, 'welcome'])->name('welcome');
route::resource('platform', PlatformController::class);


// route::resource('profile', ProfileController::class)->middleware(IsUser::class);
// route::resource('profile', ProfileController::class);

// ->only(['index','show','create', 'store', 'edit', 'update']); 

Route::middleware(['auth'] )->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store'); // jika belum punya profile
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update'); // jika sudah punya
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});




Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('genre', GenreController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
});

Route::resource('genre', GenreController::class)->only(['index', 'show'])->middleware('auth');

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('books', BooksController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
});

Route::resource('books', BooksController::class)->only(['index', 'show'])->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);



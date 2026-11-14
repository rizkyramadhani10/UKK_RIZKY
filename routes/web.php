<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfileController::class, 'show'])->name('profile');
Route::get('/profil', [ProfileController::class, 'index'])->name('profile');

Route::get('/produk-layanan', [ProductController::class, 'index'])->name('products.index');
Route::get('/produk-layanan/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery');
Route::get('/kontak', [ContactController::class, 'show'])
    ->middleware('auth')
    ->name('contact');
Route::post('/kontak', [ContactController::class, 'submit'])
    ->middleware('auth')
    ->name('contact.submit');
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/login', [AuthController::class, 'showLogin'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [AuthController::class, 'login'])
    ->middleware('guest')
    ->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegister'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [AuthController::class, 'register'])
    ->middleware('guest')
    ->name('register.submit');

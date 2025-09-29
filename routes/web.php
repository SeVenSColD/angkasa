<?php

use Illuminate\Support\Facades\Route;

// ⚠️ Hapus/komentari route POST kalau memang mau static site
// Route::post('/contact', [ReviewController::class, 'store'])->name('reviews.store');

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/services', 'services');
Route::view('/readmore', 'readmore');
Route::view('/contact', 'contact');
Route::view('/development', 'development');
Route::view('/planning', 'planning');

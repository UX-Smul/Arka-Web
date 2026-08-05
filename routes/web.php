<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;

// ======================
// Portfolio
// ======================

Route::get('/', [GalleryController::class, 'home'])->name('home');

Route::view('/about', 'pages.about')->name('about');

Route::get('/gallery', [GalleryController::class, 'publicGallery'])
    ->name('gallery');

Route::view('/contact', 'pages.contact')->name('contact');

// ======================
// Admin
// ======================

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [GalleryController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::resource('gallery', GalleryController::class);

    Route::post(
        'gallery/{gallery}/cover',
        [GalleryController::class, 'setCover']
    )->name('gallery.cover');
});

// ======================
// Breeze
// ======================

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
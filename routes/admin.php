<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PostController;

// All admin routes are prefixed with /admin
Route::prefix('admin')->name('admin.')->group(function () {
    
    // Guest routes (Login)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    });

    // Authenticated routes
    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        
        // Dashboard
        Route::get('/dashboard', function () {
            return view('admin.dashboard'); // We will create this view next
        })->name('dashboard');

        // CRUD Posts
        Route::resource('posts', PostController::class);

        // Pages CMS Route
        Route::resource('pages', \App\Http\Controllers\Admin\PageController::class)->except(['create', 'store', 'show', 'destroy']);
    });
});

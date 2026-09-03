<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PostController;

// All admin routes are prefixed with /admin
Route::prefix('admin')->name('admin.')->group(function () {
    
    // Guest routes (Login)
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    // Authenticated routes
    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        
        // Dashboard
        Route::get('/dashboard', function () {
            return view('admin.dashboard'); // We will create this view next
        })->name('dashboard');

        // CRUD Posts
        Route::resource('posts', PostController::class);

        // CRUD Product Categories
        Route::resource('product-categories', \App\Http\Controllers\Admin\ProductCategoryController::class);

        // CRUD Products
        Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
        Route::delete('products/{product}/image/{imageIndex}', [\App\Http\Controllers\Admin\ProductController::class, 'deleteImage'])->name('products.deleteImage');

        // CRUD Markets
        Route::resource('markets', \App\Http\Controllers\Admin\MarketController::class);

        // Pages CMS Route (for other pages like Contact, Solutions)
        Route::resource('pages', \App\Http\Controllers\Admin\PageController::class)->except(['create', 'store', 'show', 'destroy']);
        // Home CMS Route
        Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'edit'])->name('home.edit');
        Route::post('/home', [\App\Http\Controllers\Admin\HomeController::class, 'update'])->name('home.update');

        // About CMS Route
        Route::get('/about', [\App\Http\Controllers\Admin\AboutController::class, 'edit'])->name('about.edit');
        Route::post('/about', [\App\Http\Controllers\Admin\AboutController::class, 'update'])->name('about.update');

        // Capabilities CRUD Route
        Route::resource('capabilities', \App\Http\Controllers\Admin\CapabilityController::class)->except(['show']);

        // Suryasukses Studio Setting Route
        Route::get('studio', [\App\Http\Controllers\Admin\StudioController::class, 'edit'])->name('studio.edit');
        Route::put('studio', [\App\Http\Controllers\Admin\StudioController::class, 'update'])->name('studio.update');

        // Contact Page Setting Route
        Route::get('/contact', [\App\Http\Controllers\Admin\ContactPageController::class, 'edit'])->name('contact.edit');
        Route::put('/contact', [\App\Http\Controllers\Admin\ContactPageController::class, 'update'])->name('contact.update');
    });
});

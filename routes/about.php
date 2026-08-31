<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/about', [PageController::class, 'show'])->defaults('slug', 'about')->name('about');
Route::get('/about/values', [PageController::class, 'show'])->defaults('slug', 'about-values')->name('about.values');
Route::get('/about/quality', [PageController::class, 'show'])->defaults('slug', 'about-quality')->name('about.quality');
Route::get('/about/career', [PageController::class, 'show'])->defaults('slug', 'about-career')->name('about.career');

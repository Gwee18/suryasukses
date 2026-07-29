<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| News & Blog Routes
|--------------------------------------------------------------------------
*/

Route::get('/blog/index', [PostController::class, 'index'])->name('news');
Route::redirect('/news', '/blog/index');

Route::get('/blog/detail/{slug}', [PostController::class, 'show'])->name('news.detail');

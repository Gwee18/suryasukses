<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/product', [ProductController::class, 'index'])->name('product');

// Rute Product tambahan, mengikuti pola URL resmi suryasukses.com
// supaya struktur halaman Product identik (kategori & sub-produk terpisah).
Route::get('/home/product_landing/{id}/slug/{slug}', [ProductController::class, 'landing'])->name('product.landing');
Route::get('/home/product_range/{id}/parent/{parentId}/slug/{slug}', [ProductController::class, 'range'])->name('product.range');

Route::get('/market', function () {
    return view('market.index');
})->name('market');

Route::get('/solutions', [SolutionController::class, 'index'])->name('solutions');
Route::get('/capabilities', [SolutionController::class, 'capabilities'])->name('capabilities');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

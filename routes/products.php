<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/home/product_landing/{id}/slug/{slug}', [ProductController::class, 'landing'])->name('product.landing');
Route::get('/home/product_range/{id}/parent/{parentId}/slug/{slug}', [ProductController::class, 'range'])->name('product.range');
<?php
use Illuminate\Support\Facades\Route;

Route::get('/product', function () {
    return view('product.index');
})->name('product');

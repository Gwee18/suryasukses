<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/product', function () {
    return view('product.index');
})->name('product');

Route::get('/market', function () {
    return view('market.index');
})->name('market');

Route::get('/solutions', function () {
    return view('solutions.index');
})->name('solutions');

require __DIR__.'/about.php';
require __DIR__.'/news.php';

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
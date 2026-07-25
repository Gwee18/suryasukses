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

Route::get('/about', function () {
    return view('about.index');
})->name('about');

Route::get('/news', function () {
    return view('news.index');
})->name('news');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
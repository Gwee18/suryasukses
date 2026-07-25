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

Route::get('/about/values', function () {
    return view('about.values');
})->name('about.values');

Route::get('/about/quality', function () {
    return view('about.quality');
})->name('about.quality');

Route::get('/about/career', function () {
    return view('about.career');
})->name('about.career');

Route::get('/news', function () {
    return view('news.index');
})->name('news');

Route::get('/news/page2', function () {
    return view('news.page2');
})->name('news.page2');

Route::get('/news/page3', function () {
    return view('news.page3');
})->name('news.page3');

Route::get('/news/detail', function () {
    return view('news.detail');
})->name('news.detail');

Route::get('/news/detail32', function () {
    return view('news.detail32');
})->name('news.detail32');

Route::get('/news/detail31', function () {
    return view('news.detail31');
})->name('news.detail31');

Route::get('/news/detail29', function () {
    return view('news.detail29');
})->name('news.detail29');

Route::get('/news/detail28', function () {
    return view('news.detail28');
})->name('news.detail28');

Route::get('/news/detail23', function () {
    return view('news.detail23');
})->name('news.detail23');

Route::get('/news/detail22', function () {
    return view('news.detail22');
})->name('news.detail22');

Route::get('/news/detail21', function () {
    return view('news.detail21');
})->name('news.detail21');

Route::get('/news/detail20', function () {
    return view('news.detail20');
})->name('news.detail20');

Route::get('/news/detail19', function () {
    return view('news.detail19');
})->name('news.detail19');

Route::get('/news/detail18', function () {
    return view('news.detail18');
})->name('news.detail18');

Route::get('/news/detail16', function () {
    return view('news.detail16');
})->name('news.detail16');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
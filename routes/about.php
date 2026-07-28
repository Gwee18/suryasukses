<?php

use Illuminate\Support\Facades\Route;

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

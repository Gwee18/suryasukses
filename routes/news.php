<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| News Routes
|--------------------------------------------------------------------------
*/

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
    return view('news.detail.detail');
})->name('news.detail');

Route::get('/news/detail32', function () {
    return view('news.detail.detail32');
})->name('news.detail32');

Route::get('/news/detail31', function () {
    return view('news.detail.detail31');
})->name('news.detail31');

Route::get('/news/detail29', function () {
    return view('news.detail.detail29');
})->name('news.detail29');

Route::get('/news/detail28', function () {
    return view('news.detail.detail28');
})->name('news.detail28');

Route::get('/news/detail23', function () {
    return view('news.detail.detail23');
})->name('news.detail23');

Route::get('/news/detail22', function () {
    return view('news.detail.detail22');
})->name('news.detail22');

Route::get('/news/detail21', function () {
    return view('news.detail.detail21');
})->name('news.detail21');

Route::get('/news/detail20', function () {
    return view('news.detail.detail20');
})->name('news.detail20');

Route::get('/news/detail19', function () {
    return view('news.detail.detail19');
})->name('news.detail19');

Route::get('/news/detail18', function () {
    return view('news.detail.detail18');
})->name('news.detail18');

Route::get('/news/detail16', function () {
    return view('news.detail.detail16');
})->name('news.detail16');

Route::get('/news/detail15', function () {
    return view('news.detail.detail15');
})->name('news.detail15');

Route::get('/news/detail14', function () {
    return view('news.detail.detail14');
})->name('news.detail14');

Route::get('/news/detail13', function () {
    return view('news.detail.detail13');
})->name('news.detail13');

Route::get('/news/detail12', function () {
    return view('news.detail.detail12');
})->name('news.detail12');

Route::get('/news/detail10', function () {
    return view('news.detail.detail10');
})->name('news.detail10');

Route::get('/news/detail9', function () {
    return view('news.detail.detail9');
})->name('news.detail9');

Route::get('/news/detail7', function () {
    return view('news.detail.detail7');
})->name('news.detail7');

Route::get('/news/detail6', function () {
    return view('news.detail.detail6');
})->name('news.detail6');

Route::get('/news/detail5', function () {
    return view('news.detail.detail5');
})->name('news.detail5');

Route::get('/news/detail4', function () {
    return view('news.detail.detail4');
})->name('news.detail4');

Route::get('/news/detail1', function () {
    return view('news.detail.detail1');
})->name('news.detail1');

Route::get('/news/detail2', function () {
    return view('news.detail.detail2');
})->name('news.detail2');

Route::get('/news/detail3', function () {
    return view('news.detail.detail3');
})->name('news.detail3');

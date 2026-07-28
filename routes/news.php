<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| News & Blog Routes (Synced with suryasukses.com/blog/index)
|--------------------------------------------------------------------------
*/

Route::get('/blog/index', function () {
    return view('news.index');
})->name('news');

Route::redirect('/news', '/blog/index');

Route::get('/blog/index/Blog_page/2', function () {
    return view('news.page2');
})->name('news.page2');

Route::get('/blog/index/Blog_page/3', function () {
    return view('news.page3');
})->name('news.page3');

Route::get('/blog/detail/33', function () {
    return view('news.detail.detail');
})->name('news.detail');

Route::get('/blog/detail/32', function () {
    return view('news.detail.detail32');
})->name('news.detail32');

Route::get('/blog/detail/31', function () {
    return view('news.detail.detail31');
})->name('news.detail31');

Route::get('/blog/detail/29', function () {
    return view('news.detail.detail29');
})->name('news.detail29');

Route::get('/blog/detail/28', function () {
    return view('news.detail.detail28');
})->name('news.detail28');

Route::get('/blog/detail/23', function () {
    return view('news.detail.detail23');
})->name('news.detail23');

Route::get('/blog/detail/22', function () {
    return view('news.detail.detail22');
})->name('news.detail22');

Route::get('/blog/detail/21', function () {
    return view('news.detail.detail21');
})->name('news.detail21');

Route::get('/blog/detail/20', function () {
    return view('news.detail.detail20');
})->name('news.detail20');

Route::get('/blog/detail/19', function () {
    return view('news.detail.detail19');
})->name('news.detail19');

Route::get('/blog/detail/18', function () {
    return view('news.detail.detail18');
})->name('news.detail18');

Route::get('/blog/detail/16', function () {
    return view('news.detail.detail16');
})->name('news.detail16');

Route::get('/blog/detail/15', function () {
    return view('news.detail.detail15');
})->name('news.detail15');

Route::get('/blog/detail/14', function () {
    return view('news.detail.detail14');
})->name('news.detail14');

Route::get('/blog/detail/13', function () {
    return view('news.detail.detail13');
})->name('news.detail13');

Route::get('/blog/detail/12', function () {
    return view('news.detail.detail12');
})->name('news.detail12');

Route::get('/blog/detail/10', function () {
    return view('news.detail.detail10');
})->name('news.detail10');

Route::get('/blog/detail/9', function () {
    return view('news.detail.detail9');
})->name('news.detail9');

Route::get('/blog/detail/7', function () {
    return view('news.detail.detail7');
})->name('news.detail7');

Route::get('/blog/detail/6', function () {
    return view('news.detail.detail6');
})->name('news.detail6');

Route::get('/blog/detail/5', function () {
    return view('news.detail.detail5');
})->name('news.detail5');

Route::get('/blog/detail/4', function () {
    return view('news.detail.detail4');
})->name('news.detail4');

Route::get('/blog/detail/1', function () {
    return view('news.detail.detail1');
})->name('news.detail1');

Route::get('/blog/detail/2', function () {
    return view('news.detail.detail2');
})->name('news.detail2');

Route::get('/blog/detail/3', function () {
    return view('news.detail.detail3');
})->name('news.detail3');

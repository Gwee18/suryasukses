<?php
use Illuminate\Support\Facades\Route;

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

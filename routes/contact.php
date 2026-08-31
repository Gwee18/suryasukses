<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    $page = \App\Models\Page::where('slug', 'contact')->first();

    return view('contact.index', compact('page'));
})->name('contact');
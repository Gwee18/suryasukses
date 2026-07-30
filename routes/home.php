<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $latestNews = \App\Models\Post::orderBy('published_at', 'desc')->take(4)->get();
    return view('home.index', compact('latestNews'));
})->name('home');

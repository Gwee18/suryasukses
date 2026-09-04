<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $page = \App\Models\Page::where('slug', 'home')->first();
    $home = \App\Models\Home::first() ?? new \App\Models\Home();
    $cards = \App\Models\HomeCard::orderBy('order')->get();
    $sliders = \App\Models\HomeSlider::with('images')->orderBy('order')->get();
    $latestNews = \App\Models\Post::orderBy('published_at', 'desc')->take(4)->get();
    
    return view('home.index', compact('page', 'home', 'cards', 'sliders', 'latestNews'));
})->name('home');

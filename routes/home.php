<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $page = \App\Models\Page::where('slug', 'home')->first();
    $selectedNews = $page->content['selected_news'] ?? [];
    if (!empty($selectedNews)) {
        // Fetch selected posts and order them by the order in the array
        $latestNews = \App\Models\Post::whereIn('id', $selectedNews)
            ->orderByRaw('FIELD(id, ' . implode(',', $selectedNews) . ')')
            ->get();
    } else {
        $latestNews = \App\Models\Post::orderBy('published_at', 'desc')->take(4)->get();
    }
    return view('home.index', compact('latestNews', 'page'));
})->name('home');

<?php
use Illuminate\Support\Facades\Route;

Route::get('/about', function() {
    $about = \App\Models\About::first() ?? new \App\Models\About();
    return view('about.index', compact('about'));
})->name('about');

Route::get('/about/values', function() {
    $value = \App\Models\AboutValue::first() ?? new \App\Models\AboutValue();
    return view('about.values', compact('value'));
})->name('about.values');

Route::get('/about/quality', function() {
    $quality = \App\Models\AboutQuality::first() ?? new \App\Models\AboutQuality();
    return view('about.quality', compact('quality'));
})->name('about.quality');

Route::get('/about/career', function() {
    $career = \App\Models\AboutCareer::first() ?? new \App\Models\AboutCareer();
    return view('about.career', compact('career'));
})->name('about.career');

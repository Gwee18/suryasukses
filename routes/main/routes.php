<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolutionController;

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/product', function () {
    return view('product.index');
})->name('product');

Route::get('/market', function () {
    return view('market.index');
})->name('market');

Route::get('/solutions', [SolutionController::class, 'index'])->name('solutions');
Route::get('/capabilities', [SolutionController::class, 'capabilities'])->name('capabilities');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

Route::get('/policies/cerf-iso', function () {
    return view('policies.cerf_iso');
})->name('policies.cerf_iso');

Route::get('/policies/cerf-fssc', function () {
    return view('policies.cerf_fssc');
})->name('policies.cerf_fssc');

Route::get('/policies/quality', function () {
    return view('policies.quality');
})->name('policies.quality');

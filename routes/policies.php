<?php
use Illuminate\Support\Facades\Route;

Route::get('/policies/cerf-iso', function () {
    return view('policies.cerf_iso');
})->name('policies.cerf_iso');

Route::get('/policies/cerf-fssc', function () {
    return view('policies.cerf_fssc');
})->name('policies.cerf_fssc');

Route::get('/policies/quality', function () {
    return view('policies.quality');
})->name('policies.quality');

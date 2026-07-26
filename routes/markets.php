<?php

use Illuminate\Support\Facades\Route;

Route::prefix('markets')->group(function () {
    Route::view('/beverage', 'markets.beverage')->name('markets.beverage');
    Route::view('/healthcare', 'markets.healthcare')->name('markets.healthcare');
    Route::view('/household', 'markets.household')->name('markets.household');
    Route::view('/agriculture', 'markets.agriculture')->name('markets.agriculture');
    Route::view('/industrial', 'markets.industrial')->name('markets.industrial');
    Route::view('/filtration', 'markets.filtration')->name('markets.filtration');
    Route::view('/building-construction', 'markets.building_construction')->name('markets.building_construction');
});

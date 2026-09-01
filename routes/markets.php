<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketController;

Route::prefix('markets')->group(function () {
    Route::get('/{slug}', [MarketController::class, 'show'])->name('markets.show');
});
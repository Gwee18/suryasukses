<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolutionController;

Route::get('/solutions', [SolutionController::class, 'index'])->name('solutions');
Route::get('/capabilities', [SolutionController::class, 'capabilities'])->name('capabilities');

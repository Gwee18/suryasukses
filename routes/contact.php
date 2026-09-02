<?php

use Illuminate\Support\Facades\Route;
use App\Models\ContactPage;
use App\Models\ContactPic;
use App\Models\Office;

Route::get('/contact', function () {
    $contactPage = ContactPage::first();
    $pics = ContactPic::orderBy('order')->get();
    $offices = Office::with(['phones', 'addressLines'])
        ->orderBy('order')
        ->get();

    return view('contact.index', compact('contactPage', 'pics', 'offices'));
})->name('contact');
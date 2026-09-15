<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function show($slug)
    {
        $market = Market::where('slug', $slug)->firstOrFail();
        return view('markets.show', compact('market'));
    }
}
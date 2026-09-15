<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Display the solutions page.
     */
    public function index()
    {
        $page = \App\Models\Page::where('slug', 'solutions')->first();
        $studio = \App\Models\SuryasuksesStudio::first();
        return view('solutions.index', compact('page', 'studio'));
    }

    /**
     * Display the capabilities page.
     */
    public function capabilities()
    {
        $page = \App\Models\Page::where('slug', 'capabilities')->first();
        $capabilities = \App\Models\Capability::orderBy('sort_order', 'asc')->get();
        return view('solutions.capabilities', compact('page', 'capabilities'));
    }
}

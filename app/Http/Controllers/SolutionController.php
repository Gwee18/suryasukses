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
        return view('solutions.index', compact('page'));
    }

    /**
     * Display the capabilities page.
     */
    public function capabilities()
    {
        $page = \App\Models\Page::where('slug', 'capabilities')->first();
        return view('solutions.capabilities', compact('page'));
    }
}

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
        return view('solutions');
    }

    /**
     * Display the capabilities page.
     */
    public function capabilities()
    {
        return view('capabilities');
    }
}

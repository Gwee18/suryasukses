<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = \App\Models\Page::where('slug', $slug)->firstOrFail();
        
        // Define which view to use based on the slug
        $viewMap = [
            'about' => 'about.index',
            'about-values' => 'about.values',
            'about-quality' => 'about.quality',
            'about-career' => 'about.career',
        ];

        $viewName = $viewMap[$slug] ?? 'about.index';

        return view($viewName, compact('page'));
    }
}

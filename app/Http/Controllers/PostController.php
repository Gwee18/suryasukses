<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('published_at', 'desc')->paginate(12);
        return view('news.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        
        // "Next" means older post (further down the list)
        $next = Post::where('published_at', '<', $post->published_at)
                    ->orWhere(function ($query) use ($post) {
                        $query->where('published_at', $post->published_at)
                              ->where('id', '<', $post->id);
                    })
                    ->orderBy('published_at', 'desc')
                    ->orderBy('id', 'desc')
                    ->first();
                        
        // "Previous/Back" means newer post (higher up the list)
        $previous = Post::where('published_at', '>', $post->published_at)
                        ->orWhere(function ($query) use ($post) {
                            $query->where('published_at', $post->published_at)
                                  ->where('id', '>', $post->id);
                        })
                        ->orderBy('published_at', 'asc')
                        ->orderBy('id', 'asc')
                        ->first();
                    
        return view('news.detail.detail', compact('post', 'previous', 'next'));
    }
}

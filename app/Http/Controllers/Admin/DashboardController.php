<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Product;
use App\Models\Market;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung total data
        $totalPosts = Post::count();
        $totalProducts = Product::count();
        $totalMarkets = Market::count();
        $totalUsers = User::count();

        // Ambil 5 berita terbaru
        $latestPosts = Post::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalPosts', 
            'totalProducts', 
            'totalMarkets', 
            'totalUsers', 
            'latestPosts'
        ));
    }
}

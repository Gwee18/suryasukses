<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\ProductCategory;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Redirect /product (link lama) ke kategori pertama, meniru navigasi
     * "PRODUCTS" pada website resmi yang mengarah ke Packaging.
     */
    public function index()
    {
        $firstCategory = ProductCategory::orderBy('id', 'asc')->first();
        
        if (!$firstCategory) {
            return abort(404);
        }

        return Redirect::to('/home/product_landing/'.$firstCategory->id.'/slug/'.$firstCategory->slug);
    }

    /**
     * Halaman kategori produk, mis. /home/product_landing/2/slug/packaging
     */
    public function landing($id, string $slug)
    {
        $category = ProductCategory::where('slug', $slug)->firstOrFail();
        
        $ranges = Product::where('product_category_id', $category->id)->get();
        
        $allCategories = ProductCategory::with('products')->orderBy('id', 'asc')->get();
        
        // Load all products to build the sidebar exactly like it used to be
        $allRanges = Product::all();

        return view('product.index', [
            'categorySlug' => $slug,
            'category' => $category,
            'ranges' => $ranges,
            'allCategories' => $allCategories,
            'allRanges' => $allRanges,
        ]);
    }

    /**
     * Halaman detail sub-produk, mis.
     * /home/product_range/1/parent/2/slug/preform
     */
    public function range($id, $parentId, string $slug)
    {
        $range = Product::where('slug', $slug)->where('product_category_id', $parentId)->first();

        // Fallback: cocokkan lewat slug saja kalau parent id tidak pas
        if (! $range) {
            $range = Product::where('slug', $slug)->firstOrFail();
        }

        $category = $range->category;
        
        $allCategories = ProductCategory::with('products')->orderBy('id', 'asc')->get();
        $allRanges = Product::all();

        return view('product.detail', [
            'range' => $range,
            'category' => $category,
            'categorySlug' => $category->slug,
            'allCategories' => $allCategories,
            'allRanges' => $allRanges,
        ]);
    }
}

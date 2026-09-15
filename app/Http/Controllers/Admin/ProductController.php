<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('category')->orderBy('created_at', 'desc');

        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $products = $query->paginate(10)->appends($request->query());
        
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = ProductCategory::all();
        return view('admin.products.form', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'product_category_id' => 'required|exists:product_categories,id',
            'card_text' => 'nullable|max:255',
            'content' => 'required',
            'images.*' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/images/product'), $filename);
                $imagePaths[] = $filename;
            }
        }
        $validated['images'] = $imagePaths;

        // Process base64 images in content
        $validated['content'] = $this->processSummernoteContent($validated['content']);

        Product::create($validated);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Product $product)
    {
        $categories = ProductCategory::all();
        return view('admin.products.form', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'product_category_id' => 'required|exists:product_categories,id',
            'card_text' => 'nullable|max:255',
            'content' => 'required',
            'images.*' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        $imagePaths = $product->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/images/product'), $filename);
                $imagePaths[] = $filename;
            }
        }
        $validated['images'] = $imagePaths;

        // Process base64 images in content
        $validated['content'] = $this->processSummernoteContent($validated['content']);

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus.');
    }

    // Function to delete specific image
    public function deleteImage(Product $product, $imageIndex)
    {
        $images = $product->images ?? [];
        if (isset($images[$imageIndex])) {
            $filename = $images[$imageIndex];
            $path = public_path('assets/images/product/' . $filename);
            if (file_exists($path)) {
                unlink($path);
            }
            unset($images[$imageIndex]);
            $product->update(['images' => array_values($images)]);
        }
        return back()->with('success', 'Gambar berhasil dihapus.');
    }

    private function processSummernoteContent($html)
    {
        if (empty($html)) {
            return '';
        }

        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="UTF-8">' . $html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');

            if (preg_match('/^data:image\/(\w+);base64,/', $src, $matches)) {
                $type = $matches[1];
                $base64Data = substr($src, strpos($src, ',') + 1);
                $imageData = base64_decode($base64Data);

                $filename = time() . '_' . uniqid() . '.' . $type;
                $path = public_path('assets/images/product/' . $filename);
                
                if (!file_exists(public_path('assets/images/product'))) {
                    mkdir(public_path('assets/images/product'), 0777, true);
                }
                
                file_put_contents($path, $imageData);
                
                $img->removeAttribute('src');
                $img->setAttribute('src', '/assets/images/product/' . $filename);
            }
        }

        $content = $dom->saveHTML();
        return str_replace('<?xml encoding="UTF-8">', '', $content);
    }
}

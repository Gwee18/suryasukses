<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = ProductCategory::query();

        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $categories = $query->paginate(10)->appends($request->query());
        
        return view('admin.product_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.product_categories.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'intro' => 'nullable',
            'catalog_text' => 'nullable|max:255',
            'catalog_href' => 'nullable|max:255',
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

        ProductCategory::create($validated);

        return redirect()->route('admin.product-categories.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit(ProductCategory $productCategory)
    {
        return view('admin.product_categories.form', compact('productCategory'));
    }

    public function update(Request $request, ProductCategory $productCategory)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'intro' => 'nullable',
            'catalog_text' => 'nullable|max:255',
            'catalog_href' => 'nullable|max:255',
            'images.*' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        $imagePaths = $productCategory->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/images/product'), $filename);
                $imagePaths[] = $filename;
            }
        }
        $validated['images'] = $imagePaths;

        $productCategory->update($validated);

        return redirect()->route('admin.product-categories.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(ProductCategory $productCategory)
    {
        // Prevent deleting if it has products
        if ($productCategory->products()->count() > 0) {
            return redirect()->route('admin.product-categories.index')->with('error', 'Kategori tidak dapat dihapus karena masih memiliki produk.');
        }

        $productCategory->delete();
        return redirect()->route('admin.product-categories.index')->with('success', 'Kategori berhasil dihapus.');
    }
}

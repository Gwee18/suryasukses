<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Capability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CapabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $capabilities = Capability::orderBy('sort_order', 'asc')->get();
        return view('admin.capabilities.index', compact('capabilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.capabilities.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'sort_order' => 'required|integer',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Shift existing sort orders if there's a collision
        if (Capability::where('sort_order', $validated['sort_order'])->exists()) {
            Capability::where('sort_order', '>=', $validated['sort_order'])->increment('sort_order');
        }

        $capability = new Capability();
        $capability->title = $validated['title'];
        $capability->description = $validated['description'];
        $capability->sort_order = $validated['sort_order'];

        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/solutions/'), $filename);
            $capability->image = 'solutions/' . $filename;
        }

        $capability->save();

        return redirect()->route('admin.capabilities.index')->with('success', 'Kapabilitas berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Capability $capability)
    {
        return view('admin.capabilities.form', compact('capability'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Capability $capability)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'sort_order' => 'required|integer',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $old_sort_order = $capability->sort_order;
        $new_sort_order = $validated['sort_order'];

        if ($old_sort_order != $new_sort_order) {
            if ($new_sort_order < $old_sort_order) {
                Capability::where('id', '!=', $capability->id)
                    ->whereBetween('sort_order', [$new_sort_order, $old_sort_order - 1])
                    ->increment('sort_order');
            } else {
                Capability::where('id', '!=', $capability->id)
                    ->whereBetween('sort_order', [$old_sort_order + 1, $new_sort_order])
                    ->decrement('sort_order');
            }
        }

        $capability->title = $validated['title'];
        $capability->description = $validated['description'];
        $capability->sort_order = $new_sort_order;

        if ($request->hasFile('image_file')) {
            // Delete old file if exists
            if ($capability->image && file_exists(public_path('assets/images/' . $capability->image))) {
                @unlink(public_path('assets/images/' . $capability->image));
            }

            $file = $request->file('image_file');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/solutions/'), $filename);
            $capability->image = 'solutions/' . $filename;
        }

        $capability->save();

        return redirect()->route('admin.capabilities.index')->with('success', 'Kapabilitas berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Capability $capability)
    {
        if ($capability->image && file_exists(public_path('assets/images/' . $capability->image))) {
            @unlink(public_path('assets/images/' . $capability->image));
        }
        
        $deleted_sort_order = $capability->sort_order;

        $capability->delete();

        // Menggeser urutan (sort_order) untuk mengisi kekosongan
        Capability::where('sort_order', '>', $deleted_sort_order)->decrement('sort_order');

        return redirect()->route('admin.capabilities.index')->with('success', 'Kapabilitas berhasil dihapus.');
    }
}

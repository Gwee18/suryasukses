<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::orderBy('published_at', 'desc');

        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $posts = $query->paginate(10)->appends($request->query());
        
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'cover_image' => 'nullable|image|max:2048',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/news'), $filename);
            $validated['cover_image'] = $filename;
        }

        // Process base64 images in content
        $validated['content'] = $this->processSummernoteContent($validated['content']);

        Post::create($validated);

        return redirect()->route('admin.posts.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.form', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'cover_image' => 'nullable|image|max:2048',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/news'), $filename);
            $validated['cover_image'] = $filename;
        }

        // Process base64 images in content
        $validated['content'] = $this->processSummernoteContent($validated['content']);

        $post->update($validated);

        return redirect()->route('admin.posts.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Berita berhasil dihapus.');
    }

    private function processSummernoteContent($html)
    {
        if (empty($html)) {
            return '';
        }

        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        // Load HTML with UTF-8 encoding to prevent garbled characters
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
                $path = public_path('assets/images/news/' . $filename);
                
                // Ensure directory exists
                if (!file_exists(public_path('assets/images/news'))) {
                    mkdir(public_path('assets/images/news'), 0777, true);
                }
                
                file_put_contents($path, $imageData);
                
                $img->removeAttribute('src');
                $img->setAttribute('src', '/assets/images/news/' . $filename);
            }
        }

        $content = $dom->saveHTML();
        $content = str_replace('<?xml encoding="UTF-8">', '', $content);
        
        return $content;
    }
}

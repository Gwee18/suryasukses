<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = \App\Models\Page::where('slug', '!=', 'home')
            ->orderByRaw("FIELD(slug, 'about', 'about-values', 'about-quality', 'about-career')")
            ->paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    public function edit(\App\Models\Page $page)
    {
        $posts = \App\Models\Post::orderBy('published_at', 'desc')->get();
        return view('admin.pages.form', compact('page', 'posts'));
    }

    public function update(Request $request, \App\Models\Page $page)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|array',
            'content_images' => 'nullable|array',
        ]);

        $content = $page->content ?? [];

        // For home page, ensure we clear arrays if they are empty/deleted
        if ($page->slug == 'home') {
            for ($i = 1; $i <= 5; $i++) {
                $content['prod_img_'.$i] = $request->input("content.prod_img_$i", []);
            }
            $content['selected_news'] = $request->input('content.selected_news', []);
        }

        // Process each content text field if it contains HTML/images
        foreach ($validated['content'] as $key => $value) {
            if (!str_starts_with($key, 'prod_img_') && $key !== 'selected_news') {
                if (is_null($value)) {
                    $content[$key] = '';
                } else {
                    $content[$key] = $this->processSummernoteContent($value);
                }
            }
        }

        // Process uploaded images
        $uploadedImages = $request->file('content_images');
        if (is_array($uploadedImages)) {
            foreach ($uploadedImages as $key => $fileOrArray) {
                if (is_array($fileOrArray)) {
                    $paths = [];
                    foreach ($fileOrArray as $file) {
                        if ($file->isValid()) {
                            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                            $file->move(public_path('assets/images/pages/'), $filename);
                            $paths[] = 'pages/' . $filename;
                        }
                    }
                    if (isset($content[$key]) && is_array($content[$key])) {
                        $content[$key] = array_merge($content[$key], $paths);
                    } else {
                        $content[$key] = $paths;
                    }
                } else {
                    $file = $fileOrArray;
                    $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('assets/images/pages/'), $filename);
                    $content[$key] = 'pages/' . $filename;
                }
            }
        }

        $page->update([
            'title' => $validated['title'],
            'content' => $content,
        ]);

        if ($page->slug == 'home') {
            return redirect()->route('admin.pages.edit', $page->id)->with('success', 'Halaman Home berhasil diperbarui.');
        }

        return redirect()->route('admin.pages.index')->with('success', 'Halaman berhasil diperbarui.');
    }

    private function processSummernoteContent($html)
    {
        if (empty($html)) {
            return '';
        }
        if (is_array($html) || $html === strip_tags((string)$html)) {
            return $html;
        }

        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="UTF-8">' . $html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $filename = time() . '_' . uniqid() . '.' . $mimetype;
                
                $filepath = public_path('assets/images/pages/');
                if (!file_exists($filepath)) {
                    mkdir($filepath, 0755, true);
                }
                
                $imageContent = file_get_contents($src);
                file_put_contents($filepath . $filename, $imageContent);
                
                $img->removeAttribute('src');
                $img->setAttribute('src', asset('assets/images/pages/' . $filename));
            }
        }

        $content = $dom->saveHTML();
        return str_replace('<?xml encoding="UTF-8">', '', $content);
    }
}

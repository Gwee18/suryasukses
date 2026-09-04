<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\AboutValue;
use App\Models\AboutQuality;
use App\Models\AboutCareer;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::first() ?? new About();
        $value = AboutValue::first() ?? new AboutValue();
        $quality = AboutQuality::first() ?? new AboutQuality();
        $career = AboutCareer::first() ?? new AboutCareer();
        
        return view('admin.about.form', compact('about', 'value', 'quality', 'career'));
    }

    public function update(Request $request)
    {
        $about = About::first() ?? new About();
        $value = AboutValue::first() ?? new AboutValue();
        $quality = AboutQuality::first() ?? new AboutQuality();
        $career = AboutCareer::first() ?? new AboutCareer();

        // Handle Who We Are
        $about->who_we_are_text = $this->processSummernoteContent($request->input('who_we_are_text', ''));
        if ($request->hasFile('who_we_are_img1') && $request->file('who_we_are_img1')->isValid()) {
            $about->who_we_are_img1 = $this->uploadImage($request->file('who_we_are_img1'));
        }
        if ($request->hasFile('who_we_are_img2') && $request->file('who_we_are_img2')->isValid()) {
            $about->who_we_are_img2 = $this->uploadImage($request->file('who_we_are_img2'));
        }
        $about->save();

        // Handle Values
        $value->partnership_title = $request->input('partnership_title');
        $value->partnership_text = $request->input('partnership_text');
        $value->excellence_title = $request->input('excellence_title');
        $value->excellence_text = $request->input('excellence_text');
        $value->growth_title = $request->input('growth_title');
        $value->growth_text = $request->input('growth_text');
        $value->safety_title = $request->input('safety_title');
        $value->safety_text = $request->input('safety_text');
        if ($request->hasFile('value_image') && $request->file('value_image')->isValid()) {
            $value->image = $this->uploadImage($request->file('value_image'));
        }
        $value->save();

        // Handle Quality
        $quality->text1 = $this->processSummernoteContent($request->input('quality_text1', ''));
        $quality->text2 = $this->processSummernoteContent($request->input('quality_text2', ''));
        $quality->text3 = $this->processSummernoteContent($request->input('quality_text3', ''));
        if ($request->hasFile('quality_img1') && $request->file('quality_img1')->isValid()) {
            $quality->img1 = $this->uploadImage($request->file('quality_img1'));
        }
        if ($request->hasFile('quality_img2') && $request->file('quality_img2')->isValid()) {
            $quality->img2 = $this->uploadImage($request->file('quality_img2'));
        }
        if ($request->hasFile('quality_img3') && $request->file('quality_img3')->isValid()) {
            $quality->img3 = $this->uploadImage($request->file('quality_img3'));
        }
        $quality->save();

        // Handle Career
        $career->text = $this->processSummernoteContent($request->input('career_text', ''));
        $career->btn_text = $request->input('career_btn_text');
        $career->btn_link = $request->input('career_btn_link');
        if ($request->hasFile('career_image') && $request->file('career_image')->isValid()) {
            $career->image = $this->uploadImage($request->file('career_image'));
        }
        $career->save();

        return redirect()->back()->with('success', 'Halaman About berhasil diperbarui.');
    }

    private function uploadImage($file)
    {
        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/images/about/'), $filename);
        return 'about/' . $filename;
    }

    private function processSummernoteContent($html)
    {
        if (empty($html)) return '';
        if (is_array($html) || $html === strip_tags((string)$html)) return $html;

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
                $filepath = public_path('assets/images/about/');
                if (!file_exists($filepath)) mkdir($filepath, 0755, true);
                
                file_put_contents($filepath . $filename, file_get_contents($src));
                $img->removeAttribute('src');
                $img->setAttribute('src', asset('assets/images/about/' . $filename));
            }
        }
        return str_replace('<?xml encoding="UTF-8">', '', $dom->saveHTML());
    }
}

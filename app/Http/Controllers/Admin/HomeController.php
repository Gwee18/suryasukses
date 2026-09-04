<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\HomeCard;
use App\Models\HomeSlider;
use App\Models\HomeSliderImage;

class HomeController extends Controller
{
    public function edit()
    {
        $home = Home::first() ?? new Home();
        $cards = HomeCard::orderBy('order')->get();
        $sliders = HomeSlider::with('images')->orderBy('order')->get();
        return view('admin.home.form', compact('home', 'cards', 'sliders'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'hero_title' => 'nullable|string',
            'hero_text' => 'nullable|string',
            'cards' => 'array',
            'sliders' => 'array',
            'delete_slider_images' => 'array',
        ]);

        $home = Home::first() ?? new Home();
        $home->fill([
            'hero_title' => $validated['hero_title'] ?? null,
            'hero_text' => $validated['hero_text'] ?? null,
        ]);
        $home->save();

        if (isset($validated['cards']) && is_array($validated['cards'])) {
            foreach ($validated['cards'] as $id => $cardData) {
                $card = HomeCard::find($id);
                if ($card) {
                    $card->title = $cardData['title'] ?? null;
                    $card->description = $cardData['description'] ?? null;
                    $card->link = $cardData['link'] ?? null;
                    
                    if ($request->hasFile("cards.{$id}.image")) {
                        $file = $request->file("cards.{$id}.image");
                        if ($file->isValid()) {
                            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                            $file->move(public_path('assets/images/home/'), $filename);
                            $card->image = 'home/' . $filename;
                        }
                    }
                    $card->save();
                }
            }
        }

                if (isset($validated['sliders']) && is_array($validated['sliders'])) {
            foreach ($validated['sliders'] as $id => $sliderData) {
                $slider = HomeSlider::find($id);
                if ($slider) {
                    $slider->title = $sliderData['title'] ?? null;
                    $slider->description = $sliderData['description'] ?? null;
                    $slider->link = $sliderData['link'] ?? null;
                    
                    if ($request->hasFile("sliders.{$id}.icon")) {
                        $file = $request->file("sliders.{$id}.icon");
                        if ($file->isValid()) {
                            $filename = time() . '_icon_' . uniqid() . '.' . $file->getClientOriginalExtension();
                            $file->move(public_path('assets/images/home/'), $filename);
                            $slider->icon = 'home/' . $filename;
                        }
                    }
                    $slider->save();
                    
                    // Handle multiple new images
                    if ($request->hasFile("sliders.{$id}.new_images")) {
                        $files = $request->file("sliders.{$id}.new_images");
                        foreach ($files as $file) {
                            if ($file->isValid()) {
                                $filename = time() . '_slider_' . uniqid() . '.' . $file->getClientOriginalExtension();
                                $file->move(public_path('assets/images/home/'), $filename);
                                
                                $maxOrder = HomeSliderImage::where('home_slider_id', $slider->id)->max('order') ?? 0;
                                
                                HomeSliderImage::create([
                                    'home_slider_id' => $slider->id,
                                    'image' => 'home/' . $filename,
                                    'order' => $maxOrder + 1,
                                ]);
                            }
                        }
                    }
                }
            }
        }
        
        // Handle deletion of slider images
        if ($request->has('delete_slider_images')) {
            foreach ($request->input('delete_slider_images') as $imageId) {
                $image = HomeSliderImage::find($imageId);
                if ($image) {
                    // Optionally delete physical file
                    // if (file_exists(public_path('assets/images/' . $image->image))) {
                    //     unlink(public_path('assets/images/' . $image->image));
                    // }
                    $image->delete();
                }
            }
        }

        return redirect()->back()->with('success', 'Halaman Home berhasil diperbarui.');
    }
}

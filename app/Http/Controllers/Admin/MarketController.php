<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MarketController extends Controller
{
    public function index(Request $request)
    {
        $query = Market::orderBy('created_at', 'desc');

        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $markets = $query->paginate(10)->appends($request->query());
        
        return view('admin.markets.index', compact('markets'));
    }

    public function create()
    {
        return view('admin.markets.form');
    }

    public function store(Request $request)
    {
        $validated = $this->validateMarket($request);
        $validated['slug'] = Str::slug($validated['title']);
        $validated['banner_image'] = $this->handleUpload($request, 'banner_image');

        // Handle cards images
        $validated['cards'] = $this->handleCardsUpload($request, $request->input('cards', []));

        Market::create($validated);

        return redirect()->route('admin.markets.index')->with('success', 'Market berhasil ditambahkan.');
    }

    public function edit(Market $market)
    {
        return view('admin.markets.form', compact('market'));
    }

    public function update(Request $request, Market $market)
    {
        $validated = $this->validateMarket($request);
        
        $banner = $this->handleUpload($request, 'banner_image');
        if ($banner) {
            $validated['banner_image'] = $banner;
        }

        // Handle cards images
        $validated['cards'] = $this->handleCardsUpload($request, $request->input('cards', []), $market->cards ?? []);

        $market->update($validated);

        return redirect()->route('admin.markets.index')->with('success', 'Market berhasil diperbarui.');
    }

    public function destroy(Market $market)
    {
        $market->delete();
        return redirect()->route('admin.markets.index')->with('success', 'Market berhasil dihapus.');
    }

    private function validateMarket(Request $request)
    {
        return $request->validate([
            'title' => 'required|max:255',
            'subtitle' => 'nullable|max:255',
            'description' => 'nullable',
            
        ]);
    }

    private function handleUpload(Request $request, $fieldName)
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->file($fieldName);
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/markets'), $filename);
            return 'markets/' . $filename;
        }
        return null;
    }

    private function handleCardsUpload(Request $request, $cardsData, $oldCardsData = [])
    {
        $processedCards = [];
        for ($i = 0; $i < 6; $i++) {
            $card = $cardsData[$i] ?? [];
            if (!empty($card['title'])) {
                // If a new image is uploaded for this card
                if ($request->hasFile("cards.$i.image")) {
                    $file = $request->file("cards.$i.image");
                    $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('assets/images/markets'), $filename);
                    $card['image'] = 'markets/' . $filename;
                } else {
                    // Retain old image if exists
                    $card['image'] = $oldCardsData[$i]['image'] ?? '';
                }
                $processedCards[] = $card;
            }
        }
        return $processedCards;
    }
}
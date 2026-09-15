{{--
    Sidebar navigasi Product. Dipakai bersama oleh product/index.blade.php
    (halaman kategori) dan product/detail.blade.php (halaman sub-produk).

    Variabel yang diharapkan dari controller:
    - $allCategories : seluruh kategori (array asosiatif, key = slug)
    - $categorySlug   : slug kategori yang sedang aktif
    - $activeRangeId  : (opsional) id sub-produk yang sedang aktif
--}}
<aside class="product-page__sidebar">
    <h5 class="product-page__sidebar-title">Products</h5>
    <ul class="product-page__sidebar-nav" id="productSidebarNav">
        @foreach ($allCategories as $cat)
            <li data-category="{{ $cat->slug }}" class="{{ $cat->slug === $categorySlug ? 'is-active' : '' }}">
                <a href="{{ url('/home/product_landing/'.$cat->id.'/slug/'.$cat->slug) }}">{{ $cat->title }}</a>
                <ul>
                    @php($shownSlugs = [])
                    @php($activeSlug = isset($activeRangeId) ? ($allRanges->where('id', $activeRangeId)->first()->slug ?? null) : null)
                    @foreach ($cat->products as $r)
                        @continue(in_array($r->slug, $shownSlugs))
                        @php($shownSlugs[] = $r->slug)
                        <li class="{{ $activeSlug === $r->slug ? 'is-active' : '' }}">
                            <a href="{{ url('/home/product_range/'.$r->id.'/parent/'.$cat->id.'/slug/'.$r->slug) }}">{{ $r->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</aside>

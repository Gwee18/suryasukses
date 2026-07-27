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
        @foreach ($allCategories as $slug => $cat)
            <li data-category="{{ $slug }}" class="{{ $slug === $categorySlug ? 'is-active' : '' }}">
                <a href="{{ url('/home/product_landing/'.$cat['id'].'/slug/'.$slug) }}">{{ $cat['title'] }}</a>
                <ul>
                    {{--
                        Beberapa kategori (mis. Housewares) punya 2 range id dengan
                        slug sama persis (contoh: id 11 & 12 sama-sama "kitchen").
                        Di website resmi, duplikat ini tetap muncul sebagai kartu
                        di grid produk, tapi menu/sidebar-nya hanya menampilkan
                        satu. Jadi di sini kita dedupe berdasarkan slug supaya
                        sidebar tidak menampilkan item yang sama dua kali.
                    --}}
                    @php($shownSlugs = [])
                    @php($activeSlug = isset($activeRangeId) ? ($allRanges[$activeRangeId]['slug'] ?? null) : null)
                    @foreach ($cat['ranges'] as $rangeId)
                        @php($r = $allRanges[$rangeId])
                        @continue(in_array($r['slug'], $shownSlugs))
                        @php($shownSlugs[] = $r['slug'])
                        <li class="{{ $activeSlug === $r['slug'] ? 'is-active' : '' }}">
                            <a href="{{ url('/home/product_range/'.$rangeId.'/parent/'.$cat['id'].'/slug/'.$r['slug']) }}">{{ $r['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</aside>

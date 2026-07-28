{{--
    Breadcrumb khusus halaman Product.

    Variabel:
    - $breadcrumbCurrent  : string, wajib (label item terakhir/aktif)
    - $breadcrumbCategory : opsional, array ['title' => ..., 'url' => ...]
                            dipakai di halaman detail sub-produk supaya
                            breadcrumb-nya 4 level, sama seperti website
                            resmi (Home > Products > Kategori > Sub-produk).
--}}
<section class="product-page__breadcrumb-sec">
    <div class="product-page__container">
        <div class="product-page__breadcrumb-layout">
            <nav class="product-page__breadcrumb" aria-label="breadcrumb">
                <ol class="product-page__breadcrumb-list">
                    <li class="product-page__breadcrumb-item"><a href="{{ route('home') }}" class="product-page__breadcrumb-link">Home</a></li>
                    <li class="product-page__breadcrumb-item"><a href="{{ route('product') }}" class="product-page__breadcrumb-link">Products</a></li>
                    @isset($breadcrumbCategory)
                        <li class="product-page__breadcrumb-item"><a href="{{ $breadcrumbCategory['url'] }}" class="product-page__breadcrumb-link">{{ $breadcrumbCategory['title'] }}</a></li>
                    @endisset
                    <li class="product-page__breadcrumb-item product-page__breadcrumb-item--active"><span class="product-page__breadcrumb-link">{{ $breadcrumbCurrent }}</span></li>
                </ol>
            </nav>
            <div class="product-page__back">
                <a href="javascript:history.back()" class="product-page__back-link">Back</a>
            </div>
        </div>
    </div>
</section>

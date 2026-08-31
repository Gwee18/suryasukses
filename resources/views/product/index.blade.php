@extends('layouts.app')

@section('title', $category['title'].' - Surya Sukses Group')

@push('styles')
    @vite('resources/css/pages/product.css')
@endpush

@push('scripts')
    <script>
        // Menu navbar (di luar cakupan halaman Product) masih memakai link lama
        // berbentuk route('product')#slug, mis. /product#housewares. Karena hash
        // tidak dikirim ke server, /product selalu redirect ke kategori pertama
        // (Packaging). Script kecil ini membetulkan pendaratan di sisi client.
        document.addEventListener('DOMContentLoaded', () => {
            const categoryByHash = {
                packaging: '/home/product_landing/2/slug/packaging',
                'specialty-nonwoven': '/home/product_landing/3/slug/specialty-nonwoven',
                housewares: '/home/product_landing/4/slug/housewares',
                roofing: '/home/product_landing/5/slug/roofing',
            };
            const hash = window.location.hash.replace('#', '');
            const target = categoryByHash[hash];
            if (target && !window.location.pathname.startsWith(target)) {
                window.location.replace(target);
            }
        });
    </script>
@endpush

@section('content')
<div class="product-page">

    @include('product.partials.breadcrumb', ['breadcrumbCurrent' => $category->title])

    <div class="product-page__container">
        <div class="product-page__layout">

            @include('product.partials.sidebar')

            <div class="product-page__content">
                <section class="product-page__category">
                    <h3 class="product-page__category-title">{{ $category->title }}</h3>

                    <div class="product-page__category-media">
                        <div id="carouselCategory" class="carousel slide product-page__carousel" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @if(is_array($category->images) && count($category->images) > 0)
                                    @foreach ($category->images as $i => $img)
                                        <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                            <img src="{{ asset('assets/images/product/'.$img) }}" alt="{{ $category->title }}" class="product-page__category-image">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="carousel-indicators">
                                @if(is_array($category->images) && count($category->images) > 0)
                                    @foreach ($category->images as $i => $img)
                                        <button type="button" data-bs-target="#carouselCategory" data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}" @if($i === 0) aria-current="true" @endif></button>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    @if ($category->intro)
                        <p class="product-page__category-text">{{ $category->intro }}</p>
                    @endif

                    @if ($category->catalog_text)
                        <a href="{{ $category->catalog_href }}" target="_blank" class="product-page__catalog-link">{{ $category->catalog_text }}</a>
                    @endif

                    <div class="product-page__grid">
                        @foreach ($ranges as $range)
                            <div id="{{ $range->slug }}" class="product-page__card">
                                <a href="{{ url('/home/product_range/'.$range->id.'/parent/'.$category->id.'/slug/'.$range->slug) }}" class="product-page__card-image-wrapper">
                                    @if(is_array($range->images) && count($range->images) > 0)
                                        <img src="{{ asset('assets/images/product/'.$range->images[0]) }}" alt="{{ $range->title }}" class="product-page__card-image">
                                    @endif
                                </a>
                                <p class="product-page__card-title">{{ $range->title }}</p>
                                <p class="product-page__card-text">{{ $range->card_text }}</p>
                                <a href="{{ url('/home/product_range/'.$range->id.'/parent/'.$category->id.'/slug/'.$range->slug) }}" class="product-page__card-link">Learn More</a>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection

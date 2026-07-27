@extends('layouts.app')

@section('title', $range['title'].' - Surya Sukses Group')

@push('styles')
    @vite('resources/css/pages/product.css')
@endpush

@section('content')
<div class="product-page">

    @include('product.partials.breadcrumb', [
        'breadcrumbCurrent' => $range['title'],
        'breadcrumbCategory' => [
            'title' => $category['title'],
            'url' => url('/home/product_landing/'.$category['id'].'/slug/'.$categorySlug),
        ],
    ])

    <div class="product-page__container">
        <div class="product-page__layout">

            @include('product.partials.sidebar', ['activeRangeId' => $range['id']])

            <div class="product-page__content">
                <section class="product-page__category">
                    <p class="product-page__detail-eyebrow">{{ $category['title'] }}</p>
                    <h3 class="product-page__category-title">{{ $range['title'] }}</h3>

                    <div class="product-page__category-media">
                        {{--
                            Website resmi selalu memakai carousel Bootstrap (lengkap
                            dengan indicator dot), termasuk saat sub-produk cuma
                            punya 1 foto. Jadi di sini kita tidak lagi fallback ke
                            <img> polos supaya titik indicator tetap konsisten.
                        --}}
                        <div id="carouselRange" class="carousel slide product-page__carousel" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($range['images'] as $i => $img)
                                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                        <img src="{{ asset('assets/images/product/'.$img) }}" alt="{{ $range['title'] }}" class="product-page__category-image">
                                    </div>
                                @endforeach
                            </div>
                            <div class="carousel-indicators">
                                @foreach ($range['images'] as $i => $img)
                                    <button type="button" data-bs-target="#carouselRange" data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}" @if($i === 0) aria-current="true" @endif></button>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    @foreach ($range['paragraphs'] as $para)
                        @if (isset($para['text']))
                            <p class="product-page__category-text">{{ $para['text'] }}</p>
                        @elseif ($para['link_text'] === 'www.botolplastik.id')
                            {{--
                                Di website resmi, link botolplastik.id selalu
                                didahului kalimat pengantar ini (beda dengan link
                                "Learn More" / "Visit our website" yang berdiri
                                sendiri tanpa kalimat pengantar).
                            --}}
                            <p class="product-page__category-text">To view more detailed product information, please visit:<br><a href="{{ $para['link_href'] }}" target="_blank" class="product-page__catalog-link">{{ $para['link_text'] }}</a></p>
                        @else
                            <p class="product-page__category-text"><a href="{{ $para['link_href'] }}" target="_blank" class="product-page__catalog-link">{{ $para['link_text'] }}</a></p>
                        @endif
                    @endforeach
                </section>
            </div>
        </div>
    </div>
</div>
@endsection

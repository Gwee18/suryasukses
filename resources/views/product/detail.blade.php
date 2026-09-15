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
                    <p class="product-page__detail-eyebrow">{{ $category->title }}</p>
                    <h3 class="product-page__category-title">{{ $range->title }}</h3>

                    <div class="product-page__category-media">
                        <div id="carouselRange" class="carousel slide product-page__carousel" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @if(is_array($range->images) && count($range->images) > 0)
                                    @foreach ($range->images as $i => $img)
                                        <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                            <img src="{{ asset('assets/images/product/'.$img) }}" alt="{{ $range->title }}" class="product-page__category-image">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="carousel-indicators">
                                @if(is_array($range->images) && count($range->images) > 0)
                                    @foreach ($range->images as $i => $img)
                                        <button type="button" data-bs-target="#carouselRange" data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}" @if($i === 0) aria-current="true" @endif></button>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="product-page__category-text">
                        {!! $range->content !!}
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    @vite('resources/css/pages/home.css')
@endpush

@section('content')

    <section class="home-hero">
        @php
            $heroBg = $page->content['hero_bg'] ?? null;
            $isBgVideo = !$heroBg || Str::endsWith(strtolower($heroBg), ['.mp4', '.webm']);
        @endphp
        
        @if($isBgVideo)
            <video class="home-hero-media" autoplay muted loop playsinline>
                <source src="{{ $heroBg ? asset('assets/images/' . $heroBg) : asset('assets/videos/videoplayback.webm') }}" type="{{ $heroBg && Str::endsWith(strtolower($heroBg), '.mp4') ? 'video/mp4' : 'video/webm' }}">
            </video>
        @else
            <img class="home-hero-media" src="{{ asset('assets/images/' . $heroBg) }}" alt="Hero Background" style="object-fit: cover; width: 100%; height: 100%;">
        @endif

        <div class="home-hero-overlay"></div>

        <div class="home-hero-caption">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-10">
                        <h1 class="home-hero-title"><strong>{{ $home->hero_title ?? 'Suryasukses Group,' }}</strong></h1>
                        <p class="home-hero-subtitle">
                            {{ $home->hero_text }}
                        </p>
                        <a href="{{ route('about') }}" class="home-hero-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $activeCategory = $sliders->first();
    @endphp

    <section class="home-products">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 home-products-inner">

                    <div class="row justify-content-between home-products-tabs g-0 gy-3">
                        @foreach ($sliders as $index => $category)
                            <div class="col-auto">
                                <button
                                    type="button"
                                    class="home-products-tab {{ $index === 0 ? 'is-active' : '' }}"
                                    data-title="{{ $category->title }}"
                                    data-desc="{{ $category->description }}"
                                    data-link="{{ $category->link }}"
                                    data-images="{{ $category->images->map(fn ($img) => asset('assets/images/' . $img->image))->implode('|') }}"
                                >
                                    <img src="{{ asset('assets/images/' . $category->icon) }}" alt="{{ $category->title }}" class="home-products-tab-icon">
                                </button>
                            </div>
                        @endforeach
                    </div>

                    <div class="row align-items-stretch g-0 home-products-panel">
                        <div class="col-lg-7 home-products-info">
                            <h3 class="home-products-title">{{ $activeCategory->title ?? '' }}</h3>
                            <p class="home-products-desc">{{ $activeCategory->description ?? '' }}</p>
                            <a href="{{ $activeCategory->link ?? '#' }}" class="home-products-link">Learn more</a>
                        </div>
                        <div class="col-lg-5 home-products-media">
                            <div class="home-products-slider" id="homeProductsSlider">
                                <div class="home-products-track">
                                    @if($activeCategory && $activeCategory->images)
                                        @foreach ($activeCategory->images as $img)
                                            <div class="home-products-slide">
                                                <img src="{{ asset('assets/images/' . $img->image) }}" alt="{{ $activeCategory->title }}">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="home-info-cards">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row g-4">
                @foreach($cards as $card)
                <div class="col-lg-3 col-md-6">
                    <div class="home-card">
                        <div class="home-card-img">
                            <img src="{{ asset('assets/images/' . $card->image) }}" alt="{{ $card->title }}">
                        </div>
                        <div class="home-card-body">
                            <h4 class="home-card-title">{{ $card->title }}</h4>
                            <p class="home-card-desc">{{ $card->description }}</p>
                            <a href="{{ $card->link }}" class="home-card-footer">
                                <span class="read-more">READ MORE</span>
                                <svg viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="home-news">
        <div class="container">
            <h2 class="home-news-title text-center">News and Articles</h2>
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row g-4">
                @forelse($latestNews as $news)
                <div class="col-lg-3 col-md-6">
                    <div class="home-news-card">
                        <a href="{{ route('news.detail', $news->slug) }}" class="home-news-img">
                            @if($news->cover_image)
                                <img src="{{ asset('assets/images/news/' . $news->cover_image) }}" alt="{{ $news->title }}">
                            @else
                                <div style="background:#eee; height:200px; display:flex; align-items:center; justify-content:center; color:#999;">No Image</div>
                            @endif
                        </a>
                        <div class="home-news-body">
                            <h4 class="home-news-heading">
                                <a href="{{ route('news.detail', $news->slug) }}">{{ \Illuminate\Support\Str::limit($news->title, 60) }}</a>
                            </h4>
                            <a href="{{ route('news.detail', $news->slug) }}" class="read-more">READ MORE</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center text-muted">Belum ada berita.</div>
                @endforelse

            </div>
        </div>
    </section>

    <section class="home-corp-video">
        <div class="home-corp-container">
            <div class="home-corp-video-inner">
                <video class="home-corp-media" muted playsinline>
                    <source src="{{ asset('assets/videos/videoplayback.webm') }}" type="video/webm">
                </video>
                <div class="home-corp-content">
                                    <h2 class="home-corp-title">SAP Corporate Profile Video</h2>
                                    <p class="home-corp-subtitle">Sharing our passion, realizing your ideas and visions.</p>
                                    <button class="home-corp-play" data-bs-toggle="modal" data-bs-target="#videoModal">
                                        <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                        <span>Play Video</span>
                                    </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close position-absolute top-0 end-0 m-0" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1060;"></button>
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe id="youtubeIframe" src="" data-src="https://www.youtube.com/embed/Aj2C4Xp-GMM?autoplay=1" title="YouTube video" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var videoModal = document.getElementById('videoModal');
        var iframe = document.getElementById('youtubeIframe');
        
        if (videoModal && iframe) {
            var videoSrc = iframe.getAttribute('data-src');
            
            videoModal.addEventListener('show.bs.modal', function () {
                iframe.src = videoSrc;
            });
            
            videoModal.addEventListener('hidden.bs.modal', function () {
                iframe.src = '';
            });
        }
    });
</script>
@endpush
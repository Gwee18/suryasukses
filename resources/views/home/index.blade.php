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
                    <div class="col-lg-7 col-md-9">
                        <h1 class="home-hero-title"><strong>{{ $page->title ?? 'Suryasukses Group,' }}</strong></h1>
                        <p class="home-hero-subtitle">
                            {{ $page->content['hero_text'] ?? 'A reputation in the premium plastic related products.' }}
                        </p>
                        <a href="{{ route('about') }}" class="home-hero-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $defaultProducts = [
            1 => [
                'icon' => 'home/bawah-slide1.png',
                'title' => 'Bottles and Caps',
                'description' => 'Recyclable bottles that deliver pristine quality to fulfill customers` needs.',
                'link' => route('product'),
                'images' => ['home/bottle001-new.png', 'home/bottle002.jpg'],
            ],
            2 => [
                'icon' => 'home/bawah-slide-5.png',
                'title' => 'Drinking Cups & Lids',
                'description' => 'Our disposable cups are light-weight and cost efficient. We also offer multiple decoration options.',
                'link' => route('product'),
                'images' => ['home/drinking-cups001-new.png', 'home/drinking-cups002.jpg'],
            ],
            3 => [
                'icon' => 'home/bawah-slide2.png',
                'title' => 'Specialty Nonwoven',
                'description' => 'A versatile product that can be printed or luminated. Its naturally porous, light-weight and eco-friendly characteristics make spunbond a multipurpose product.',
                'link' => route('product'),
                'images' => ['home/cover-specialty.jpg'],
            ],
            4 => [
                'icon' => 'home/bawah-slide3.png',
                'title' => 'Housewares',
                'description' => 'We provide customers with qualified household products, innovative design, and prompt delivery at a very competitive price. Each products are designed to comfort and ease your life.',
                'link' => route('product'),
                'images' => ['home/cover-garden.jpg', 'home/cover-cleaningware.jpg', 'home/cover-racks.jpg', 'home/cover-kitchenware.jpg', 'home/cover-sealware.jpg', 'home/cover-bathroom.jpg'],
            ],
            5 => [
                'icon' => 'home/bawah-slide4.png',
                'title' => 'Roofing System',
                'description' => 'Roofing sheets manufactured from UPVC, designed to suit a diverse range of applications in various markets.',
                'link' => route('product'),
                'images' => ['home/cover-roofing-suryasukses.jpg'],
            ],
        ];

        $productCategories = [];
        foreach([1, 2, 3, 4, 5] as $i) {
            $productCategories[] = [
                'icon' => $page->content['prod_icon_'.$i] ?? $defaultProducts[$i]['icon'],
                'title' => $page->content['prod_title_'.$i] ?? $defaultProducts[$i]['title'],
                'description' => $page->content['prod_desc_'.$i] ?? $defaultProducts[$i]['description'],
                'link' => $page->content['prod_link_'.$i] ?? $defaultProducts[$i]['link'],
                'images' => isset($page->content['prod_img_'.$i]) && is_array($page->content['prod_img_'.$i]) && count($page->content['prod_img_'.$i]) > 0 
                            ? $page->content['prod_img_'.$i] 
                            : $defaultProducts[$i]['images'],
            ];
        }
        $activeCategory = $productCategories[0];
    @endphp

    <section class="home-products">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 home-products-inner">

                    <div class="row justify-content-between home-products-tabs g-0 gy-3">
                        @foreach ($productCategories as $index => $category)
                            <div class="col-auto">
                                <button
                                    type="button"
                                    class="home-products-tab {{ $index === 0 ? 'is-active' : '' }}"
                                    data-title="{{ $category['title'] }}"
                                    data-desc="{{ $category['description'] }}"
                                    data-link="{{ $category['link'] }}"
                                    data-images="{{ collect($category['images'])->map(fn ($img) => asset('assets/images/' . $img))->implode('|') }}"
                                >
                                    <img src="{{ asset('assets/images/' . $category['icon']) }}" alt="{{ $category['title'] }}" class="home-products-tab-icon">
                                </button>
                            </div>
                        @endforeach
                    </div>

                    <div class="row align-items-stretch g-0 home-products-panel">
                        <div class="col-lg-7 home-products-info">
                            <h3 class="home-products-title">{{ $activeCategory['title'] }}</h3>
                            <p class="home-products-desc">{{ $activeCategory['description'] }}</p>
                            <a href="{{ $activeCategory['link'] }}" class="home-products-link">Learn more</a>
                        </div>
                        <div class="col-lg-5 home-products-media">
                            <div class="home-products-slider" id="homeProductsSlider">
                                <div class="home-products-track">
                                    @foreach ($activeCategory['images'] as $img)
                                        <div class="home-products-slide">
                                            <img src="{{ asset('assets/images/' . $img) }}" alt="{{ $activeCategory['title'] }}">
                                        </div>
                                    @endforeach
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
                @php
                    $defaults = [
                        1 => ['title' => 'Get to Know SAP', 'desc' => 'Established in 1990, we are uniquely positioned to provide customers with the best, on-trend products.', 'img' => 'home/d1f20f2452homesec-1.jpg', 'link' => route('about')],
                        2 => ['title' => 'Our Markets', 'desc' => 'Combining three-decade experience and a fully dedicated team, we are ready to serve a wide range of industries.', 'img' => 'home/f49e0c021bhomesec-2.jpg', 'link' => route('markets.beverage')],
                        3 => ['title' => 'SAP Solutions', 'desc' => 'Transform your idea into realization with our design team. Discover value-added, customized solutions.', 'img' => 'home/9fadce803chomesec-3.jpg', 'link' => route('solutions')],
                        4 => ['title' => 'SAP Career', 'desc' => 'Join us. Grow together. Get in touch now to explore exciting opportunities.', 'img' => 'home/2008b6a72chomesec-4.jpg', 'link' => route('about.career')]
                    ];
                @endphp
                @foreach([1, 2, 3, 4] as $i)
                <div class="col-lg-3 col-md-6">
                    <div class="home-card">
                        <div class="home-card-img">
                            <img src="{{ asset('assets/images/' . ($page->content['info_img_'.$i] ?? $defaults[$i]['img'])) }}" alt="{{ $page->content['info_title_'.$i] ?? $defaults[$i]['title'] }}">
                        </div>
                        <div class="home-card-body">
                            <h4 class="home-card-title">{{ $page->content['info_title_'.$i] ?? $defaults[$i]['title'] }}</h4>
                            <p class="home-card-desc">{{ $page->content['info_desc_'.$i] ?? $defaults[$i]['desc'] }}</p>
                            <a href="{{ $page->content['info_link_'.$i] ?? $defaults[$i]['link'] }}" class="home-card-footer">
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
            <h2 class="home-news-title text-center">{{ $page->content['news_title'] ?? 'News and Articles' }}</h2>
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
                                    <h2 class="home-corp-title">{{ $page->content['video_title'] ?? 'SAP Corporate Profile Video' }}</h2>
                                    <p class="home-corp-subtitle">{{ $page->content['video_subtitle'] ?? 'Sharing our passion, realizing your ideas and visions.' }}</p>
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
                        <iframe id="youtubeIframe" src="" data-src="{{ $page->content['video_url'] ?? 'https://www.youtube.com/embed/Aj2C4Xp-GMM?autoplay=1' }}" title="YouTube video" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
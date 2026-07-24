@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    @vite('resources/css/pages/home.css')
@endpush

@section('content')

    <section class="home-hero">
        <video class="home-hero-media" autoplay muted loop playsinline>
            <source src="{{ asset('assets/videos/videoplayback.webm') }}" type="video/webm">
        </video>

        <div class="home-hero-overlay"></div>

        <div class="home-hero-caption">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-9">
                        <h1 class="home-hero-title"><strong>Suryasukses</strong> Group,</h1>
                        <p class="home-hero-subtitle">
                            A reputation in the premium plastic related products.
                        </p>
                        <a href="{{ route('about') }}" class="home-hero-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $productCategories = [
            [
                'icon' => 'bawah-slide1.png',
                'title' => 'Bottles and Caps',
                'description' => 'Recyclable bottles that deliver pristine quality to fulfill customers` needs.',
                'link' => route('product'),
                'images' => ['bottle001-new.png', 'bottle002.jpg'],
            ],
            [
                'icon' => 'bawah-slide-5.png',
                'title' => 'Drinking Cups & Lids',
                'description' => 'Our disposable cups are light-weight and cost efficient. We also offer multiple decoration options.',
                'link' => route('product'),
                'images' => ['drinking-cups001-new.png', 'drinking-cups002.jpg'],
            ],
            [
                'icon' => 'bawah-slide2.png',
                'title' => 'Specialty Nonwoven',
                'description' => 'A versatile product that can be printed or luminated. Its naturally porous, light-weight and eco-friendly characteristics make spunbond a multipurpose product.',
                'link' => route('product'),
                'images' => ['cover-specialty.jpg'],
            ],
            [
                'icon' => 'bawah-slide3.png',
                'title' => 'Housewares',
                'description' => 'We provide customers with qualified household products, innovative design, and prompt delivery at a very competitive price. Each products are designed to comfort and ease your life.',
                'link' => route('product'),
                'images' => ['cover-garden.jpg', 'cover-cleaningware.jpg', 'cover-racks.jpg', 'cover-kitchenware.jpg', 'cover-sealware.jpg', 'cover-bathroom.jpg'],
            ],
            [
                'icon' => 'bawah-slide4.png',
                'title' => 'Roofing System',
                'description' => 'Roofing sheets manufactured from UPVC, designed to suit a diverse range of applications in various markets.',
                'link' => route('product'),
                'images' => ['cover-roofing-suryasukses.jpg'],
            ],
        ];
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
                                    data-images="{{ collect($category['images'])->map(fn ($img) => asset('assets/images/home/' . $img))->implode('|') }}"
                                >
                                    <img src="{{ asset('assets/images/home/' . $category['icon']) }}" alt="{{ $category['title'] }}" class="home-products-tab-icon">
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
                                            <img src="{{ asset('assets/images/home/' . $img) }}" alt="{{ $activeCategory['title'] }}">
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
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="home-card">
                        <div class="home-card-img">
                            <img src="{{ asset('assets/images/home/d1f20f2452homesec-1.jpg') }}" alt="Get to Know SAP">
                        </div>
                        <div class="home-card-body">
                            <h4 class="home-card-title">Get to Know SAP</h4>
                            <p class="home-card-desc">Established in 1990, we are uniquely positioned to provide customers with the best, on-trend products.</p>
                            <div class="home-card-footer">
                                <span class="read-more">READ MORE</span>
                                <svg viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="home-card">
                        <div class="home-card-img">
                            <img src="{{ asset('assets/images/home/f49e0c021bhomesec-2.jpg') }}" alt="Our Markets">
                        </div>
                        <div class="home-card-body">
                            <h4 class="home-card-title">Our Markets</h4>
                            <p class="home-card-desc">Combining three-decade experience and a fully dedicated team, we are ready to serve a wide range of industries.</p>
                            <div class="home-card-footer">
                                <span class="read-more">READ MORE</span>
                                <svg viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="#" class="home-card">
                        <div class="home-card-img">
                            <img src="{{ asset('assets/images/home/9fadce803chomesec-3.jpg') }}" alt="SAP Solutions">
                        </div>
                        <div class="home-card-body">
                            <h4 class="home-card-title">SAP Solutions</h4>
                            <p class="home-card-desc">Transform your idea into realization with our design team. Discover value-added, customized solutions.</p>
                            <div class="home-card-footer">
                                <span class="read-more">READ MORE</span>
                                <svg viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="#" class="home-card">
                        <div class="home-card-img">
                            <img src="{{ asset('assets/images/home/2008b6a72chomesec-4.jpg') }}" alt="SAP Career">
                        </div>
                        <div class="home-card-body">
                            <h4 class="home-card-title">SAP Career</h4>
                            <p class="home-card-desc">Join us. Grow together. Get in touch now to explore exciting opportunities.</p>
                            <div class="home-card-footer">
                                <span class="read-more">READ MORE</span>
                                <svg viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-news">
        <div class="container">
            <h2 class="home-news-title text-center">News and Articles</h2>
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="home-news-card">
                        <div class="home-news-img">
                            <img src="{{ asset('assets/images/home/68f1c-cover kale.jpg') }}" alt="Mengenal Botol Kale">
                        </div>
                        <div class="home-news-body">
                            <h4 class="home-news-heading">
                                <a href="#">Mengenal Botol Kale, Kemasan Minuman Kekinian dengan Desain ...</a>
                            </h4>
                            <a href="#" class="read-more">READ MORE</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="home-news-card">
                        <div class="home-news-img">
                            <img src="{{ asset('assets/images/home/52e12-foto utama_o.png') }}" alt="Peralatan Kantor Multindo">
                        </div>
                        <div class="home-news-body">
                            <h4 class="home-news-heading">
                                <a href="#">Peralatan Kantor Fungsional dari Multindo yang Bikin Semanga...</a>
                            </h4>
                            <a href="#" class="read-more">READ MORE</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="home-news-card">
                        <div class="home-news-img">
                            <img src="{{ asset('assets/images/home/b65a3-foto utama_.jpg') }}" alt="Proses Produksi">
                        </div>
                        <div class="home-news-body">
                            <h4 class="home-news-heading">
                                <a href="#">Proses Produksi dan Penjaminan Mutu di Suryasukses...</a>
                            </h4>
                            <a href="#" class="read-more">READ MORE</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="home-news-card">
                        <div class="home-news-img">
                            <img src="{{ asset('assets/images/home/f559a-foto utama.png') }}" alt="Peluang Bisnis">
                        </div>
                        <div class="home-news-body">
                            <h4 class="home-news-heading">
                                <a href="#">Peluang Bisnis Kemasan Minuman yang Menjanjikan dari Suryasu...</a>
                            </h4>
                            <a href="#" class="read-more">READ MORE</a>
                        </div>
                    </div>
                </div>
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
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-4" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1060;"></button>
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
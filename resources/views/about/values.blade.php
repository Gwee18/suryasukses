@extends('layouts.app')

@section('title', 'About - Our Values')

@push('styles')
    @vite('resources/css/pages/about.css')
@endpush

@section('content')

    <section class="breadcrumb-det">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#" style="cursor: default;">About Us</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Our Values</a></li>
                            </ol>
                        </nav>
                        <div class="block-back-link">
                            <a href="javascript:void(0);" onclick="window.history.back();">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-location-sec-1 contents_abouts_sec1">
        <div class="prelative container">
            <div class="row">
                <div class="col-md-3">
                    <div class="box-konten-kiri">
                        <h5>About Us</h5>
                        <ol>
                            <li><a href="{{ route('about') }}">Who We Are</a></li>
                            <li class="active"><a href="{{ route('about.values') }}">Our Values</a></li>
                            <li><a href="{{ route('about.quality') }}">Quality Statement</a></li>
                            <li><a href="{{ route('about.career') }}">Career</a></li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="content-top cont_career">
                        @php $subHeading = $page->content['sub_heading'] ?? ''; @endphp
                        @if($subHeading !== '')
                            <h4>{{ $subHeading }}</h4>
                        @endif
                        <h3>{{ $page->title }}</h3>
                        <img src="{{ asset('assets/images/' . ($page->content['image_1'] ?? 'about/3b5fb3dfb6_OPS6411.jpg')) }}" alt="{{ $page->title }}" class="img img-fluid pb-5">
                        
                        <div class="lists_row_csn">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <div class="items pb-3">
                                        <h5>Partnerships</h5>
                                        <div class="py-2"></div>
                                        <p>We recognize the importance of strong, sustainable partnerships throughout all aspects of our business - we view our employees, customers, suppliers, and communities as our partners.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="items pb-3">
                                        <h5>Excellence</h5>
                                        <div class="py-2"></div>
                                        <p>We pursue excellence in all that we do by optimizing our processes, enhancing our sustainability initiatives, and by providing the highest quality products and services to our customers. We believe in continuous training and development for our employees so that we can deliver excellence to our customers.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="items pb-3">
                                        <h5>Growth</h5>
                                        <div class="py-2"></div>
                                        <p>Strategic growth is imperative for our business. Growth comes in many forms - financial growth, customer growth, employee growth and development, product growth and innovation, and the global growth of our Company.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="items pb-3">
                                        <h5>Safety</h5>
                                        <div class="py-2"></div>
                                        <p>Our number one value. We relentlessly pursue safety in all we do. We maintain high standards to ensure our facilities are safe and environmentally conscious.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $vidUrl = $page->content['video_url'] ?? 'https://www.youtube.com/embed/Aj2C4Xp-GMM';
        $vidTitle = $page->content['video_title'] ?? 'SAP Corporate Profile Video';
        $vidSubtitle = $page->content['video_subtitle'] ?? 'Sharing our passion, realizing your ideas and visions.';
    @endphp

    @if($vidUrl !== '')
    <section class="home-corp-video">
        <div class="home-corp-container">
            <div class="home-corp-video-inner">
                <video class="home-corp-media" muted loop playsinline>
                    <source src="{{ asset('assets/videos/videoplayback.webm') }}" type="video/webm">
                </video>
                <div class="home-corp-content">
                    <h2 class="home-corp-title">{{ $vidTitle }}</h2>
                    <p class="home-corp-subtitle">{{ $vidSubtitle }}</p>
                    <button class="home-corp-play" data-bs-toggle="modal" data-bs-target="#videoModal">
                        <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        <span>Play Video</span>
                    </button>
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
                        <iframe id="youtubeIframe" src="" data-src="{{ $vidUrl }}" title="YouTube video" allow="encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

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
@extends('layouts.app')

@section('title', 'About - Company History')

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
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Company History</a></li>
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

    <section class="sol_blue-sec-1">
        <div class="prelative container">
            <div class="row">
                <div class="col-md-3">
                    <div class="box-konten-kiri">
                        <h5>About Us</h5>
                        <ol>
                            <li class="active"><a href="{{ route('about') }}">Who We Are</a></li>
                            <li><a href="{{ route('about.values') }}">Our Values</a></li>
                            <li><a href="{{ route('about.quality') }}">Quality Statement</a></li>
                            <li><a href="{{ route('about.career') }}">Career</a></li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-9">
                    <h4>About Us</h4>
                    <h3>Who We Are</h3>
                    <img src="{{ asset('assets/images/about/bca40e3401new.jpg') }}" alt="Who We Are" class="img img-fluid pb-5">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <p>At Suryasukses, we take pride in our heritage and the company we've become today. Throughout our history, it has been the dedication of our team members that has allowed us to grow into a leading plastic manufacturing company.</p>
                            <p>Our history is rich in product innovation, customer focus, and strategic growth. With roots as a small, hometown company based in Surabaya, Indonesia, Suryasukses Group has come a long way since it was established in 1985 under the name Multindo Plastics. Starting with few injection machines, and now we have over 10,000 international and local customers</p>
                            <p>From houseware manufacturer we diversify our business to rigid plastic packaging, starting from thermoforming cups to printing, then preform, bottles, and closures, serving home industries to well established food and beverage companies. We further expand our market with nonwoven products to cater hygiene, agriculture, and industrial markets. Lastly, with deep knowledge of breakthrough materials and backed with professionals with decades of experience, Amari Upvc Roofing will surely satisfies the market with strong, consistent, unique and competitive products.</p>
                            <p>We take great pride in the company we have developed and the products and services we offer. Our ability to support our customers at every stage of the product development process-including expertise in consumer insights, ideation and design, manufacturing and research and development-is what has allowed us to become a leader in the industry</p>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <img class="img img-fluid w-100" src="{{ asset('assets/images/about/248abe37b4banners_whowe.jpg') }}" alt="Who We Are Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-corp-video">
        <div class="home-corp-container">
            <div class="home-corp-video-inner">
                <video class="home-corp-media" muted loop playsinline>
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
    </section>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-4" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1060;"></button>
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe id="youtubeIframe" src="" data-src="https://www.youtube.com/embed/Aj2C4Xp-GMM" title="YouTube video" allow="encrypted-media" allowfullscreen></iframe>
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
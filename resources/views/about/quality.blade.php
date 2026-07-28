@extends('layouts.app')

@section('title', 'About - Quality Statement')

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
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Quality Statement</a></li>
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

    <section class="about-location-sec-1">
        <div class="prelative container">
            <div class="row">
                <div class="col-md-3">
                    <div class="box-konten-kiri">
                        <h5>About Us</h5>
                        <ol>
                            <li><a href="{{ route('about') }}">Who We Are</a></li>
                            <li><a href="{{ route('about.values') }}">Our Values</a></li>
                            <li class="active"><a href="{{ route('about.quality') }}">Quality Statement</a></li>
                            <li><a href="{{ route('about.career') }}">Career</a></li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-9">
                    <h4>Our culture of perfections</h4>
                    <h3>Quality Statement</h3>
                    
                    <p>Quality products and on time delivery are the things that made us different. With hairline precision production and exceptional discipline in time management, Suryasukses Group has managed to be on top when it comes to quality.</p>
                    <p>The Suryasukses Group puts strong emphasis on quality. The best manufacturing practice in Suryasukses Group is centrally coordinated and implemented at each plant to ensure superior quality. The best manufacturing practice is continuously pushed up to lift the quality level further. All Suryasukses Group plants are ISO 9000 certified and following the intense and strict interntional safety standard regulation.<br></p>
                    
                    <div class="row g-0 py-4 align-items-center">
                        <div class="col-md-6">
                            <div class="content pe-5">
                                <div class="content-inner">
                                    <div class="isi">
                                        <p>The quality control team at Suryasukses group continually assessed for precision without tolerance. Our test lab are fully equipped with the highest technology available to ensure quality checking. This attention to detail is reflected in the end product that our customer receive.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('assets/images/about/b1b1e898fbLayer-43.jpg') }}" alt="">
                        </div>
                    </div>
            
                    <div class="row g-0 py-4 align-items-center">
                        <div class="col-md-6">
                            <img class="w-100" src="{{ asset('assets/images/about/ea8e93cbf2Layer-44.jpg') }}" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="content ps-5">
                                <div class="content-inner">
                                    <div class="title">
                                        <p>When Technology Meets Human Skill</p>
                                    </div>
                                    <div class="isi">
                                        <p>It is our quality standard that high-end production result still need to be final checked in batches, it is the harmony between high tech and skilled human resource with eye for detail. Blending the human capability with precision machinery will bring consistency to the whole process and finished products.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="hr-garis-about-quality"></div>
                    
                    <h5 class="quality-section-title mb-3">Our Quality Certfications</h5>
                    <img src="{{ asset('assets/images/about/f8f77a1e23Layer-42.png') }}" alt="Our Quality Certifications" class="img-fluid" style="max-height: 80px;">

                </div>
            </div>
        </div>
    </section>

    <section class="home-corp-video mt-5">
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
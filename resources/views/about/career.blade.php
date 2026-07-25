@extends('layouts.app')

@section('title', 'About - Career')

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
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Career</a></li>
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
                <div class="col-md-15">
                    <div class="box-konten-kiri">
                        <h5>About Us</h5>
                        <ol>
                            <li><a href="{{ route('about') }}">Who We Are</a></li>
                            <li><a href="{{ route('about.values') }}">Our Values</a></li>
                            <li><a href="{{ route('about.quality') }}">Quality Statement</a></li>
                            <li class="active"><a href="{{ route('about.career') }}">Career</a></li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-45">
                    <div class="content-top cont_career">
                        <h3>Come Grow With Us</h3>
                        <img src="{{ asset('assets/images/about/3b5fb3dfb6_OPS6411.jpg') }}" alt="" class="img img-fluid pb-4 mb-2">
                        
                        <p>We attribute our success on hiring and maintaining a positive and productive workforce.</p>
                        <p>SuryaSukses Group has established a reputation in the industry for being trustworthy and reliable, Our corporate culture is dynamic, creative, and innovative. Learn more about our career and opportunities.</p>
                        
                        <a class="btn join-team-btn pl-3 pr-3" target="_blank" href="https://id.jobstreet.com/companies/suryasukses-group-168535852924657">Join Our Team</a>
                        
                        <div class="clear clearfix"></div>
                    </div>
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

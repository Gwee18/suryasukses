@extends('layouts.app')

@section('title', 'News & Articles | Surya Sukses')

@push('styles')
    @vite('resources/css/pages/news.css')
@endpush

@section('content')

<section class="breadcrumb-det">
    <div class="container prelative">
        <div class="row align-items-center">
            <div class="col-md-9 content-align-logo">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('news') }}">News & Articles</a></li>
                    </ol>
                </nav>
            </div>
            
            <div class="col-md-3">
                <div class="block-back-link text-md-end text-start">
                    <a href="javascript:history.back();">Back</a>
                </div>
            </div>
        </div>
        <div class="py-2"></div>
    </div>
</section>

<section class="product-sec-1 mb-5">
    <div class="container prelative">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 content-align-logo">
                <div class="box-konten-kiri">
                    <h5>News & Articles</h5>        
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 rights_cont_def">
                <div class="clear clearfix"></div>

                <div class="row default-data">
                    <!-- News Item 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail3') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/6eb35-fungsi spunbond untuk pertanian (1).jpg') }}" alt="Aplikasi AMARI Spunbond Di Bidang Agrikultur">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail3') }}"><p>Aplikasi AMARI Spunbond Di Bidang Agrikultur</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail3') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-4"></div>

                <!-- Pagination -->
                <div class="textaboveheader-landing page">
                    <ul class="pagination mb-0">
                        <li class="page-item"><a class="page-link" href="{{ route('news') }}">1</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('news.page2') }}">2</a></li>
                        <li class="page-item active"><a class="page-link" href="{{ route('news.page3') }}">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

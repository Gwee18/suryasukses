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
                                <a href="{{ route('news.detail15') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/196df-masker.jpg') }}" alt="Amari Spunbond">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail15') }}"><p>Amari Spunbond, Bahan Baku Pembuat Masker Medis Untuk Menangkal Virus Corona</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail15') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail14') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/764c5-Untitled design (6).png') }}" alt="Tren Kuliner">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail14') }}"><p>Tren Kuliner 2020 Cocok Untuk Bisnis</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail14') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail13') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/22319-1.png') }}" alt="Arti Simbol Plastik">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail13') }}"><p>Cari Tau Arti Simbol Pada Kemasan Plastik</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail13') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 4 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail12') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/bdb30-foto utama (oxo) (1).png') }}" alt="Lestarikan Alam">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail12') }}"><p>Lestarikan Alam Dengan Kemasan Minuman Ramah Lingkungan Dan Aman Dari Suryasukses</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail12') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 5 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail10') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/8ccea-Copy of katalog 2.png') }}" alt="Tips Membuat Logo">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail10') }}"><p>Tips Membuat Logo Untuk Usaha Minuman</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail10') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 6 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail9') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/9ee2b-reseller web hires.png') }}" alt="Panduan Menjadi Reseller">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail9') }}"><p>Panduan Menjadi Reseller</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail9') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 7 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail7') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/2bed1-Handuk Spunbond.jpg') }}" alt="Micro Fiber">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail7') }}"><p>Micro Fiber Amari Spunbond</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail7') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 8 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail6') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/c2ae8-Amari Spunbond Untuk Home Furnishing.jpg') }}" alt="Home Furnishing">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail6') }}"><p>Aplikasi Amari Spunbond Untuk Home Furnishing</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail6') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 9 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail5') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/4b4ed-spundbond masker.jpg') }}" alt="Sektor Medis">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail5') }}"><p>Penggunaan AMARI Spunbond Di Sektor Medis</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail5') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 10 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail4') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/c1851-Amari Spunbond 1.jpeg') }}" alt="Aplikasi Industri">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail4') }}"><p>Aplikasi AMARI Spunbond Untuk Industri</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail4') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 11 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail1') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/f950c-Pabrik Houseware  (4).jpg') }}" alt="Pabrik Houseware">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail1') }}"><p>Pabrik Houseware Surabaya</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail1') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 12 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail2') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/215b7-fungsi spunbond untuk pertanian (4).jpg') }}" alt="Spunbond Pertanian">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail2') }}"><p>Keuntungan Menggunakan Spunbond Nonwoven Untuk Pertanian</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail2') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-4"></div>

                <!-- Pagination -->
                <div class="textaboveheader-landing page">
                    <ul class="pagination mb-0">
                        <li class="page-item"><a class="page-link" href="{{ route('news') }}">1</a></li>
                        <li class="page-item active"><a class="page-link" href="{{ route('news.page2') }}">2</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('news.page3') }}">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

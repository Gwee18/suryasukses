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
                                <a href="{{ route('news.detail') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/68f1c-cover kale.jpg') }}" alt="Mengenal Botol Kale">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail') }}"><p>Mengenal Botol Kale, Kemasan Minuman Kekinian Dengan Desain Simple Dan Menarik</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail32') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/52e12-foto utama_o.png') }}" alt="Peralatan Kantor Fungsional">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail32') }}"><p>Peralatan Kantor Fungsional Dari Multindo Yang Bikin Semangat Kerja</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail32') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail31') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/b65a3-foto utama_.jpg') }}" alt="Proses Produksi Dan Penjaminan Mutu">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail31') }}"><p>Proses Produksi Dan Penjaminan Mutu Di Suryasukses</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail31') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 4 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail29') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/f559a-foto utama.png') }}" alt="Peluang Bisnis Kemasan Minuman">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail29') }}"><p>Peluang Bisnis Kemasan Minuman Yang Menjanjikan Dari Suryasukses</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail29') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 5 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail28') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/bdb30-foto utama (oxo) (1).png') }}" alt="Lestarikan Alam Dengan Kemasan">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail28') }}"><p>Lestarikan Alam Dengan Kemasan Minuman Ramah Lingkungan Dan Aman Dari Suryasukses</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail28') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 6 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail23') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/ff1d8-foto utama_masker.jpg') }}" alt="Kenali Bahan Pembuat Masker">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail23') }}"><p>Kenali Bahan Pembuat Masker Medis</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail23') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 7 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail22') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/0cca0-Foto utama.png') }}" alt="Kantong Plastik Dilarang">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail22') }}"><p>Kantong Plastik Dilarang, Amari Spunbond Tawarkan Bahan Tas Ramah Lingkungan</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail22') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 8 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail21') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/a2c93-Foto utama.jpg') }}" alt="Tren Kemasan 2020">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail21') }}"><p>Tren Kemasan 2020 Untuk Bisnis Makanan Dan Minuman</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail21') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 9 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail20') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/3a800-Foto utama-Amari roof2.jpg') }}" alt="Solusi Atap Berkualitas">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail20') }}"><p>Solusi Atap Berkualitas Dan Efisien Dari Amari UPVC Roof</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail20') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 10 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail19') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/ebd06-foto_utama.png') }}" alt="Metode Perlindungan Tanaman">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail19') }}"><p>Metode Perlindungan Tanaman Dengan Amari Spunbond Untuk Mempercepat Panen</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail19') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 11 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail18') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/f5424-Presentation UPVC ROOF.jpg') }}" alt="Berkenalan Dengan Amari UPVC Roof">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail18') }}"><p>Berkenalan Dengan Amari UPVC Roof, Atap Pengganti Galvalum</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail18') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 12 -->
                    <div class="col-md-4 mb-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail16') }}">
                                    <img class="img-fluid w-100" src="{{ asset('assets/images/news/0f914-Untitled design (2).jpg') }}" alt="Kemasan Unik Untuk Bisnis Boba">
                                </a>
                            </div>
                            <div class="title">
                                <a href="{{ route('news.detail16') }}"><p>Kemasan Unik Untuk Bisnis Boba Dan Kopi Dari Suryasukses</p></a>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail16') }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-4"></div>

                <!-- Pagination -->
                <div class="textaboveheader-landing page">
                    <ul class="pagination mb-0">
                        <li class="page-item active"><a class="page-link" href="{{ route('news') }}">1</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('news.page2') }}">2</a></li>
                        <li class="page-item"><a class="page-link" href="{{ route('news.page3') }}">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
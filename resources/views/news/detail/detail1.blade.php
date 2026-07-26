@extends('layouts.app')

@section('title', 'News & Articles | Surya Sukses')

@push('styles')
    @vite('resources/css/pages/news.css')
@endpush

@section('content')

<section class="breadcrumb-det">
    <div class="container prelative">
        <div class="row">
            <div class="col-md-6 col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('news') }}">News & Articles</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-6 text-end">
                <div class="block-back-link">
                    <a href="{{ route('news') }}"><i class="fas fa-chevron-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-sec-1">
    <div class="container prelative">
        <div class="row">
            <div class="col-md-3">
                <div class="box-konten-kiri">
                    <h5>News & Articles</h5>
                </div>
            </div>
            <div class="col-md-9 rights_cont_def">
                <h3 class="detail-title">Pabrik Houseware Surabaya</h3>
                <div class="clearfix"></div>
                <span class="dates"><small><i class="far fa-calendar-alt"></i> 01 March 2018</small></span>
                <div class="clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/f950c-Pabrik Houseware  (4).jpg') }}" alt="Pabrik Houseware Surabaya">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;"><strong>Pabrik Houseware Surabaya</strong> merupakan salah satu divisi usaha <a href="http://suryasukses.com/" target="_blank">Surya Sukses Gorup</a> di bidang industri peralatan rumah tangga plastik di bawah naungan PT.Multiplastindo Makmur.</p>
                            <p style="text-align: justify;"><a href="http://multindo.com/" target="_blank">PT.Multiplastindo Makmur</a> berdiri sejak tahun 1989 dan merupakan salah satu perusahaan terkemuka di indonesia yang memproduksi lebih dari 500 jenis produk peralatan rumah tangga plastik dengan merek MULTINDO dengan berbagai macam kategori sebagai berikut : storage, water container, cart and trolley, bathroom, cleaning wares, furnishing, kitchen wares, multipurpose box, food storage.</p>
                            <p style="text-align: justify;">kami menawarkan pelanggan kami produk dengan kualitas terbaik, warna menarik dan desain eksklusif.</p>
                            <p style="text-align: justify;">Sejak saat itu, kami mulai tumbuh berdasarkan pengalaman kami di industri peralatan rumah tangga dengan visi untuk menjadi yang terbaik dengan memenuhi setiap kebutuhan pelanggan kami dengan produk – produk kami.</p>
                            <p style="text-align: justify;">Kehandalan kami dalam bisnis peralatan rumah tangga plastik telah terbukti sangat memuaskan, baik di pasar lokal maupun internasional. kami mengekspor produk kami ke seluruh dunia dan melayani 1.600 pelanggan setia di pasar lokal dan internasional.</p>
                            <p style="text-align: justify;">Misi perusahaan kami adalah untuk menyediakan pelanggan dengan produk berkualitas, Desain inovatif, staf produksi yang berpengalaman, kontrol kualitas yang ketat dan pengiriman yang cepat dengan harga yang sangat kompetitif.</p>
                            <p style="text-align: justify;">Setiap produk dirancang untuk kenyamanan dan kemudahan hidup Anda. Untuk alasan ini, standard kualitas kami didasarkan pada penggunaan bahan dan cetakan berkualitas tinggi. semua produk menonjol berdasarkan kualitas yang bagus dan inovatif. desain yang stylish dan fungsional, tidak biasa dalam bentuk dan warna. Dengan demikian secara konsisten, kami terus mengembangkan produk kami, memenuhi kebutuhan konsumen dengan produk baru. Inilah bagaimana kami bisa memberikan produk berkualitas permium</p>
                            <p style="text-align: justify;">Ayo segera lengkapi peralatan rumah tanggamu sekarang juga bersama MULTINDO.</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail4') }}"><i class="fas fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail2') }}">Next <i class="fas fa-chevron-right"></i></a></p>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

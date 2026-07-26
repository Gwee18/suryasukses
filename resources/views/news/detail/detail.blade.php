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
                <h3 class="detail-title">Mengenal Botol Kale, Kemasan Minuman Kekinian dengan Desain Simple dan Menarik</h3>
                <div class="clear clearfix"></div>
                <span class="dates"><small><i class="fas fa-calendar-alt"></i> 03 May 2021</small></span>
                <div class="clear clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/68f1c-cover kale.jpg') }}" alt="Mengenal Botol Kale">
                        </div>
                        <div class="contents_det_blog">
                            <p>Bisnis minuman saat ini adalah salah satu bisnis yang sangat menjanjikan. Tak hanya sebagai kebutuhan primer, minuman sekarang sudah menjadi gaya hidup. Banyak sekali jenis minuman yang dijual di pasaran, mulai dari minuman kemasan, minuman siap minum, hingga minuman instan. Dengan berkembangnya bisnis minuman, kebutuhan pemilik usaha juga meningkat khususnya kebutuhan akan kemasan minuman. Sebelumnya, mungkin kemasan minuman hanya berfungsi sebagai wadah, namun saat ini dengan berkembangnya tren, kemasan minuman menjadi salah satu daya tarik dan identitas bisnis. Lalu kemasan seperti apa yang cocok untuk produk minumanmu?</p>
                            <p>Salah satu botol yang sedang laris di pasaran adalah jenis botol Kale. Botol ini memiliki beberapa ukuran, di antaranya 250ml dan 1 liter. Botol Kale memiliki desain yang simple namun menarik dan terlihat elegan. Banyak sekali brand minuman yang sudah menggunakan botol Kale ini mulai dari usaha minuman micro hingga brand terkenal seperti Starbucks Coffee.</p>
                            <p class="mb-3">
                                <img src="{{ asset('assets/images/news/Data Botol (9).png') }}" class="img-fluid" style="width: 194px; height: auto; margin-right: 5px; margin-bottom: 15px;">
                                <img src="{{ asset('assets/images/news/Data Botol (21).png') }}" class="img-fluid" style="width: 193px; height: auto; margin-right: 5px; margin-bottom: 15px;">
                                <img src="{{ asset('assets/images/news/Data Botol (10).png') }}" class="img-fluid" style="width: 193px; height: auto; margin-right: 5px; margin-bottom: 15px;">
                                <img src="{{ asset('assets/images/news/Data Botol (11).png') }}" class="img-fluid" style="width: 193px; height: auto; margin-bottom: 15px;">
                                <img src="{{ asset('assets/images/news/Data Botol (20).png') }}" class="img-fluid" style="width: 192px; height: auto; margin-right: 5px; margin-bottom: 15px;">
                                <img src="{{ asset('assets/images/news/Data Botol (19).png') }}" class="img-fluid" style="width: 191px; height: auto; margin-right: 5px; margin-bottom: 15px;">
                            </p>
                            <p>Dengan mulut botol yang lebih lebar, yaitu diameter 3,8cm botol Kale sangat diminati karena lubang yang besar dapat memudahkan pengisian minuman ke dalam botol. Saat ini botol Kale digunakan untuk wadah berbagai macam minuman seperti kopi, susu, bubble tea, jus, dan lain-lain. Tak hanya minuman, botol Kale juga sering dipakai sebagai wadah produk lain seperti minyak goreng, coconut oil, bumbu rujak, dan lain-lain. Botol Kale juga memiliki karakteristik yang lebih tebal apabila dibandingkan dengan botol jenis lain. Jadi, pengguna tidak perlu khawatir botol akan mengempisatau berubah bentuk saat masuk kulkas dan terkena udara dingin.</p>
                            <p>Botol Kale sangat populer akhir-akhir ini, permintaannya meningkat tajam terlebih karena adanya pandemi dan pengusaha minuman mengganti konsep cafe mereka menjadi coffee to go atau menjual minuman yang untuk dibawa pulang. Kalau kamu sedang mencari botol Kale untuk usahamu, silahkan langsung kunjungi <a href="http://www.botolplastik.id">www.botolplastik.id</a> atau instagram @botolplastik.idn.</p>
                            <p>source:</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail3') }}"><i class="fas fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail32') }}">Next <i class="fas fa-chevron-right"></i></a></p>
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

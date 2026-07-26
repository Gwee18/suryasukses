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
                <h3 class="detail-title">Tren Kuliner 2020 Cocok Untuk Bisnis</h3>
                <div class="clearfix"></div>
                <span class="dates"><small><i class="far fa-calendar-alt"></i> 06 April 2020</small></span>
                <div class="clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/764c5-Untitled design (6).png') }}" alt="Tren Kuliner 2020 Cocok Untuk Bisnis">
                        </div>
                        <div class="contents_det_blog">
                            <p>
                                <img src="{{ asset('assets/images/news/feed SAP (23).png') }}" style="max-width: none;" alt="Tren Kuliner 2020 Cocok Untuk Bisnis">
                            </p>
                            <p>Inovasi di dunia kuliner memang tidak ada habisnya. Kalau tahun 2019 didominasi dengan boba drink, lalu tren kuliner seperti apa yang akan populer di tahun 2020? Buat kamu yang ingin mulai usaha di bisnis kuliner, yuk simak prediksi tren kuliner 2020 berikut ini.</p>
                            
                            <ol>
                                <li>
                                    Donat kentang<br>
                                    Setelah olahan donat kreatif sempat menjadi tren di tahun 2019, tahun ini donat kentang yang diprediksi akan booming.<br>
                                    Donat kentang memiliki tekstur yang renyah di luar dan lembut di dalam. Meskipun donat kentang bukan makanan yang baru, namun donat kentang akan muncul lagi menjadi favorit.
                                </li>
                                <li>
                                    Restoran All You Can Eat dengan harga murah<br>
                                    Restoran dengan konsep makan sepuasnya ini masih akan sangat diminati di tahun ini. Namun, yang akan menjamur di tahun ini adalah restoran all you can eat dengan harga yang relatif murah. Umumnya restoran seperti ini menyediakan berbagai macam jenis daging sapi, ayam hingga ikan yang disesuaikan dengan cita rasa makanan Jepang atau Korea.
                                </li>
                                <li>
                                    Minuman topping biskuit<br>
                                    Kalau di tahun 2019 boba drink menjadi raja kuliner, tahun ini tren akan bergeser ke minuman dengan topping biskuit. Beberapa kedai minuman terkenal sudah menyajikan minuman mereka dengan topping berbagai biskuit seperti biskuit Regal, Lotus, dan Oreo.
                                </li>
                                <li>
                                    Daging nabati<br>
                                    Seiring dengan meningkatnya kesadaran akan makanan sehat, daging nabati diperkirakan akan terus diminati di tahun 2020. Beberapa restoran fast food, khususnya yang ada di Amerika Serikat mulai menyajikan burger dengan daging nabati, yaitu daging yang terbuat dari tumbuhan namun rasanya menyerupai daging sapi.
                                </li>
                                <li>
                                    Japanese Souffle Pancakes<br>
                                    Jajanan khas Jepang ini masih akan populer di tahun 2020. Olahan pancake fluffly yang tebal dan tekstur yang sangat lembut ini biasa dipadukan dengan cream cheese dan boba di atasnya.
                                </li>
                            </ol>
                            
                            <p>Itulah jenis-jenis makanan yang diprediksi akan naik daun di tahun 2020. Kalau kamu ingin membuka usaha kuliner, mungkin salah satu dari jenis kuliner di atas dapat menjadi referensi. Namun, perlu diperhatikan juga beberapa aspek penting alinnya dalam membangun bisnis kuliner ya. Seperti konsep, kualitas makanan, kenyamanan suasana, target market, dan lain-lain.</p>
                            
                            <p>source:</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail15') }}"><i class="fas fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail13') }}">Next <i class="fas fa-chevron-right"></i></a></p>
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

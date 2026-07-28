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
                    <a href="{{ route('news') }}"><i class="fa fa-chevron-left"></i> Back</a>
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
                <h3 class="detail-title">Aplikasi Amari Spunbond Untuk Home Furnishing</h3>
                <div class="clearfix"></div>
                <span class="dates"><small><i class="fa fa-calendar"></i> 25 June 2018</small></span>
                <div class="clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/c2ae8-Amari Spunbond Untuk Home Furnishing.jpg') }}" alt="Aplikasi Amari Spunbond Untuk Home Furnishing">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">Di industri home furnishing, AMARI Spunbond berkembang dari penggunaan dalam aplikasi tradisional seperti pelapis, penutup lantai, lapisan bawah ranjang dan selimut hingga solusi inovatif dan cerdas untuk menambah sentuhan estetika dan melindungi interior. Bahan nonwoven dengan kualitas tinggi dapat menciptakan solusi nyaman, praktis, higienis untuk lifestyle modern.</p>
                            <p style="text-align: justify;">AMARI Nonwoven digunakan dalam banyak aplikasi rumah tangga mulai dari pembersihan dan filtrasi hingga menambahkan sentuhan estetika ke ruma. Dalam aplikasinya untuk wallpaper, bahan nonwoven lebih mudah ditangani daripada wallpaper tradisional karena kainnya tidak memiliki pemisahan jahitan dan mudah dilepas. Selain itu, sifat antik retak membuat bahan nonwoven sangat cocok untuk renovasi langit-langit bermasalah dan dinding, di mana diperlukan stabilitas.</p>
                            
                            <p><img src="{{ asset('assets/images/news/Handuk Spunbond.jpg') }}" alt="Handuk Spunbond" style="max-width: none;"></p>
                            
                            <p style="text-align: justify;">Perkembangan terakhir di industri perabot rumah tangga meliputi penciptaan bahan nonwoven yang membunuh tungau debu di tempat tidur, anti debu, dan mengandung kualitas anti bakteri</p>
                            
                            <h2>Application:</h2>
                            <ul>
                                <li>Seprei (kain saku untuk pegas saku, lapisan pemisah, penutup pegas, penutup atas, penutup selimut, penutup selimut dan sarung bantal)</li>
                                <li>Tirai / Gorden</li>
                                <li>Lapisan Karpet</li>
                                <li>Lapisan Lantai</li>
                                <li>Mebel / Pelapis (di dalam lapisan, kain terbalik untuk bantal, penutup debu)</li>
                                <li>Taplak meja</li>
                                <li>Kantong teh dan kopi</li>
                                <li>Tas pembersih vakum</li>
                                <li>Penutup dinding/ Wallpaper</li>
                                <li>Wipes/ Tissue basah (perawatan rumah tangga, perawatan lantai, pembersihan, perawatan hewan peliharaan dll)</li>
                            </ul>
                            
                            <h2>The advantages of using nonwovens</h2>
                            <ul>
                                <li>Kain kuat, daya tahan tinggi dan elastisitas</li>
                                <li>Kemudahan penggunaan</li>
                                <li>Mudah menambahkan essence aroma, anti-statis, dan pelembut</li>
                                <li>Mudah untuk memotong, die-cut, menjahit, lem, laminasi, trim, melihat, menjepit dan mengelas tanpa berjumbai</li>
                                <li>Stabilitas warna</li>
                                <li>Sifat anti alergi dan anti mikroba</li>
                            </ul>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail7') }}"><i class="fa fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail5') }}">Next <i class="fa fa-chevron-right"></i></a></p>
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

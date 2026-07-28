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
                <h3 class="detail-title">Aplikasi AMARI Spunbond Untuk Industri</h3>
                <div class="clearfix"></div>
                <span class="dates"><small><i class="fa fa-calendar"></i> 25 June 2018</small></span>
                <div class="clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/c1851-Amari Spunbond 1.jpeg') }}" alt="Aplikasi AMARI Spunbond Untuk Industri">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">AMARl Nonwoven banyak digunakan dalam berbagai aplikasi industri, termasuk aplikasi furnitur, aplikasi pengemasan, aplikasi rumah tangga, aplikasi automotif dan produk sekali pakai untuk maskapai penerbangan.</p>
                            
                            <h2>Application:</h2>
                            <ul>
                                <li>Furniture
                                    <ul>
                                        <li>Bantal dan penutup kursi</li>
                                        <li>Lapisan untuk sofa</li>
                                        <li>Lapisan penutup kasur</li>
                                        <li>Bantalan kasur pelindung dan sandaran selimut</li>
                                        <li>Lapisan lantai</li>
                                        <li>Lapisan karpet</li>
                                        <li>Wallpaper</li>
                                    </ul>
                                </li>
                                <li>Kemasan</li>
                                <li>Bahan nonwoven memberikan solusi anti-statik untuk perangkat komputer, solusi
                                    <ul>
                                        <li>Tas hadiah/ Promosi</li>
                                        <li>Kantong teh/kopi</li>
                                        <li>Kemasan produk</li>
                                        <li>Tas &amp; Pembungkus Sepatu</li>
                                        <li>Pembungkus Hampers</li>
                                        <li>Pembungkus Jas</li>
                                        <li>Buket bunga.</li>
                                    </ul>
                                </li>
                                <li>Tas belanja reusable</li>
                                <li>Produk rumah tangga
                                    <ul>
                                        <li>Sarung bantal dan bantal</li>
                                        <li>Kantong teh &amp; kopi</li>
                                        <li>Penjaga debu untuk perabotan indoor dan outdoor</li>
                                        <li>Tempat penyimpanan</li>
                                        <li>Lemari pakaian</li>
                                        <li>Gorden</li>
                                        <li>Taplak meja</li>
                                        <li>Tissue basah</li>
                                    </ul>
                                </li>
                                <li>Produk Automotif
                                    <ul>
                                        <li>Headliner</li>
                                        <li>Dashboard</li>
                                        <li>Carpet</li>
                                        <li>Airbag</li>
                                    </ul>
                                </li>
                                <li>Produk sekali pakai:
                                    <ul>
                                        <li>Lapisan Bantal</li>
                                        <li>Keperluan hotel (laundry bag, slippers, pembungkus amenities)</li>
                                        <li>Sandaran kepala pesawat &amp; kereta api</li>
                                    </ul>
                                </li>
                                <li>Lain-Lain:
                                    <ul>
                                        <li>Lapisan dalam Sepatu</li>
                                        <li>Label</li>
                                        <li>Lapisan Baju</li>
                                    </ul>
                                </li>
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
                                    <p><a href="{{ route('news.detail5') }}"><i class="fa fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail1') }}">Next <i class="fa fa-chevron-right"></i></a></p>
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

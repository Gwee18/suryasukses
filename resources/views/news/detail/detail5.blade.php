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
                <h3 class="detail-title">Penggunaan AMARI Spunbond Di Sektor Medis</h3>
                <div class="clearfix"></div>
                <span class="dates"><small><i class="fa fa-calendar"></i> 25 June 2018</small></span>
                <div class="clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/4b4ed-spundbond masker.jpg') }}" alt="Penggunaan AMARI Spunbond Di Sektor Medis">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">AMARI Spunbond Nonwoven (PP Spunbond &amp; Meltblown) memiliki peran vital di sektor medis. Kegunaanya antara lain adalah gaun bedah, masker, tirai, sarung bantal, pampers, dan seprai ranjang.</p>
                            <p style="text-align: justify;">Keunggulan AMARI Nonwoven di area medis adalah sifatnya yang sekali pakai untuk memastikan 100% steril, praktis dan tidak membutuhkan biaya pembersihan untuk pemakaian ulang. Kami menggunakan resin sanitized, anti UV, maupun hydrophilic untuk menyesuaikan dengan spesifikasi medis yang dibutuhkan</p>
                            <p style="text-align: justify;">Seiring dengan perkembangan teknologi medis terbaru, dokter dan rumah sakit sekarang menggunakan kain nonwoven sebagai Hygiene Standard, yang tidak hanya ekonomis dan ramah lingkungan tapi juga aman, sekali pakai dan praktis untuk digunakan.</p>
                            
                            <ul>
                                <li>PP Spunbond Technical Properties</li>
                                <li>PP MeltblownTechnical Properties</li>
                            </ul>
                            
                            <p><img src="{{ asset('assets/images/news/Masker Spunbond.jpg') }}" alt="Masker Spunbond" style="max-width: none;"></p>
                            
                            <h2>Application:</h2>
                            <ul>
                                <li>Seprei (kain saku untuk pegas saku, lapisan pemisah, penutup pegas, penutup atas, penutup selimut, penutup selimut dan sarung bantal)</li>
                                <li>Gaun isolasi</li>
                                <li>Gaun bedah</li>
                                <li>Celana Dalam sekali pakai</li>
                                <li>Pampers</li>
                                <li>Filtrasi</li>
                                <li>Topi bedah</li>
                                <li>Masker</li>
                                <li>Tirai dan penutup bedah</li>
                                <li>Seprei Ruang bedah &amp; Pasien</li>
                                <li>Kemasan medis</li>
                                <li>Wipes/ Tissue basah ( alcohol wipes, tissue anti bakteri untuk alat medis &amp; personl use)</li>
                            </ul>
                            
                            <h2>The advantages of using nonwovens</h2>
                            <ul>
                                <li>Kain kuat, ringan, daya tahan tinggi dan mudah dijahit</li>
                                <li>Pelindung terhadap bakteri dan infeksi</li>
                                <li>Penggunaan sekali pakai memastikan 100% steril</li>
                                <li>Dapat disterilisasi</li>
                                <li>Lembut pada kulit</li>
                                <li>Permeabilitas udara</li>
                            </ul>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail6') }}"><i class="fa fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail4') }}">Next <i class="fa fa-chevron-right"></i></a></p>
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

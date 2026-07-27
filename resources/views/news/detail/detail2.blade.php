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
                <h3 class="detail-title">Keuntungan Menggunakan Spunbond Nonwoven Untuk Pertanian</h3>
                <div class="clearfix"></div>
                <span class="dates"><small><i class="fa fa-calendar"></i> 30 January 2018</small></span>
                <div class="clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/215b7-fungsi spunbond untuk pertanian (4).jpg') }}" alt="Keuntungan Menggunakan Spunbond Nonwoven Untuk Pertanian">
                        </div>
                        <div class="contents_det_blog">
                            <ul>
                                <li>Kain kuat, daya tahan dan elastisitas yang tinggi;</li>
                                <li>Melindungi dari serangan hama,serangga dan Organisme pengganggu tanaman (OPT) lainnya;</li>
                                <li>Permebilitas yang tinggi;</li>
                                <li>Dapat mengontrol Gulma pada tanaman utama;</li>
                                <li>Apertures antara serat berpotongan dari lembaran bukan tenunan yang cukup besar untuk memungkinkan udara dan air mencapai tanaman tapi cukup kecil untuk mencegah serangga;</li>
                                <li>Mengurangi ketergantungan tanaman terhadap Pestisida dan Herbisida;</li>
                                <li>Mempercepat proses pertumbuhan dan panen tanaman dan hasil panen lebih maksimal dengan siklus pertumbuhan yang lebih cepat.</li>
                            </ul>
                            
                            <p><img src="{{ asset('assets/images/news/fungsi spunbond untuk pertanian (2).png') }}" alt="Fungsi Spunbond Untuk Pertanian" style="max-width: 100%; height: auto;"></p>
                            
                            <p style="text-align: justify;">Kegunaan lain dari Amari Spunbond Nonwoven untuk pertanian : Seed blankets, Weed control fabrics, Root control bags, Greenhouse shading, Biodegradable plant pots, Capillary matting, Landscape fabric.</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail1') }}"><i class="fa fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail3') }}">Next <i class="fa fa-chevron-right"></i></a></p>
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

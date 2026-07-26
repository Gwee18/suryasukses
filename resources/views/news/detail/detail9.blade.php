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
                <h3 class="detail-title">Panduan Menjadi Reseller</h3>
                <div class="clearfix"></div>
                <span class="dates"><small><i class="far fa-calendar-alt"></i> 21 November 2019</small></span>
                <div class="clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/9ee2b-reseller web hires.png') }}" alt="Panduan Menjadi Reseller">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">Selain mendukung para pemilik bisnis minuman dengan produk kemasan plastik, SAP juga membuka kesempatan bisnis untuk para reseller. Dengan menjadi reseller kami, kalian dapat menjual kembali produk kemasan plastik kepada konsumen ataupun pemilik usaha minuman skala kecil dan menengah.</p>
                            
                            <p>Caranya mudah sekali.</p>
                            
                            <ol>
                                <li>Buka link <a href="http://bit.do/SAP-New-Customer-Form." target="_blank">http://bit.do/SAP-New-Customer-Form.</a></li>
                                <li>Isi data diri dan questionaire.</li>
                                <li>Tunggu konfirmasi dan penawaran paket reseller dari kami.</li>
                                <li>Pilih paket dan lakukan persetujuan mengenai syarat dan ketentuan untuk menjadi reseller.</li>
                                <li>Jika langkah-langkah tersebut sudah dilakukan, maka kamu sudah resmi menjadi reseller SAP. Tunggu apalagi.</li>
                            </ol>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail10') }}"><i class="fas fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail7') }}">Next <i class="fas fa-chevron-right"></i></a></p>
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

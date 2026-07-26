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
                <h3 class="detail-title">Micro Fiber Amari Spunbond</h3>
                <div class="clearfix"></div>
                <span class="dates"><small><i class="far fa-calendar-alt"></i> 25 June 2018</small></span>
                <div class="clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/2bed1-Handuk Spunbond.jpg') }}" alt="Micro Fiber Amari Spunbond">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">Micro Fiber merupakan salah satu Aplikasi Amari spunbond. Salah satu segmen dengan pertumbuhan tercepat di industri Nonwoven, filtrasi memiliki beragam area penggunaan dan aplikasi. AMARI Nonwoven dapat direkayasa dengan sangat tepat untuk memenuhi spesifikasi yang tepat dan persyaratan peraturan yang ketat untuk penyaringan udara, cairan, bakteri, debu, gas dan segudang bidang lainnya.</p>
                            <p style="text-align: justify;">Bahan Nonwoven telah berevolusi dari hanya mengganti bentuk media lainnya, seperti kertas, kain, kaca dan karbon menjadi media pilihan untuk filtrasi.</p>
                            <p style="text-align: justify;">Media penyaringan nanofibre nonwoven sekarang mengisi celah kinerja mikro-filtrasi yang telah ada di masa lalu, menawarkan manfaat seperti peningkatan kualitas udara, pengurangan biaya energi, dan masa pakai yang lebih lama.</p>
                            
                            <h2>Application:</h2>
                            <ul>
                                <li>Filtrasi Otomotif
                                    <p>Mesin udara</p>
                                    <p>Minyak</p>
                                    <p>Bahan bakar</p>
                                    <p>Kabin udara</p>
                                </li>
                                <li>Filtrasi udara<br />
                                    HVAC - pemanas industri, ventilasi dan pendingin udara<br />
                                    Industri<br />
                                    Produk Konsumen (vacuum cleaner, cooker hoods, PC ...)<br />
                                    Kamar bersih
                                </li>
                                <li>Filtrasi cair<br />
                                    Makanan &amp; Minuman (susu, anggur, teh ..)<br />
                                    Farmasi / Medis<br />
                                    air<br />
                                    Darah<br />
                                    Hidrolik
                                </li>
                                <li>Filtrasi khusus<br />
                                    Antimikroba<br />
                                    Biofarmasi<br />
                                    Debu<br />
                                    Bau
                                </li>
                            </ul>
                            
                            <h2>The advantages of using nonwovens</h2>
                            <ul>
                                <li>Pencegahan berbagai kontaminan dari air (bakteri, virus, logam, mineral dll)</li>
                                <li>Struktur seragam</li>
                                <li>Anti robek</li>
                                <li>Kapasitas retensi tinggi</li>
                                <li>Permeabilitas udara tinggi</li>
                                <li>Flame retardancy</li>
                                <li>Penyerapan lemak dan minyak</li>
                                <li>Tingkat kapasitas aliran tinggi</li>
                            </ul>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail9') }}"><i class="fas fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail6') }}">Next <i class="fas fa-chevron-right"></i></a></p>
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

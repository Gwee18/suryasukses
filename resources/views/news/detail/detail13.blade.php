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
                <h3 class="detail-title">Cari Tau Arti Simbol Pada Kemasan Plastik</h3>
                <div class="clearfix"></div>
                <span class="dates"><small><i class="far fa-calendar-alt"></i> 06 February 2020</small></span>
                <div class="clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/22319-1.png') }}" alt="Cari Tau Arti Simbol Pada Kemasan Plastik">
                        </div>
                        <div class="contents_det_blog">
                            <p><strong>Saat menggunakan barang-barang yang berbahan plastik, pasti kalian pernah melihat simbol-simbol ini. Namun, apakah kalian tahu apa arti dari simbol-simbol tersebut? Yuk cari tahu, supaya kita bisa lebih paham dan bijak dalam mempergunakan plastik.</strong></p>
                            
                            <ul>
                                <li>PETE atau Polyethylene Terephthalate adalah kemasan plastik berwarna bening, permukaannya halus, tidak mudah rusak atau pecah. Biasanya dipakai untuk kemasan minuman. Bahan ini hanya sekali pakai, sangat tidak disarankan untuk menggunakannya berkali-kali.</li>
                                <li>HDPE atau High Density Polyethylene merupakan plastik yang memiliki ketahanan kimia yang baik,oleh karenanya HDPE biasa digunakan untuk membuat botol plastik sampo, conditioner, dan deterjen. Plastik jenis ini dapat digunakan berulang kali.</li>
                                <li>PVC atau Polyvinyl Chloride merupakan plastik yang mudah di bentuk, stabil, kuat, tahan terhadap sinar matahari dan cuaca serta memiliki ketahanan kimia yang baik. PVC dapat menimbulkan ancaman kesehatan yang sangat serius sehingga tidak cocok digunakan untuk kemasan makanan atau minuman.</li>
                                <li>LDPE atau Low Density Polyethylene merupakan plastik yang relatif tangguh, fleksibel dan berwarna transparan.</li>
                                <li>PP atau Polyproylene memiliki karakteristik yang tangguh, ringan dan memiliki ketahanan terhadap panas yang sangat baik. Bahan ini aman digunakan untuk wadahmakanan, minuman, obat-obatan, ataupun perkakas rumah tangga lainnya.</li>
                                <li>PS atau Polystyrene merupakan plastik yang sebaiknya di hindari karena dapat membahayakan kesehatan dan sulit di daur ulang. Polystyrene ini paling umum di gunakan untuk pembuatan Styrofoam.</li>
                                <li>Other, artinya kemasan plastik tersebut tidak terbuat dari enam bahan diatas. Ada 4 jenis plastik yang masuk dalam kategori ini, yaitu Styrene Acrylonitrile (SAN), Acrylonitrile Butadiene Styrene ( ABS ), Polycarbonate ( PC ) dan Nylon. Menurut kementrian kesehatan RI, SAN dan ABS boleh digunakan untuk kemasan makanan dan minuman, sedangkan PC dilarang penggunaannya.</li>
                            </ul>
                            
                            <p>
                                <img src="{{ asset('assets/images/news/2.png') }}" style="max-width: none;" alt="Arti Simbol Plastik">
                            </p>
                            
                            <p>source:</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail14') }}"><i class="fas fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail12') }}">Next <i class="fas fa-chevron-right"></i></a></p>
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

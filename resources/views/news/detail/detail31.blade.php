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
                <h3 class="detail-title">Proses Produksi dan Penjaminan Mutu di Suryasukses</h3>
                <div class="clear clearfix"></div>
                <span class="dates"><small><i class="fas fa-calendar-alt"></i> 06 November 2020</small></span>
                <div class="clear clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/b65a3-foto utama_.jpg') }}" alt="Proses Produksi dan Penjaminan Mutu di Suryasukses">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">Suryasukses Group merupakan salah satu manufaktur injeksi terkemuka di Indonesia. Awal bisnis Suryasukses Group dimulai pada tahun 1989 dengan menjadi produsen peralatan rumah tangga (PT Multiplast Indo Makmur) kemudian melakukan ekspansi bisnis di bidang tutup botol, botol PET, dan cup thermoforming (natural dan printing) dengan mendirikan PT Suryasukses Abadi Prima dan PT Suryasukses Adi Perkasa. Kemudian pada tahun 2010, ekspansi bisnis kembali dilakukan dengan berdirinya PT Suryasukses Mekar Makmur yang bergerak di bidang manufaktur kain non-woven spunbond dan meltblown. Dan tahun 2016 mendirikan PT Suryasukses Inti Makmur yang memproduksi atap UPVC dengan merk Amari.</p>
                            <p style="text-align: justify;">Dalam menjalankan seluruh proses bisnisnya, Suryasukses Group selalu memberi penekanan kuat pada kualitas dengan pelaksanaan manufaktur terbaik. Penggabungkan teknologi canggih dan tenaga ahli yang terampil akan menghasilkan produk yang berkualitas tinggi dan konsisten.</p>
                            <p style="text-align: justify;">Suryasukses Grup telah tersertifikasi FSSC 22000 dan ISO 9001, yaitu sertifikat yang menjamin standard keamanan pangan dan kualitas internasional. Untuk menjamin keamanan dan menjaga produknya tetap higienis, Suryasukses melengkapi fasilitas produksinya dengan ruangan produksi clean room dan close room, yaitu area yang digunakan untuk mengurangi cemaran / kontaminasi silang ke produk dari luar area clean room / close room. Tujuan dari clean room sendiri adalah menjaga kualitas produk agar tidak tercemar oleh bahan-bahan lain selama proses produksi, mengendalikan suhu, kelembaban, dan jumlah partikel udara dalam ruangan. Karena, adanya pencemaran dari bahan baku produk, mesin, udara ataupun mikroba bereksiko menurunkan kualitas produk menjadi tidak konsisten.</p>
                            
                            <p class="text-center my-4">
                                <img src="{{ asset('assets/images/news/Untitled-12 (1).jpg') }}" class="img-fluid" style="width: 660px; height: auto;" alt="Clean Room">
                            </p>
                            
                            <p style="text-align: justify;">Produk-produk yang dihasilkan Suryasukses Group merupakan produk food-grade yang aman untuk terkena kontak langsung dengan makanan atau minuman. Untuk memastikan keamanan produk, Suryasukses memiliki laboratorium khusus untuk melakukan uji mikrobiologi produk dan laboratorium fisika untuk pengukuran dimensi dan fungsional produk agar konsistensi kualitas produk tetap terjaga dan memastikan produk yang dihasilkan sesuai dan presisi.</p>
                            <p style="text-align: justify;">Suryasukses secara rutin melakukan uji kimiawi (migrasi) ke laboratorium eksternal yang sudah terakreditasi (KAN) untuk memastikan bahwa material produk yang bersentuhan langsung dengan makanan tidak menyebabkan kontaminasi bahan berbahaya ke makanan yang sedang diolah tersebut. Jadi, dapat dipastikan semua produk Suryasukses aman untuk wadah makanan dan minuman.</p>
                            <p style="text-align: justify;">Suryasukses Group juga selalu berusaha untuk memberikan pelayanan terbaik dan mendengarkan keinginan pelanggan. Dengan tim ahli di bidang desain dalam Suryasukses Studio, pelanggan dapat memesan produk botol dan cup dengan design sesuai permintaan. Untuk produk cup atau gelas plastik, Suryasukses melayani jasa printing sehingga pelanggan dapat memberikan desain sesuai identitas usaha ataupun dengan ilustrasi unik lainnya.</p>
                            <p style="text-align: justify;">Suryasukses memiliki tujuan untuk menjadi mitra yang pandai dalam mengikuti tren terbaru dan menjadi pelopor yang dapat memimpin pasar, sehingga kerjasama dengan pelanggan akan menghasilkan kepuasan pelanggan.</p>
                            <p>source:</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail32') }}"><i class="fas fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail29') }}">Next <i class="fas fa-chevron-right"></i></a></p>
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

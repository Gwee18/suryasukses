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
                <h3 class="detail-title">Berkenalan dengan Amari UPVC Roof, Atap Pengganti Galvalum</h3>
                <div class="clear clearfix"></div>
                <span class="dates"><small><i class="fas fa-calendar-alt"></i> 02 July 2020</small></span>
                <div class="clear clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/f5424-Presentation UPVC ROOF.jpg') }}" alt="Berkenalan dengan Amari UPVC Roof, Atap Pengganti Galvalum">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">Ada beberapa jenis atap yang sering dipakai untuk suatu bangunan, di antaranya adalah atap berbahan upvc, asbestos, galvalum, dan genteng dari tanah liat. Pada bangunan komersial, pabrik, gudang, dan bangunan sejenisnya, yang sering digunakan adalah atap galvalum. Namun, akhir-akhir ini, atap galvalum sudah mulai digantikan dengan atap upvc. Lalu, manakah yang memiliki kualitas yang lebih baik?</p>
                            <p style="text-align: justify;">Sebelum berlanjut membahas perbandingan atap upvc dan galvalum, yuk berkenalan dulu dengan PT Suryasukses Inti Makmur, salah satu produsen atap upvc terbaik dengan merek Amari roof. Dengan teknologi tinggi dan material yang berkualitas, Amari menawarkan produk yang efisien dan kompetitif sehingga dapat senantiasa memberi kepuasan terhadap pelanggan.</p>
                            <p style="text-align: justify;">Atap upvc Amari banyak digunakan di berbagai jenis bangunan seperti gudang, stasiun, pabrik, kampus, pasar, hingga untuk atap carport pada hunian pribadi. Atap galvalum pun juga sangat banyak digunakan karena alasan harga yang terjangkau. Namun, atap galvalum masih memerlukan beberapa produk pelengkap seperti insulasi panas agar berfungsi lebih baik, sehingga hal ini akan menambah biaya bahan dan tenaga kerja. Secara keseluruhan, inilah perbandingan atap upvc Amari dan atap galvalum:</p>
                            
                            <p style="text-align: justify;">Atap Amari dapat memantulkan panas hingga 71% sehingga dapat menjaga suhu ruangan tetap dingin, sedangkan atap galvalum bersifat menyerap panas sehingga dibutuhkan insulasi panas tambahan untuk menangkal panas.</p>
                            <p style="text-align: justify;">Atap Amari dengan material upvc serta struktur dinding ganda dan berongga dapat mengurangi kebisingan, terutama suara bising saat hujan turun. Atap galvalum memerlukan insulasi suara untuk meredam suara yang berasal dari luar.</p>
                            <p style="text-align: justify;">Atap Amari sangat tahan terhadap cuaca dan tidak berkarat meskipun dipasang di negara tropis yang memiliki kelembapan yang tinggi. Atap galvalum dapat berkarat seiring dengan perubahan kondisi cuaca.</p>
                            <p style="text-align: justify;">Atap Amari sangat kokoh dan dapat menopang beban yang berat, sehingga proses instalasi lebih efektif dan aman. Beberapa jenis atap galvalum tidak dapat menahan beban berat dan tidak aman untuk diinjak karena dapat menimbulkan kerusakan seperti retak atau pecah.</p>
                            <p style="text-align: justify;">Atap Amari hadir dengan pilihan semitransparan yang dapat ditembus sinar matahari untuk pencahayaan alami sehingga dapat menghemat penggunaan listrik, namun dapat tetap menjaga suhu ruangan tetap dingin di dalam.</p>
                            <p style="text-align: justify;">Atap galvalum memiliki harga yang relatif lebih murah, namun atap Amari menjamin durabilitas dengan memberikan garansi 15 tahun. Apabila atap rusak karena usia dan sebelum 15 tahun maka perusahaan akan menggantinya.</p>
                            <p style="text-align: justify;">Atap galvalum lebih tahan terhadap api, sedangkan atap Amari memiliki titik leleh. Meski demikian, atap Amari bersifat tahan api jenis B1.</p>
                            
                            <p style="text-align: justify;">Itulah beberapa perbandingan atap upvc Amari dan atap galvalum. Masing-masing atap memiliki kekurangan dan kelebihannya masing-masing, sehingga anda dapat menyesuaikan kebutuhan. Apabila anda tertarik ingin memakai atap upvc Amari untuk bangunan anda, kunjungi website <a href="http://www.amariupvc.com/">www.amariupvc.com</a></p>
                            
                            <p>source:</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail19') }}"><i class="fas fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail16') }}">Next <i class="fas fa-chevron-right"></i></a></p>
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

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
                <h3 class="detail-title">Lestarikan Alam dengan Kemasan Minuman Ramah Lingkungan dan Aman dari Suryasukses</h3>
                <div class="clear clearfix"></div>
                <span class="dates"><small><i class="fas fa-calendar-alt"></i> 06 November 2020</small></span>
                <div class="clear clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/bdb30-foto utama (oxo) (1).png') }}" alt="Lestarikan Alam dengan Kemasan Minuman Ramah Lingkungan">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">Seiring dengan maraknya bisnis minuman di Indonesia, semakin meningkat pula penggunaan kemasan plastik. Tak hanya dari bisnis minuman, penggunaan plastikpun sangat beragam mulai dari kemasan makanan hingga produk kebutuhan sehari-hari lainnya. Data dari Kementerian Lingkungan Hidup dan Kehutanan menunjukkan jumlah sampah plastik di Indonesia mencapai 7,2 juta ton per tahun. Jumlah ini dapat meningkat setiap tahunnya dan menimbulkan kekhawatiran akan dampaknya terhadap lingkungan. Plastik konvensional memiliki sifat yang tidak mudah terurai di alam sehingga akan mencemari lingkungan. Butuh waktu hingga ratusan tahun untuk mengurai plastik, sehingga hal ini akan mengakibatkan penumpukan sampah.</p>
                            <p style="text-align: justify;">Di tengah maraknya isu terkait sampah plastik, PT Suryasukses Abadi Prima (SAP) berusaha memberikan terobosan baru yang akan membantu pelestarian alam. Dengan pengalaman lebih dari 3 dekade di industri manufaktur plastik, SAP yang berdiri pada tahun 1989 menciptakan inovasi sebagai solusi dari permasalahan sampah plastik di Indonesia. SAP mulai memproduksi kemasan plastik berupa gelas plastik yang ramah lingkungan dengan teknologi oxo-biodegradable. Dengan demikian, produk kemasan plastik yang dihasilkan dapat terurai lebih cepat daripada proses penguraian plastik biasa. Untuk mengurai plastik ini dibutuhkan waktu 2-5 tahun, jauh lebih cepat daripada plastik biasa yang memerlukan ratusan tahun untuk dapat terurai.</p>
                            <p style="text-align: justify;"><strong>Apa itu teknologi Oxo-Biodegradable Plastic?</strong></p>
                            <p style="text-align: justify;">Produk plastik oxo-biodegradable dibuat dengan menambahkan bahan additive oxo-biodegradable sehingga produk yang dihasilkan akan lebih mudah terurai menjadi karbondioksida, air, dan biomassa. Dengan teknologi ini, produk plastik yang dihasilkan dapat terurai dalam waktu 2-5 tahun setelah dibuang sehingga akan sangat ramah lingkungan dan tidak berbahaya untuk bumi. Waktu penguraian plastik tergantung dari penggunaan plastik dan cara pembuangannya. Plastik yang mengandung oxo-biodegradable additive akan terurai dengan bantuan oksigen, sinar UV, dan panas yang tersedia secara alami di alam bebas. Produk yang terpapar panas dan sinar UV lebih intens akan lebih cepat terurai di alam menjadi mikropartikel yang aman untuk dikonsumsi mikroba.</p>
                            <p style="text-align: justify;">Dengan terobosan kemasan plastik oxo-biodegradable ini diharapkan akan meningkatkan kesadaran masyarakat akan penggunaan kemasan yang lebih ramah lingkungan. Seperti yang kita ketahui, sangat banyak bisnis kuliner yang menggunakan plastik untuk kemasan produk. Tak jarang, para pemilik bisnis makanan dan minuman menggunakan kemasan plastik secara berlebihan dengan alasan supaya lebih aman untuk pesanan takeaway. Apabila para pemilik bisnis kuliner semakin tergerak untuk menggunakan kemasan plastik ramah lingkungan, tentunya hal tersebut akan sangat membantu pelestarian lingkungan dan pengurangan sampah plastik.</p>
                            
                            <p class="text-center my-4">
                                <img src="{{ asset('assets/images/news/test result (1).jpeg') }}" class="img-fluid" style="width: 609px; height: auto;" alt="Test Result">
                            </p>
                            
                            <p style="text-align: justify;"><strong>Keunggulan produk SAP</strong></p>
                            <p style="text-align: justify;">SAP memberi penekanan kuat pada kualitas. Pelaksanaan manufaktur terbaik terus dilakukan untuk meningkatkan kualitas yang lebih baik. SAP telah memiliki FSSC 22000 dan sertifikasi ISO 9001, mengikuti standarisasi tinggi dari keamanan pangan internasional. Dengan menggunakan material food grade, produk yang dihasilkan sangat aman untuk makanan dan minuman sehingga tidak akan mempengaruhi rasa. Selain itu, produk kemasan yang dihasilkan juga terbukti kuat, aman, serta memiliki bentuk yang presisi. SAP juga mempunyai tim desain yang merancang produk dengan menggabungkan kreatifitas dan fungsionalitas agar dapat selalu memenuhi kebutuhan konsumen. Untuk informasi lebih lanjut kunjungi website resmi di <a href="http://www.suryasukses.com/">www.suryasukses.com</a></p>
                            <p>source:</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail29') }}"><i class="fas fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail23') }}">Next <i class="fas fa-chevron-right"></i></a></p>
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

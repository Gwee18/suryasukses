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
                <h3 class="detail-title">Kantong Plastik Dilarang, Amari Spunbond Tawarkan Bahan Tas Ramah Lingkungan</h3>
                <div class="clear clearfix"></div>
                <span class="dates"><small><i class="fa fa-calendar"></i> 24 August 2020</small></span>
                <div class="clear clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/0cca0-Foto utama.png') }}" alt="Kantong Plastik Dilarang, Amari Spunbond Tawarkan Bahan Tas Ramah Lingkungan">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">Di tengah ramainya isu pencemaran lingkungan oleh sampah plastik, Gubernur DKI Jakarta Anies Baswedan mengambil langkah dengan mengeluarkan Peraturan Gubernur Nomor 142 tahun 2019 tentang Kewajiban Penggunaan Kantong Belanja Ramah Lingkungan Pada Pusat Perbelanjaan, Toko Swalayan, dan Pasar Rakyat. Pergub ini sudah ditandatangani oleh gubernur dan diharapkan dapat mengurangi penggunaan kantong plastik khususnya di pusat perbelanjaan tradisional maupun swalayan modern atau mall. Peraturan yang melarang penggunaan kantong plastik sekali pakai ini akan berlaku mulai 1 Juli 2020. Pada peraturan tersebut dijelaskan apabila ada toko, swalayan, atau pedagang di pasar yang menggunakan kantong plastik akan dikenakan sanksi yang dapat berupa teguran tertulis, uang paksa, pembekuan izin, dan/atau pencabutan izin.</p>
                            <p style="text-align: justify;">Upaya pengurangan plastik ini merupakan langkah yang tepat karena sampah plastik di Indonesia sudah menimbulkan banyak dampak negatif, terutama untuk laut dan ekosistem di dalamnya. Seperti yang dikatakan Susi Pudjiastuti, mantan Menteri Kelautan dan Perikanan, Indonesia merupakan penyumbang sampah plastik terbesar kedua di dunia. Oleh karena itu upaya pengurangan sampah plastik ini harus dilaksanakan dengan serius.</p>
                            <p style="text-align: justify;">Salah satu solusi untuk mengurangi sampah plastik adalah dengan mencari alternatif pengganti kantong plastik berupa bahan yang lebih ramah lingkungan, yaitu dengan reusable bag atau tas yang bisa dipakai berulang kali. Menurut data mengurangi penggunaan kantong plastik dapat menurunkan konsumsi plastik hingga 14%. Dengan turunnya Pergub ini, masyarakat diharapkan dapat mengganti kantong plastik belanja dengan membawa sendiri tas atau kantong yang dapat dipakai berulang kali dari rumah.</p>
                            
                            <p>
                                <img src="{{ asset('assets/images/news/kain spunbond.png') }}" style="max-width: none;" alt="Kain Spunbond">
                            </p>
                            
                            <p style="text-align: justify;">Opsi bahan yang cocok untuk reusable bag salah satunya adalah kain non-woven spunbond yang lebih awet dan tidak mudah robek atau rusak. Tekstur kain spunbond yang halus namun rapat membuatnya cukup kuat digunakan untuk produk tas. Apabila kotor, tas yang terbuat dari kain spunbond bisa dicuci dan dipakai lagi hingga berulang kali. Selain itu, tas ini juga memiliki harga yang murah dan dapat dibuat dengan desain dan warna-warna yang menarik sesuai keinginan sehingga membuat tampilannya lebih menarik daripada kantong plastik biasa.</p>
                            <p style="text-align: justify;">Dalam pemilihan bahan baku tas ramah lingkungan, konsumen juga harus jeli karena masing-masing produsen memiliki kualitas yang bisa berbeda-beda. Untuk mendapatkan bahan baku kain spunbond berkualitas dan lebih lembut, anda bisa mengandalkan Amari spunbond, yang diproduksi oleh PT Suryasukses Mekar Makmur. Dibuat dengan mengikuti standard ISO 9001, produk-produk Amari memiliki kualitas yang terjamin. Kain spunbond Amari memiliki beberapa macam ketebalan dan warna-warna yang menarik sehingga dapat menyesuaikan kebutuhan konsumen.</p>
                            <p style="text-align: justify;">Selain digunakan untuk pengganti kantong plastik, tas spunbond juga banyak digunakan sebagai goodie bag atau souvenir untuk acara-acara tertentu, sertamedia promosi. Tas spunbond dapat diberi gambar sesuai desain yang diinginkan, misalnya menggunakan gambar logo perusahaan atau diberi desain unik yang sesuai dengan ciri khas perusahaan. Apabila anda membutuhkan kain spunbond untuk bahan tas ramah lingkungan atau keperluan lainnya, Amari spunbond siap melayani. Untuk informasi lebih lanjut mengenai produk, anda bisa mengunjungi website <a href="http://www.suryasukses.com/">www.suryasukses.com</a> atau mengunjungi instagram.com/amarispunbond.</p>
                            
                            <p>source:</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail23') }}"><i class="fa fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail21') }}">Next <i class="fa fa-chevron-right"></i></a></p>
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

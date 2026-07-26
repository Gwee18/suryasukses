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
                <h3 class="detail-title">Peralatan Kantor Fungsional dari Multindo yang Bikin Semangat Kerja</h3>
                <div class="clear clearfix"></div>
                <span class="dates"><small><i class="fas fa-calendar-alt"></i> 27 November 2020</small></span>
                <div class="clear clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/52e12-foto utama_o.png') }}" alt="Peralatan Kantor Fungsional dari Multindo">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">Perlengkapan kantor merupakan keperluan wajib untuk sebuah perusahaan. Agar semua pekerjaan dari perusahaan bisa berjalan dengan lancar, kebutuhan kantor haruslah terpenuhi. Meskipun kecil, namun perlengkapan kantor tidak boleh disepelekan karena hal itu dapat mempengaruhi produktivitas kerja lho. Ada banyak sekali jenis dan merek perlengkapan yang dijual di pasaran, namun tidak semuanya cocok dengan kebutuhan kita. Oleh karena itu, pemilihan perlengkapan kantor harus memperhatikan beberapa aspek seperti kebutuhan, luas ruang kantor, serta alokasi budget. Berikut ini tips untuk memilih perlengkapan kantor.</p>
                            <p class="text-center my-4">
                                <img src="{{ asset('assets/images/news/office artikel.jpg') }}" class="img-fluid" style="width: 438px; height: auto;">
                            </p>
                            <p style="text-align: justify;"><strong>1. Pilih perlengkapan yang bisa membuat ruangan lebih rapi.</strong></p>
                            <p style="text-align: justify;">Suasana lingkungan kantor sangat mempengaruhi aktivitas dan produktivitas para pegawai. Memiliki kantor yang nyaman dengan semua dokumen dan peralatan yang tertata rapi tentunya sangat penting. Untuk itu, perlengkapan kantor yang bisa menghilangkan kesan tidak rapi sangat diperlukan, contohnya seperti storage box, laci, ataupun container. Produk perlengkapan kantor dari Multindo seperti Constantine dan Avalon drawer sangat cocok untuk menyimpan dokumen dan perkakas lain sehingga lebih rapi. Sedangkan Laguna dan Lovina drawer cocok sebagai tempat alat tulis dan dapat ditaruh di meja kerja karena ukurannya yang tidak terlalu besar. Yang tak kalah penting, sediakan tempat sampah di sudut-sudut ruangan supaya kebersihan tetap terjaga. Multindo memiliki beberapa jenis tempat sampah yang dapat disesuaikan dengan kondisi ruangan seperti tempat sampah injak, tempat sampah tanpa atau dengan tutup.</p>
                            <p style="text-align: justify;"><strong>2. Sesuaikan kebutuhan</strong></p>
                            <p style="text-align: justify;">Pembelian perlengkapan kantor tentunya harus disesuaikan dengan kebutuhan dan kegiatan apa saja yang paling dominan. Menentukan jumlahnya pun juga harus bijak, jangan terlalu banyak atau sedikit. Apabila kamu bekerja di bagian administrasi misalnya, pasti akan berurusan dengan dokumen. Oleh karena itu, menggunakan perlengkapan seperti stackable container atau wadah serbaguna yang bisa ditumpuk bisa menjadi solusi. Dengan Adena stackable container dari Multindo, kamu bisa mengelompokkkan penempatan dokumen sehingga memudahkan pencarian saat dibutuhkan. </p>
                            <p style="text-align: justify;"><strong>3. Pilih barang yang berkualitas untuk pemakaian jangka panjang</strong></p>
                            <p style="text-align: justify;">Pikirkan tentang durabilitas barang. Untuk pemakaian jangka panjang, pilihlah barang dengan material yang lebih kuat dan bagus. Namun ingat, barang berkualitas tersebut juga harus memiliki harga yang sebanding. Pemilihan bahan juga harus disesuaikan, contohnya apabila ingin menyimpan barang yang terbuat dari kertas, jangan pilih lemari dengan bahan kayu karena dapat mendatangkan rayap, lebih baik menggunakan container plastik atau lemari dari aluminium.</p>
                            <p style="text-align: justify;"><strong>4. Buat skala prioritas</strong></p>
                            <p style="text-align: justify;">Selain itu, membuat skala prioritas pembelian barang juga dapat meningkatan efisiensi. Sebaiknya kamu belanja peralatan mulai dari yang paling penting dan penggunaanya sering. Kurangi membeli barang-barang yang sifatnya hanya pelengkap. Namun, kalau budget yang dimiliki masih lebih, kamu boleh-boleh saja berbelanja barang di luar kebutuhan utama.</p>
                            <p style="text-align: justify;">Untuk melengkapi segala keperluan kantor, Multindo memiliki produk khusus office yang memiliki kualitas baik dan model serta warna-warna yang menarik yang membuatmu semangat kerja. Kunjungi website resmi <a href="http://www.multindo.com/">www.multindo.com</a> dan klik <a href="http://bit.do/katalogmultindo">http://bit.do/katalogmultindo</a> untuk mendownload katalognya.</p>
                            <p>source:</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail') }}"><i class="fas fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail31') }}">Next <i class="fas fa-chevron-right"></i></a></p>
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

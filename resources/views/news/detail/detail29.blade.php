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
                <h3 class="detail-title">Peluang Bisnis Kemasan Minuman yang Menjanjikan dari Suryasukses</h3>
                <div class="clear clearfix"></div>
                <span class="dates"><small><i class="fa fa-calendar"></i> 06 November 2020</small></span>
                <div class="clear clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/f559a-foto utama.png') }}" alt="Peluang Bisnis Kemasan Minuman yang Menjanjikan dari Suryasukses">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">Untuk memulai suatu bisnis, pengusaha dituntut untuk kreatif dan inovatif sehingga barang yang ditawarkan memiliki nilai tambah dan dapat bersaing di dalam industri. Pemilihan bidang usaha sendiri harus memperhatikan perkembangan jaman. Tak hanya melihat tren, namun juga harus memperhitungkan prospek kedepannya. Contohnya, saat ini sangat ramai sekali bisnis kuliner. Dari sini kita bisa menemukan ide bisnis yang menjanjikan. Namun, kita juga harus jeli dan berhati-hati memilih jenis usaha. Karena pemain di bisnis kuliner sudah sangat banyak, maka kita bisa melihat peluang lain yang masih berhubungan dan tingkat permintaanya tinggi.</p>
                            <p style="text-align: justify;">Salah satu bisnis yang menjanjikan seiring dengan perkembangan bisnis kuliner adalah bisnis kemasan makanan dan minuman. Di tengah maraknya bisnis kopi dan boba drink, penjual kemasan minuman dapat meraup untung yang berkali lipat karena permintaan kemasan minuman yang terus meningkat. Bisnis kemasan menjadi bisnis yang menjanjikan karena hampir semua produk yang dijual pasti memerlukan kemasan, terutama bisnis minuman. Selain itu, kemasan juga sangat penting untuk menarik minat pembeli, menonjolkan identitas produk dan memberi ciri khas. Yang paling penting, bisnis kemasan minuman bukanlah bisnis yang hanya musiman, karena penjualan produk minuman secara umum akan selalu berjalan.</p>
                            <p style="text-align: justify;">Kalau kamu bingung mau memulai bisnis kemasan dari mana, Suryasukses Group (PT Suryasukses Abadi Prima dan PT Suryasukses Adi Perkasa) membuka peluang untuk menjadi reseller atau agen resmi kemasan plastik merek SAP. Suryasukses menawarkan kerjasama dengan memberi supply kemasan minuman plastik yang sangat variatif. Terdapat pula paket reseller yang bisa kamu pilih dan cocok untuk pemula yang ingin memulai bisnis. Contoh kemasan yang ditawarkan SAP sangat beragam seperti botol air mineral, botol juice, botol almond milk, dan cup plastik dengan berbagai macam tutup yang cocok untuk kopi ataupun bubble tea. Tak hanya itu, SAP juga melayani printing cup dan custom desain botol/cup sesuai permintaan.</p>
                            
                            <p class="text-center my-4">
                                <img src="{{ asset('assets/images/news/products (1).jpg') }}" class="img-fluid" style="width: 652px; height: auto;" alt="Produk SAP">
                            </p>
                            
                            <p style="text-align: justify;">Bisnis ini memiliki potensi pendapatan yang baik sekali karena produk-produk SAP memiliki kualitas yang tinggi, selalu inovatif dan mengikuti perkembangan jaman. Pangsa pasar dari kemasan minuman plastik sangat luas, mulai dari usaha kecil dan menengah hingga brand besar di bidang minuman. Adapula beberapa pangsa pasar yang potensial seperti pengusaha kuliner, event organizer, penyelenggara seminar, dan lain-lain. Ada beberapa tips memulai bisnis yang perlu kamu pertimbangkan, di antaranya:</p>
                            <p style="text-align: justify;"><strong>1. Membuat Perencanaan bisnis (business plan) </strong></p>
                            <p style="text-align: justify;">Buat perencanaan bisnis seperti menentukan besarnya modal, menentukan tujuan, dan menganalisa kompetitor sehingga kita bisa melakukan tindakan-tindakan yang bisa memberi nilai tambah pada produk.</p>
                            <p style="text-align: justify;"><strong>2. Membuat perencanaan keuangan sederhana</strong></p>
                            <p style="text-align: justify;">Mulai buat perencanaan keuangan seperti mencatat penghasilan dan keuntungan. Kalau bisnis kamu sudah berkembang, pertimbangkan mencari modal usaha tambahan.</p>
                            <p style="text-align: justify;"><strong>3. Menentukan kebutuhan sumber daya manusia (SDM)</strong></p>
                            <p style="text-align: justify;">Suatu usaha dapat sukses apabila perencanaan SDM dilakukan dengan benar. Apabila kamu sudah merasa kewalahan menghandle bisnis yang kamu jalani, artinya sudah saatnya menambah karyawan.</p>
                            <p style="text-align: justify;"><strong>4. Mempersiapkan strategi pemasaran</strong></p>
                            <p style="text-align: justify;">Poin terakhir ini adalah poin yang paling penting, karena strategi pemasaran merupakan salah satu ujung tombak kesuksesan sebuah bisnis. Siapkan strategi yang up to date dan sesuai dengan target pasarmu. Selain itu, kemampuan negosiasi juga sangat penting karena bisnis minuman ini akan banyak melibatkan partnership.</p>
                            <p style="text-align: justify;">Kalau kamu tertarik untuk memulai bisnis di bidang kemasan minuman, kamu bisa melihat katalog produk kami di www.botolpastik.id. Untuk info lebih lanjut, kunjungi website resmi <a href="http://www.suryasukses.com/">www.suryasukses.com</a>.</p>
                            <p>source:</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail31') }}"><i class="fa fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail28') }}">Next <i class="fa fa-chevron-right"></i></a></p>
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

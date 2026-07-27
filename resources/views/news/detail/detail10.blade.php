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
                <h3 class="detail-title">Tips Membuat Logo untuk Usaha Minuman</h3>
                <div class="clearfix"></div>
                <span class="dates"><small><i class="fa fa-calendar"></i> 25 November 2019</small></span>
                <div class="clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/8ccea-Copy of katalog 2.png') }}" alt="Tips Membuat Logo untuk Usaha Minuman">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">Kompetisi bisnis yang sangat intens di era modern ini mengharuskan pelaku bisnis untuk selalu kreatif dan inovatif. Salah satu hal yang sangat penting untuk diperhatikan guna memenangkan pasar adalah bagaimana membuat komunikasi yang baik dan efektif dengan pelanggan maupun calon pelanggan. Lewat logo, suatu brand dapat membuat komunikasi visual yang menarik minat pembeli untuk berinteraksi, bahkan membuat suatu brand lebih diingat. Lebih dari itu, logo juga memiliki peran yang sangat penting untuk membangun identitas perusahaan serta menyampaikan pesan bisnis kepada target pasar, sehingga logo dapat membuat customer loyal terhadap brand. Lalu, bagaimana cara membuat logo yang efektif dan atraktif?</p>
                            
                            <p style="text-align: justify;">Berikut adalah tips untuk membuat logo yang efektif dan menarik:</p>
                            
                            <div style="padding-left: 15px;">
                                <p style="margin-bottom: 5px;"><strong>1. Ketahui target pasar</strong></p>
                                <p style="text-align: justify;">Pembuatan desain logo harus memperhatikan untuk siapa logo tersebut dibuat dan kepada siapa logo tersebut ingin ditampilkan. Sebagai contoh, desain logo untuk brand minuman yang target pasarnya anak-anak seharusnya memakai logo yang atraktif dan playful, bukan logo yang dark dan tough.</p>
                                
                                <p style="margin-bottom: 5px;"><strong>2. Buat first impression yang baik</strong></p>
                                <p style="text-align: justify;">Logo adalah hal pertama yang dilihat orang sebelum mengenal brand lebih dalam, sehingga logo yang efektif adalah yang dapat menciptakan first impression yang baik di mata calon customer. Pastikan logo yang anda ciptakan unik dan mengikuti perkembangan jaman.</p>
                                
                                <p style="margin-bottom: 5px;"><strong>3. Keep it simple</strong></p>
                                <p style="text-align: justify;">Logo yang baik adalah logo yang menarik namun tetap sederhana sehingga mudah dipahami dan diingat. Pastikan logo yang anda buat dapat menyampaikan pesan dengan jelas dan tidak membingungkan. Sebaiknya, pilih sesedikit mungkin warna untuk digunakan pada logo. Idealnya suatu logo dapat menggunakan maksimal 3 warna saja.</p>
                                
                                <p style="margin-bottom: 5px;"><strong>4. Pilih jenis logo yang tepat</strong></p>
                                <p style="text-align: justify;">Logo ada beberapa macam, yaitu berupa tulisan, gambar, ataupun simbol. Logo berupa tulisan nama perusahaan (seperti milik Coca-Cola) merupakan logo yang baik karena mudah diingat sekaligus dapat berperan untuk meningkatkan brand awareness. Namun, apabila perusahaan anda memiliki budget yang lebih, anda boleh memilih logo berupa simbol seperti yang dimiliki perusahaan Apple.</p>
                                
                                <p style="margin-bottom: 5px;"><strong>5. Minta pendapat orang lain</strong></p>
                                <p style="text-align: justify;">Mintalah masukan kepada orang lain untuk logo anda. Jika perlu, adakan survey kepada target pasar anda mengenai logo yang mereka sukai. Hal ini akan berguna sebagai input untuk logo anda.</p>
                            </div>

                            <p style="text-align: justify;">Jadi, sudah tahu kan pentingnya logo untuk bisnis? Semua bisnis mulai dari bisnis jasa, layanan kesehatan, pakaian, hingga makanan memerlukan logo untuk membuat bisnis dikenal masyarakat luas, begitupula usaha minuman anda.</p>
                            
                            <p style="text-align: justify;">Apabila saat ini anda mencari kemasan produk minuman yang dapat di customize dengan logo usaha anda, SAP siap melayani. Dengan penawaran printing, anda dapat mencetak logo brand atau usaha anda pada permukaan gelas, sehingga kemasan minuman anda terlihat lebih menarik dan memiliki identitas. Untuk pemesanan produk dan informasi lebih lanjut mengenai minimum pemesanan, hubungi customer service kami di:</p>
                            
                            <p>085777303030 (Hotline)</p>
                            <p>(031) 5030450 (Surabaya Sales Office)<br>(021) 3861333 (Jakarta Sales Office)</p>
                            
                            <p>source:</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail12') }}"><i class="fa fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail9') }}">Next <i class="fa fa-chevron-right"></i></a></p>
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

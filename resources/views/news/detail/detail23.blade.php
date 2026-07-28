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
                <h3 class="detail-title">Kenali Bahan Pembuat Masker Medis</h3>
                <div class="clear clearfix"></div>
                <span class="dates"><small><i class="fa fa-calendar"></i> 28 August 2020</small></span>
                <div class="clear clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/ff1d8-foto utama_masker.jpg') }}" alt="Kenali Bahan Pembuat Masker Medis">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">Merebaknya virus corona di Indonesia ini membuat masyarakat resah. Pemerintah selalu menekankan untuk memakai masker dan sering mencuci tangan untuk menjaga kebersihan dan supaya terhindar dari COVID-19. Menurut WHO, cara pencegahan penularan COVID-19 adalah dengan mencuci tangan dan pemakaian masker pada orang yang sedang sakit atau menunjukkan gejala-gejala terjangkit virus corona COVID-19. Untuk orang sehat disarankan memakai masker kain, sedangkan masker medis atau masker sekali pakai disarankan untuk orang yang memiliki gejala sakit dan orang sehat dengan faktor resiko tinggi, seperti tenaga medis atau orang dengan penyakit penyerta seperti hipertensi, diabetes, dan penyakit jantung.</p>
                            <p style="text-align: justify;">Permintaan masker diperkirakan akan terus naik di tengah pandemi ini. Tentunya hal ini akan membuat para produsen masker mencari bahan baku masker dengan kuantitas yang lebih daripada biasanya. Salah satu produsen baku masker berkualitas di Indonesia adalah PT Suryasukses Mekar Makmur dengan brand Amari yang menawarkan kain spunbond dan meltblown yang termasuk jenis nonwoven atau tidak dirajut dan terbuat dari polypropylene. Dengan karakteristik permukaan yang lembut dan tipis serta berpori, kain spunbond memiliki daya serap, ketahanan, dan kekuatan yang baik. Sedangkan kain meltblown dapat berfungsi untuk menyaring dan menghalangi bakteri. Sehingga, orang yang sedang sakit batuk atau pilek dapat melindungi orang lain supaya tidak tertular.</p>
                            
                            <p class="text-center my-4">
                                <img src="{{ asset('assets/images/news/masker.jpg') }}" class="img-fluid" style="width: 569px; height: auto;" alt="Masker">
                            </p>
                            
                            <p style="text-align: justify;">Masker 3 ply di pasaran umumnya terbuat dari 3 lapisan,dengan meltblown ditempatkan di antara kain spunbond. Bahan meltblown memiliki pori- pori partikel lebih kecil dibanding kain spunbond, secara efektif memblokir debu mikro dan bakteri. Penggunaan 3 Ply Face Mask membantu mengurangi penyebaran virus, kuman, dan bakteri sekaligus berfungsi untuk mengingatkan pengguna masker untuk tidak menyentuhmulut atau hidung mereka, yang dapat memindahkan virus dan bakteri setelah menyentuh permukaan yang terkontaminasi.</p>
                            <p style="text-align: justify;">Masker yang terbuat dari kain spunbond adalah masker sekali pakai dan dapat langsung dibuang, sehingga sterilitas terjamin. Sifat kain spunbond yang higienis membuat kain ini sangat cocok dipakai dalam industri kesehatan seperti untuk membuat baju operasi, tirai, sarung bantal, pampers, penutup kepala, serta penutup kasur. Selain ramah lingkungan karena dapat didaur ulang, kain spunbond juga aman dan sangat praktis penggunaannya.</p>
                            <p style="text-align: justify;">Produk-produk kain nonwoven Amari memiliki kualitas yang sangat baik dan tingkat kelembutan yang lebih dibandingkan dengan kain nonwoven merek lain, serta memenuhi standard penggunaan di bidang kesehatan. Amari telah berpengalaman di bidangnya dan telah melayani berbagai customer di bidang kesehatan seperti rumah sakit dan klinik kesehatan. Amari juga menyediakan kain spunbond dengan pilihan ketebalan yang beragam dan opsi untuk menambahkan kualitas seperti Anti UV, Anti Bacterial, atau aroma tertentu untuk memenuhi kebutuhan pelanggan yang beragam dan memberi nilai tambah.</p>
                            <p style="text-align: justify;">Di tengah maraknya berita yang simpang siur mengenai virus corona dan penggunaan masker, edukasi pasar harus ditingkatkan agar masyarakat lebih aware dengan dan langkah- langkah untuk mencegah penyebarannya</p>
                            <p style="text-align: justify;">Untuk informasi lebih lanjut dan pemesanan silahkan mengunjungi website resmi Amari <a href="http://www.amarinonwoven.com/">https://www.amarinonwoven.com/</a>.</p>
                            
                            <p>source:</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail28') }}"><i class="fa fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail22') }}">Next <i class="fa fa-chevron-right"></i></a></p>
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

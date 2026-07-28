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
                <h3 class="detail-title">Aplikasi AMARI Spunbond di bidang Agrikultur</h3>
                <div class="clearfix"></div>
                <span class="dates"><small><i class="fa fa-calendar"></i> 14 January 2018</small></span>
                <div class="clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/6eb35-fungsi spunbond untuk pertanian (1).jpg') }}" alt="Aplikasi AMARI Spunbond di bidang Agrikultur">
                        </div>
                        <div class="contents_det_blog">
                            <h2>Amari Spunbond Nonwoven </h2>
                            <p style="text-align: justify;">Digunakan secara efektif untuk mengoptimalkan produktivitas tanaman pangan, kebun dan rumah kaca. Dengan proteksi dari AMARI Spunbond Nonwoven kebutuhan pestisida dan tenaga kerja manual dapat dikurangi.</p>
                            <p style="text-align: justify;">Penggunaan pelindung tanaman nonwoven terbukti meningkatkan hasil panen dan kualitas hasil panen. Lembaran yang sangat ringan dan fleksibel diletakkan di atas biji yang baru bersemai menciptakan iklim mikro di mana panas dan kelembaban dikendalikan. Pertumbuhan tanaman dipercepat dan terlindungi dari kondisi cuaca buruk dan hama.</p>
                            <p style="text-align: justify;">Amari Spunbond Nonwoven dapat diaplikasikan sebagai berikut :</p>
                            
                            <p>1. Penutup Tanaman</p>
                            <p><img src="{{ asset('assets/images/news/fungsi spunbond untuk pertanian (2).jpg') }}" alt="Penutup Tanaman" style="max-width: 100%; height: auto;"></p>
                            
                            <ul>
                                <li><p style="margin-bottom: 0;">Membentuk penghalang fisik antara tanaman dan lingkungan, melindunginya dari wabah, serangga, infeksi dan debu;</p></li>
                                <li><p style="margin-bottom: 0;">Menambahkan nilai pada hasil panen di pasar ekspor;</p></li>
                                <li><p style="margin-bottom: 0;">Meminimalkan atau bahkan menghilangkan penggunaan bahan kimia agro dalam tanaman. Ideal untuk produsen organik atau bio-rasional;</p></li>
                                <li><p style="margin-bottom: 0;">Menghasilkan iklim mikro yang meningkatkan hasil panen dan kualitas panen yang lebih baik;</p></li>
                                <li><p style="margin-bottom: 0;">Memungkinkan rembesan air, udara dan cahaya yang dibutuhkan untuk pertumbuhan tanaman;</p></li>
                                <li><p style="margin-bottom: 0;">lTanamann utama: Melon, Labu, Semangka, Lada, Tomat, Mentimun, Peppers Panas, Bunga,Membentuk penghalang fisik antara tanaman dan lingkungan, melindunginya dari wabah, serangga, infeksi dan debu.</p></li>
                            </ul>
                            
                            <p>2. Pelindung Buah</p>
                            <p><img src="{{ asset('assets/images/news/fungsi spunbond untuk pertanian (1).png') }}" alt="Pelindung Buah" style="max-width: 100%; height: auto;"></p>
                            
                            <ul>
                                <li>Tas kain non-woven yang dirancang untuk melindungi individu atau buah berkerumun;</li>
                                <li>Selubung yang menjamin bahwa tidak ada serangga atau wabah yang bersentuhan dengan buah yang mengisolasinya dari luar;</li>
                                <li>Tidak seperti tas polietilen, spunbond nonwoven bisa dipakai ulang hingga 4 kali;</li>
                                <li>Menghasilkan iklim mikro yang mendorong pertumbuhan dan kualitas buah;</li>
                                <li>lDi Pohon Pisang dan Buah Pisang, ia berhasil mempercepat panen hingga 2 minggu;</li>
                                <li>Melindungi buah tanpa menggunakan bahan kimia agro, ideal untuk tanaman organik atau bio-rasional;</li>
                                <li>Tanaman utama: Pohon pisang, Pisang, Pepaya.</li>
                            </ul>
                            
                            <p>3. <strong>Padding or Underbrush Protection</strong></p>
                            <p><img src="{{ asset('assets/images/news/fungsi spunbond untuk pertanian (3).jpg') }}" alt="Padding or Underbrush Protection" style="max-width: 100%; height: auto;"></p>
                            
                            <ul>
                                <li>Secara memadai menghalangi cahaya yang mendorong pertumbuhan semak-semak;</li>
                                <li>Berbeda dengan padatan polietilen, sangat permeabel terhadap air, udara dan nutrisi yang menjaga kualitas tanah;</li>
                                <li>Mencegah akumulasi air pada permukaan padding;</li>
                                <li>Berlangsung sampai 3 siklus saat dipasang di lapangan, mengurangi tenaga kerja.</li>
                            </ul>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail2') }}"><i class="fa fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail') }}">Next <i class="fa fa-chevron-right"></i></a></p>
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

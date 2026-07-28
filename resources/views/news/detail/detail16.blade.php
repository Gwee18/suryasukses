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
                <h3 class="detail-title">Kemasan Unik Untuk Bisnis Boba dan Kopi dari Suryasukses</h3>
                <div class="clear clearfix"></div>
                <span class="dates"><small><i class="fa fa-calendar"></i> 15 May 2020</small></span>
                <div class="clear clearfix"></div>
                <div class="py-3"></div>
                
                <div class="row feature-data mb-0 mt-0">
                    <div class="col-md-12">
                        <div class="featured_car_detail pb-2">
                            <img class="img img-fluid w-100" src="{{ asset('assets/images/news/0f914-Untitled design (2).jpg') }}" alt="Kemasan Unik Untuk Bisnis Boba dan Kopi dari Suryasukses">
                        </div>
                        <div class="contents_det_blog">
                            <p style="text-align: justify;">Tak dipungkiri, minuman kopi kekinian dan boba drink merupakan minuman yang tak henti-hentinya dibicarakan pada tahun 2019. Tren kedua jenis minuman ini telah membuat banyak pelaku bisnis ingin mencoba peruntungan dengan menjual produk minuman tersebut. Ratusan bahkan ribuan merek kopi susu dan boba drink bermunculan, mulai dari harga yang terjangkau hingga harga yang relatif mahal. Banyaknya pemain dalam bisnis kopi dan boba drink ini dipicu oleh naiknya permintaan akan kedua jenis minuman tersebut. Masyarakat yang ingin mengikuti tren seringkali penasaran dengan rasa minuman yang baru, sehingga mereka akan terus mencoba minuman dengan merek yang berbeda-beda. Tak hanya berawal dari rasa penasaran, banyak orang menjadi ketagihan akan minuman ini dan terus mengkonsumsinya.</p>
                            <p style="text-align: justify;">Naiknya tingkat konsumsi kopi dan boba drink ini mendorong penggunaan kemasan minuman yang terbuat dari plastik. Selain itu, persaingan yang ketat di industri minuman juga membuat para pebisnis memutar otak untuk mengemas dagangan mereka semenarik mungkin. Seperti yang kita tahu, kemasan sangat berpengaruh dengan keputusan pembelian konsumen, sehingga sangat penting untuk memperhatikan desain dan kualitas kemasan produk yang akan dijual.</p>
                            <p style="text-align: justify;">Menjawab kebutuhan para pebisnis minuman, PT Suryasukses Abadi Prima (SAP) menyediakan berbagai kemasan minuman yang terbuat dari plastik seperti botol plastik, cup plastik, tutup botol, tutup gelas plastik, dan preform. Bentuk dari packaging plastik yang disediakan juga sangat variatif, seperti botol cantik, botol almond yang berbentuk tabung, botol taro yang memiliki penampang kotak, dan lain-lain. Selain itu, ada juga botol minyak goreng dan botol kecap.</p>
                            <p style="text-align: justify;">Botol-botol dengan bentuk unik ini sangat membantu para pemilik bisnis minuman untuk membuat produk mereka lebih menarik. Tak hanya botol, SAP juga memproduksi beberapa jenis cup plastik berwarna bening dan putih opaque yang sangat cocok digunakan untuk kemasan minuman seperti kopi susu atau boba drink. SAP juga melayani pembuatan cup plastik custom dengan logo perusahaan atau desain sesuai permintaan pelanggan dengan cara printing cup sampai dengan 6 warna. Hal ini tentunya sangat memudahkan pemilik bisnis minuman untuk mendapatkan desain kemasan sesuai dengan yang mereka inginkan.</p>
                            <p style="text-align: justify;">Suryasukses Group memiliki pabrik yang tersebar di wilayah Jawa Timur (PT Suryasukses Abadi Prima) dan Jawa Barat (PT Suryasukses Adi Perkasa) sehingga lebih memudahkan pelanggan untuk mendapatkan produk-produknya. Dalam memproduksi kemasan plastik, SAP menggunakan mesin-mesin berteknologi tinggi untuk menjamin kualitas produk yang dihasilkan agar sesuai dengan standar ISO 9001 dan Food Safety International. Botol dan cup merek SAP berstandar food grade dan memiliki sertifikasi dari FSSC 2200 sehingga sangat aman untuk makanan dan minuman. Selain itu, produk-produk SAP juga terjamin kualitasnya, memiliki kekuatan yang baik, serta tidak mengkontaminasi dan merubah rasa minuman yang akan dikemas.</p>
                            
                            <p>source:</p>
                            
                            <div class="py-3"></div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="{{ route('news.detail18') }}"><i class="fa fa-chevron-left"></i> Back</a></p>
                                </div>
                                <div class="col">
                                    <p class="text-center">
                                        <a href="{{ route('news') }}">View News</a>
                                    </p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-end"><a href="{{ route('news.detail15') }}">Next <i class="fa fa-chevron-right"></i></a></p>
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

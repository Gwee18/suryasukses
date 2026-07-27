@extends('layouts.app')

@section('title', 'FAQ | Surya Sukses')

@push('styles')
    @vite('resources/css/pages/faq.css')
@endpush

@section('content')
<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">FAQ</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-3">
          <div class="block-back-link text-end">
            <a href="#" onclick="window.history.back();">Back</a>
          </div>
        </div>
      </div>
      <div class="py-2"></div>
    </div>
</section>

<section class="cerf-sec-1 block_section_faq">
  <div class="prelative container">
    <div class="row gy-4">
      <div class="col-md-3">
        <div class="title box-konten-kiri">
          <h5>FAQ</h5>
          <ol>
          </ol>
        </div>
      </div>
      <div class="col-md-9">
      <div class="accordion blocks_faq_listdata" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Apa produk SAP aman untuk produk makanan dan minuman?
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="card-body">
             <p>Fasilitas produksi dan SOP kami telah mengikuti standard international quality management dan food safety dari ISO 9000 dan FSSC 2200. Produk yang dimanufaktur SAP juga bersertifikasi HALAL</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Pengiriman/pengambilan barang dari mana?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="card-body">
                <p>Jl. Kertajaya No.109, Kertajaya, Kec. Gubeng, Kota SBY, Jawa Timur 60286
                <p class="pb-3">(031) 5030450</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.670341994102!2d112.75529321477495!3d-7.278299894746619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbcdd1121321%3A0x9bc20d3081f85503!2sPT%20Suryasukses%20Group%20Surabaya!5e0!3m2!1sen!2sid!4v1574415295414!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                <p class="pb-3 pt-4 mt-3">Jl. Raya Surabaya - Malang KM 40.8 Desa Kepulungan, Kec. Gempol Pasuruan Ngerong, Gempol, Pasuruan, East Java 67155</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.699578809791!2d112.68670721477699!3d-7.607634094514363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d938d1659c01%3A0x239251d0d94eeca4!2sPT.%20Suryasukses%20Inti%20Makmur!5e0!3m2!1sen!2sid!4v1574415494578!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                <p class="pt-4 mt-3">Kawasan Industri MM2100, Jl. Selayar, Mekarwangi, Kec. Cikarang Bar, Bekasi, Jawa Barat 17530</p>
                <p class="pb-3">(021) 89983777</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.670341994102!2d112.75529321477495!3d-7.278299894746619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbcdd1121321%3A0x9bc20d3081f85503!2sPT%20Suryasukses%20Group%20Surabaya!5e0!3m2!1sen!2sid!4v1574415650944!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                <p class="pt-4 mt-3">Jl. Kayu Besar Dalam (Komplek pergudangan Joko) RT.8/RW.12 No. 18, RT.8/RW.12, Tegal Alur, Kec. Kalideres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11730</p>
                <p class="pb-3">(021) 5550994</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0817358690097!2d106.72425871476865!3d-6.119700095568868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d4a895375a3%3A0x7260e3754deed94a!2sPT%20Multiplast%20Indo%20Makmur%20(Gudang%20JKT)!5e0!3m2!1sid!2sid!4v1574415846020!5m2!1sid!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Minimum pembelian?
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="card-body">
                <p>Untuk free ongkir Surabaya dan sekitar/ Jakarta dan sekitar minimum pembelian:</p>
                <p>- Botol 100 bal</p>
                <p>- Cup 60 karton</p>
                <p>* Jenis item boleh dicampur</p>
                <p>Untuk pembelian dibawah 100 bal, dapat diambil sendiri atau melalui ekspedisi sesuai pilihan pembeli</p>
            </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Minimum printing logo?
                </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="card-body">
                    <p>500.000 pcs, untuk quantity dibawah 500.000 pcs kami dapat mereferensikan partner sablon yang juga customer kami.</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Apa melayani custom design botol/cup?
                </button>
                </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="card-body">
                    <p>Bisa tapi terkena biaya pembuatan cetakan dan minimum order</p>
                    <p>Untuk proses lebih detailnya silakan hubungi kami di WA 085777303030</p>
                </div>
            </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
@endsection

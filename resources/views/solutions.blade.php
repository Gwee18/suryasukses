@extends('layouts.app')

@section('title', 'Suryasukses Studio - Solutions')

@push('styles')
<style>
    /* Styling to match the original website */
    .breadcrumb-det {
        background-color: #f9f9f9;
        padding-top: 15px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eee;
    }
    .breadcrumb-det .breadcrumb {
        background-color: transparent;
        padding: 0;
        margin: 0;
        font-size: 13px;
    }
    .breadcrumb-det .breadcrumb-item a {
        color: #666;
        text-decoration: none;
    }
    .breadcrumb-det .breadcrumb-item.active a {
        color: #0088cc;
    }
    .block-back-link a {
        color: #666;
        font-size: 13px;
        text-decoration: none;
    }
    .block-back-link a:hover {
        color: #0088cc;
    }
    
    .sol_blue-sec-1 {
        padding: 50px 0 80px;
        color: #333;
    }
    .box-konten-kiri {
        padding-right: 20px;
    }
    .box-konten-kiri h5 {
        font-size: 18px;
        font-weight: 700;
        color: #003366;
        margin-bottom: 20px;
        text-transform: uppercase;
        border-bottom: 2px solid #003366;
        padding-bottom: 10px;
        display: inline-block;
    }
    .box-konten-kiri ol {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }
    .box-konten-kiri ol li {
        margin-bottom: 12px;
    }
    .box-konten-kiri ol li a {
        color: #666;
        text-decoration: none;
        font-size: 15px;
        transition: color 0.3s;
        display: block;
    }
    .box-konten-kiri ol li a:hover {
        color: #0088cc;
    }
    .box-konten-kiri ol li.active a {
        color: #0088cc;
        font-weight: 600;
    }
    
    .sol_blue-sec-1 h4 {
        font-size: 18px;
        color: #666;
        margin-bottom: 5px;
        font-weight: 400;
    }
    .sol_blue-sec-1 h3 {
        font-size: 32px;
        color: #003366;
        font-weight: 700;
        margin-bottom: 30px;
    }
    
    .contents_text {
        font-size: 15px;
        line-height: 1.8;
        color: #555;
    }
    .contents_text p {
        margin-bottom: 20px;
    }
    .contents_text ul {
        margin-bottom: 25px;
        padding-left: 20px;
    }
    .contents_text ul li {
        margin-bottom: 8px;
    }
    .contents_text a {
        color: #0088cc;
        text-decoration: none;
    }
    
    .whatsapp {
        margin-top: 40px;
        background-color: #f9f9f9;
        padding: 20px;
        border-left: 4px solid #25d366;
        border-radius: 4px;
    }
    .whatsapp h5 {
        margin: 0;
        font-size: 18px;
        color: #333;
        display: flex;
        align-items: center;
    }
    .whatsapp h5 a {
        color: #25d366;
        text-decoration: none;
        font-weight: 600;
        margin-left: 10px;
        display: flex;
        align-items: center;
    }
    .whatsapp h5 a img {
        width: 24px;
        margin-right: 8px;
    }
    .whatsapp h5 a:hover {
        color: #128c7e;
    }
</style>
@endpush

@section('content')

<section class="breadcrumb-det">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-9 col-sm-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)" style="cursor: default;">Solution</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Suryasukses Studio</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-3 col-sm-4">
          <div class="block-back-link text-end text-sm-right">
            <a href="javascript:history.back()">Back</a>
          </div>
        </div>
      </div>
      <div class="py-2"></div>
    </div>
</section>

<section class="sol_blue-sec-1">
  <div class="container">
    <div class="row">
      <!-- Sidebar / Kiri (Setara col-md-15 di sistem grid 60) -->
      <div class="col-lg-3 col-md-4 mb-5 mb-md-0">
        <div class="box-konten-kiri">
          <h5>Solutions</h5>
          <ol>
            <li class="active"><a href="{{ route('solutions') }}">Suryasukses Studio</a></li>
            <li><a href="{{ route('capabilities') }}">Capabilities</a></li>
          </ol>
        </div>
      </div>
      
      <!-- Main Content / Kanan (Setara col-md-45 di sistem grid 60) -->
      <div class="col-lg-9 col-md-8">
        <h4>Your partner in design</h4>
        <h3>Suryasukses Studio</h3>
        
        <div class="row">
          <div class="col-12">
            <div class="pb-4">
              <!-- Memanggil gambar utama Suryasukses Studio yang di-provide user -->
              <img src="{{ asset('assets/images/solutions/aa68c28011sbl-sap (1) (1).jpg') }}" alt="Suryasukses Studio" class="img-fluid w-100 rounded shadow-sm">
            </div>

            <div class="contents_text mt-4">
              <p>Whether you’re looking for a specific cap or designing a revolutionary bottle/cup shape, our teams will work together to develop a product your consumers are sure to enjoy, guaranteed by our many years of experience and well-established networks around the world.</p>
              
              <p>Our decoration options includes:</p>
              <ul>
                <li>Custom design products</li>
                <li>Offset printing on Cup</li>
                <li>Emboss cap</li>
                <li>Emboss bottle</li>
                <li>Print logo on Houseware products</li>
              </ul>
              
              <p>Contact us and discuss your project with us now. <br>
              Email your inquiry at <a href="mailto:cs@suryasukses.com">cs@suryasukses.com</a></p>
                
              <div class="whatsapp">
                <!-- Fallback icon whatsapp jika tidak ada asset WA-Logo-copy-2.png -->
                <h5>Whatsapp 
                    <a target="_blank" href="http://wa.me/6285777303030">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" style="margin-right: 8px;">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.05-.084-.182-.133-.38-.232"/>
                        </svg>
                        +62 857 7730 3030
                    </a>
                </h5>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

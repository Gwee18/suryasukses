@extends('layouts.app')

@section('title', 'Capabilities - Solutions')

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
    
    .sol-cap-sec-1 {
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
    
    .sol-cap-sec-1 h4 {
        font-size: 18px;
        color: #666;
        margin-bottom: 5px;
        font-weight: 400;
    }
    .sol-cap-sec-1 h3 {
        font-size: 32px;
        color: #003366;
        font-weight: 700;
        margin-bottom: 30px;
    }
    
    .content-inner {
        padding-left: 20px;
    }
    @media (max-width: 767px) {
        .content-inner {
            padding-left: 0;
            padding-top: 15px;
        }
    }
    
    .innersssss h5 {
        font-size: 18px;
        color: #003366;
        font-weight: 700;
        margin-bottom: 7px;
    }
    .innersssss p {
        font-size: 12px;
        color: #555;
        line-height: 1.6;
    }
    
    .email p {
        font-size: 15px;
        color: #555;
    }
    .email a {
        color: #0088cc;
        text-decoration: none;
    }
    
    .whatsapp {
        margin-top: 20px;
        background-color: #f9f9f9;
        padding: 20px;
        border-left: 4px solid #25d366;
        border-radius: 4px;
        display: inline-block;
        width: 100%;
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
                        <li class="breadcrumb-item active" aria-current="page"><a href="#">Capabilities</a></li>
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

<section class="sol-cap-sec-1">
    <div class="container">
        <div class="row">
            <!-- Sidebar / Kiri -->
            <div class="col-lg-3 col-md-4 mb-5 mb-md-0">
                <div class="box-konten-kiri">
                    <h5>Solutions</h5>
                    <ol>
                        <li><a href="{{ route('solutions') }}">Suryasukses Studio</a></li>
                        <li class="active"><a href="{{ route('capabilities') }}">Capabilities</a></li>
                    </ol>
                </div>
            </div>
            
            <!-- Main Content / Kanan -->
            <div class="col-lg-9 col-md-8">
                <h4>What we can do for you</h4>
                <h3>Capabilities</h3>

                <!-- Injection Molding -->
                <div class="row g-0 pt-4">
                    <div class="col-md-4">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/solutions/ff445c40b3injection (1).jpg') }}" alt="Injection Molding">
                    </div>
                    <div class="col-md-8">
                        <div class="content-inner">
                            <div class="innersssss">
                                <h5>Injection Molding</h5>
                                <p>We have over 1000 products variations and over 30 years of experience and expertise necessary to provide the highest quality results for large and small scale manufacturing.<br><br>Applications: Packaging, preform, bottle caps, storage containers, household products</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Blow Molding -->
                <div class="row g-0 pt-4">
                    <div class="col-md-4">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/solutions/b399409e51blow (1).jpg') }}" alt="Blow Molding">
                    </div>
                    <div class="col-md-8">
                        <div class="content-inner">
                            <div class="innersssss">
                                <h5>Blow Molding</h5>
                                <p>As a long-standing name in the blow molding space, we serve a multitude of markets ranging from beverages to automotive.We currently manufacture a range of sizes from some of the smallest to largest bottles.<br><br>Applications: Bottles,</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Thermoforming -->
                <div class="row g-0 pt-4">
                    <div class="col-md-4">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/solutions/49cf55322dCCJ_9900.jpg') }}" alt="Thermoforming">
                    </div>
                    <div class="col-md-8">
                        <div class="content-inner">
                            <div class="innersssss">
                                <h5>Thermoforming</h5>
                                <p>As a pioneer for thermoformed drink cups, we lead the way for innovation. We are continuously expanding our expertise to include new thermoformed products.<br><br>Applications: disposable cups, containers, lids, trays</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Offset Printing -->
                <div class="row g-0 pt-4">
                    <div class="col-md-4">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/solutions/3012f54c58CCJ_0062.jpg') }}" alt="Offset Printing">
                    </div>
                    <div class="col-md-8">
                        <div class="content-inner">
                            <div class="innersssss">
                                <h5>Offset Printing</h5>
                                <p>The Dry Offset Printing process provides the most efficient method for high speed, large volume printing of multi-colored line copy, half-tones and full process art on preformed plastic parts. This option is widely used and can be completed at very high speeds.<br><br>Applications: Round containers, drink cups, jars</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Spunbond Machine -->
                <div class="row g-0 pt-4">
                    <div class="col-md-4">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/solutions/b6311f963910(1).jpg') }}" alt="Spunbond Machine">
                    </div>
                    <div class="col-md-8">
                        <div class="content-inner">
                            <div class="innersssss">
                                <h5>Spunbond Machine</h5>
                                <p>A versatile product that can be printed or luminated. Its naturally porous, light-weight and eco-friendly characteristics make spunbond a multipurpose product that can support various industries. It is commonly used for shopping/goodies bags, clothes & shoes cover, masks, medical cap/gown, fruit covers and many other things.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Spunmelt Machine -->
                <div class="row g-0 pt-4">
                    <div class="col-md-4">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/solutions/41d2c2df9fextrusion.jpg') }}" alt="Spunmelt Machine">
                    </div>
                    <div class="col-md-8">
                        <div class="content-inner">
                            <div class="innersssss">
                                <h5>Spunmelt Machine</h5>
                                <p>The extremely fine fibers differ from other extrusions,particularly spun bond, in that they have low intrinsic strength but much smaller size offering key properties. Often melt blown is added to spun bond to form SM or SMS webs, which are strong and offer the intrinsic benefits of fine fibers such as fine filtration, low pressure drop as used in face masks or filters and physical benefits such as acoustic insulation as used in dishwashers. One of the largest users of SM and SMS materials is the disposable diaper and feminine care.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Extrusion Machine -->
                <div class="row g-0 pt-4">
                    <div class="col-md-4">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/solutions/f4aa4e78c7spunmelt2.jpg') }}" alt="Extrusion Machine">
                    </div>
                    <div class="col-md-8">
                        <div class="content-inner">
                            <div class="innersssss">
                                <h5>Extrusion Machine</h5>
                                <p>Extrusion of roofing sheets, manufactured from UPVC, are designed to suit a diverse range of applications in various markets: DIY, factories, construction, architectural projects, agricultural, manufacturing and fabrication.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Section -->
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="email">
                            <p>Email your inquiry at <a href="mailto:cs@suryasukses.com">cs@suryasukses.com</a></p>
                        </div>
                        <div class="whatsapp">
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

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>

@endsection

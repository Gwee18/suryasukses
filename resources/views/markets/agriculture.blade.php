@extends('layouts.app')

@section('title', 'Agriculture Market - Suryasukses Group')

@push('early_styles')
    <link rel="stylesheet" href="{{ asset('asset/js/bootstrap-4.0.0/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
@endpush



@push('styles')
    @vite('resources/css/pages/market.css')
@endpush



@section('content')
<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="#" style="cursor: default;">Market</a></li> 
                                        <li class="breadcrumb-item active" aria-current="page"><a href="#">Agriculture</a></li>
                                    </ol>
            </nav>
        </div>
        <div class="col-md-15">
          <div class="block-back-link text-right">
            <a href="#" onclick="window.history.back();">Back</a>
          </div>
        </div>
      </div>
      <div class="py-2"></div>
    </div>
</section>

<section class="product-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
      <div class="box-konten-kiri">
        <h5>Market</h5>
        
<ul class="list-unstyled lefts_submenu_product">
		<li class="dropdown "><a href="{{ route('markets.beverage') }}">Beverage</a>
	</li>
		<li class="dropdown "><a href="{{ route('markets.healthcare') }}">Healthcare</a>
	</li>
		<li class="dropdown "><a href="{{ route('markets.household') }}">Household</a>
	</li>
		<li class="dropdown active"><a href="{{ route('markets.agriculture') }}">Agriculture</a>
	</li>
		<li class="dropdown "><a href="{{ route('markets.industrial') }}">Industrial</a>
	</li>
		<li class="dropdown "><a href="{{ route('markets.filtration') }}">Filtration</a>
	</li>
		<li class="dropdown "><a href="{{ route('markets.building_construction') }}">Building & Construction</a>
	</li>
	</ul>

<style>
	ul.lefts_submenu_product li ul.dropdown-menu li.active a{
		font-weight: 700;
		color: #000;
	}
</style>
        
      </div>
      </div>
      <div class="col-md-45 rights_cont_def">
        <h6>Markets</h6>
        <div class="clear clearfix"></div>
        <div class="py-1"></div>
        <div class="clear clearfix"></div>
        <h3>Agriculture</h3>
        <div class="row feature-data mb-0 mt-0">
          <div class="col-md-60">

<div class="featured_car_detail">
                <div id="carouselEx_gallery" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators d-none">
                    <li data-target="#carouselEx_gallery" data-slide-to="0" class="active"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                       <img class="img img-fluid w-100" src="https://suryasukses.com/images/category/266aa-ill-agriculture.jpg" alt="agriculture">
                    </div>
                  </div>
                </div>
            </div>

                                              </div>
        </div>

                <div class="row default-data">
                            <div class="col-md-20">
                    <div class="box-content">
                        <div class="image">
                            <img class="img img-fluid w-100"src="https://suryasukses.com/images/brand/90e27-greenhouse.jpg" alt="">
                            <a href="#">
                            </a>
                        </div>
                        <div class="title">
                            <p>Greenhouse Film</p>
                        </div>
                        <div class="subtitle">
                            <p>AMARI Nonwoven is used effectively to optimize the productivity of food crops, gardens and greenhouses. With AMARI Nonwoven protection, the need for pesticides and manual labor can be reduced.</p>                        </div>
                                                <div class="klik">
                        <a class="btn btn-danger" href="{{ route('contact') }}"><p>Inquire</p></a>
                        </div>
                                            </div>
                </div>
                            <div class="col-md-20">
                    <div class="box-content">
                        <div class="image">
                            <img class="img img-fluid w-100"src="https://suryasukses.com/images/brand/ae21b-munch-film.jpg" alt="">
                            <a href="#">
                            </a>
                        </div>
                        <div class="title">
                            <p>Mulch Film</p>
                        </div>
                        <div class="subtitle">
                            <p>Agriculture technology are now vast and way more advanced as time goes by. A field with plastic mulch film coverage will help plants grow protected and healthy.</p>                        </div>
                                                <div class="klik">
                        <a class="btn btn-danger" href="{{ route('contact') }}"><p>Inquire</p></a>
                        </div>
                                            </div>
                </div>
                            <div class="col-md-20">
                    <div class="box-content">
                        <div class="image">
                            <img class="img img-fluid w-100"src="https://suryasukses.com/images/brand/cf2da-fruit-protect.jpg" alt="">
                            <a href="#">
                            </a>
                        </div>
                        <div class="title">
                            <p>Fruit Protection</p>
                        </div>
                        <div class="subtitle">
                            <p>AMARI nonwoven can be used to Protect fruit without using agro chemicals; ideal for organic or bio-rational plants. It generates microclimate that encourages fruit growth and quality. In Banana Trees, it managed to speed up the harvest for up to 2 weeks</p>                        </div>
                                                <div class="klik">
                        <a class="btn btn-danger" href="{{ route('contact') }}"><p>Inquire</p></a>
                        </div>
                                            </div>
                </div>
                    </div>
        
      </div>
    </div>
  </div>
</section>



@endsection
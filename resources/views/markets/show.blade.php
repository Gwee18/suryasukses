@extends('layouts.app')

@section('title', $market->title ?? 'Market')

@push('early_styles')
    <link rel="stylesheet" href="{{ asset('asset/js/bootstrap-4.0.0/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
@endpush

@push('styles')
    @vite('resources/css/pages/market.css')
    <style>
        .market-description {
            font-size: 15px;
            color: #333;
            line-height: 1.6;
        }
        .whatsapp a {
            color: #28a745;
            font-weight: 600;
        }
    </style>
@endpush

@section('content')
<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)" style="cursor: default;">Market</a></li> 
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">{{ $market->title }}</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-15">
          <div class="block-back-link text-right">
            <a href="javascript:void(0)" onclick="window.history.back();">Back</a>
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
            @php
                $allMarkets = \App\Models\Market::orderBy('created_at', 'asc')->get();
            @endphp
            @foreach($allMarkets as $m)
                <li class="dropdown {{ request()->segment(2) == $m->slug ? 'active' : '' }}"><a href="{{ route('markets.show', $m->slug) }}">{{ $m->title }}</a></li>
            @endforeach
        </ul>

        <style>
            ul.lefts_submenu_product li.active a{
                font-weight: 700;
                color: #a61b20; /* Brand red color for active */
            }
        </style>
        
      </div>
      </div>
      <div class="col-md-45 rights_cont_def">
        <h6>{{ $market->subtitle ?? 'Our Markets' }}</h6>
        <div class="clear clearfix"></div>
        <div class="py-1"></div>
        <div class="clear clearfix"></div>
        <h3>{{ $market->title }}</h3>
        
        <div class="row feature-data mb-0 mt-0">
          <div class="col-md-60">
            @if(!empty($market->banner_image))
            <div class="featured_car_detail">
                <div id="carouselEx_gallery" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators d-none">
                    <li data-target="#carouselEx_gallery" data-slide-to="0" class="active"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                       <img class="img img-fluid w-100" src="{{ asset('assets/images/' . $market->banner_image) }}" alt="{{ $market->title }}">
                    </div>
                  </div>
                </div>
            </div>
            @endif
          </div>
        </div>

        @if(!empty($market->description))
        <div class="market-description mt-4 mb-4">
            {!! $market->description !!}
        </div>
        @endif
        
        

        <div class="row default-data mt-4">
            @if(!empty($market->cards) && is_array($market->cards))
                @foreach($market->cards as $card)
                    @if(!empty($card['title']))
                    <div class="col-md-20">
                        <div class="box-content">
                            @if(!empty($card['image']))
                            <div class="image">
                                <img class="img img-fluid w-100" src="{{ asset('assets/images/' . $card['image']) }}" alt="{{ $card['title'] }}">
                                <a href="#"></a>
                            </div>
                            @endif
                            <div class="title">
                                <p>{{ $card['title'] }}</p>
                            </div>
                            
                            @if($market->slug != 'household')
                            <div class="subtitle">
                                <p>{{ $card['subtitle'] ?? '' }}</p>
                            </div>
                            <div class="klik">
                                <a class="btn btn-danger" href="{{ route('contact') }}"><p>Inquire</p></a>
                            </div>
                            @else
                            <div class="klik mt-3">
                                <a class="btn btn-danger" style="font-size: 0.8rem; padding: 5px 10px;" href="{{ route('contact') }}">Download Product Catalogue</a>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif
                @endforeach
            @endif
        </div>
        
      </div>
    </div>
  </div>
</section>
@endsection
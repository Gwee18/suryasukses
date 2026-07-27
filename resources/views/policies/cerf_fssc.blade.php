@extends('layouts.app')

@section('title', 'Policies - FSSC 22000 Certification')

@push('styles')
    @vite(['resources/css/pages/about.css', 'resources/css/pages/policies.css'])
@endpush

@section('content')

    <section class="breadcrumb-det">
        <div class="prelative container">
            <div class="d-flex justify-content-between align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" style="cursor: default;">Policies</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#">FSSC 22000 Certification</a></li>
                    </ol>
                </nav>
                <div class="block-back-link text-right">
                    <a href="javascript:void(0);" onclick="window.history.back();">Back</a>
                </div>
            </div>
            <div class="py-2"></div>
        </div>
    </section>

    <section class="cerf-sec-1">
        <div class="prelative container">
            <div class="row">
                <div class="col-md-3">
                    <div class="box-konten-kiri">
                        <h5>Policies</h5>
                        <ul class="list-unstyled lefts_submenu_product">
                            <li class="dropdown"><a href="{{ route('policies.cerf_iso') }}">ISO 9001 Certification</a></li>
                            <li class="dropdown active"><a href="{{ route('policies.cerf_fssc') }}">FSSC 22000 Certification</a></li>
                            <li class="dropdown"><a href="{{ route('policies.quality') }}">Quality Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="box-content">
                        <h3 class="policy-title">FSSC 22000 Certification</h3>
                        <p class="policy-desc">The FSSC 22000 Scheme is managed by Foundation FSSC 22000 and governed by an independent board of shareholders which consists of representatives from several sectors in the food industry.</p>
                        
                        <div class="mt-4">
                            <a data-fancybox="gallery" href="https://suryasukses.com/images/static/19bfb46ad8sertfikat-fssc.jpg">
                                <img style="border: 1px solid #ccc; max-width: 100%; height: auto;" class="img img-fluid" src="https://suryasukses.com/images/static/.tmb/thumb_19bfb46ad8sertfikat-fssc_resize_800_2500.jpg" alt="FSSC 22000 Certificate">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endpush

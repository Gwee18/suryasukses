@extends('layouts.app')

@section('title', 'Policies - Quality Policy')

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
                        <li class="breadcrumb-item active" aria-current="page"><a href="#">Quality Policy</a></li>
                    </ol>
                </nav>
                <div class="block-back-link text-right">
                    <a href="javascript:void(0);" onclick="window.history.back();">Back</a>
                </div>
            </div>
            <div class="py-2"></div>
        </div>
    </section>

    <section class="about-location-sec-1">
        <div class="prelative container">
            <div class="row">
                <div class="col-md-3">
                    <div class="box-konten-kiri">
                        <h5>Policies</h5>
                        <ul class="list-unstyled lefts_submenu_product">
                            <li class="dropdown"><a href="{{ route('policies.cerf_iso') }}">ISO 9001 Certification</a></li>
                            <li class="dropdown"><a href="{{ route('policies.cerf_fssc') }}">FSSC 22000 Certification</a></li>
                            <li class="dropdown active"><a href="{{ route('policies.quality') }}">Quality Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="box-content">
                        <h3 class="policy-title">Quality is our strength</h3>
                        <div class="content">
                            <p class="policy-desc">To be a leader in providing, safe, high-quality, products and services; that always protect what’s important to our customers, employees, shareholders, neighbors, and suppliers. This is accomplished through responsible sourcing and utilization of resources focusing on innovation and sustainability.</p>
                            
                            <div class="content-inner-quality">
                                <h4>Our quality policies that we embrace as our culture:</h4>
                                <ul>
                                    <li>Provide safe, high-quality products, and services that meet customers’ expectations.</li>
                                    <li>Comply with applicable regulatory and customer requirements.</li>
                                    <li>Maintain system effectiveness through utilization of technology, teamwork, and skilled employees that are United, Focused, Agile, and Accountable.</li>
                                </ul>
                                <div class="clearfix clear"></div>
                            </div>
                            
                            <div class="content-inner-quality">
                                <h4>Our quality certifications: (Click to read more)</h4>
                                <ul>
                                    <li><a href="{{ route('policies.cerf_iso') }}">ISO 9001 Certification</a></li>
                                    <li><a href="{{ route('policies.cerf_fssc') }}">FSSC 22000 Certification</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

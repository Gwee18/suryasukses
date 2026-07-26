@extends('layouts.app')

@section('title', 'Contact Us')

@push('styles')
    @vite('resources/css/pages/contact.css')
@endpush

@section('content')

    <section class="contact-hero">
        <div class="contact-hero-overlay"></div>
        <div class="container">
            <p class="contact-hero-eyebrow">Contact Us</p>
            <h1 class="contact-hero-title">We're at your service</h1>
        </div>
    </section>

    <nav aria-label="breadcrumb" class="contact-breadcrumb">
        <div class="container d-flex justify-content-between align-items-center">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('contact') }}">Contact Us</a></li>
            </ol>
            <a href="javascript:history.back()" class="contact-back-link">Back</a>
        </div>
    </nav>

    @php
        $offices = [
            [
                'name' => 'Suryasukses Group Surabaya',
                'phone' => '031 5030450 / 99603700',
                'address' => 'Jl. Kertajaya 109 Surabaya 60286 - Indonesia<br>Jl. Raya Sedati 97 Sidoarjo - Indonesia',
                'map' => 'https://goo.gl/maps/RmAtJontTNyMtMuZ6',
            ],
            [
                'name' => 'Suryasukses Group Jakarta',
                'phone' => '021 386 1333',
                'address' => 'Jakarta<br>Jl. Cideng Timur No. 70E dan F<br>Jakarta Pusat - Indonesia',
                'map' => 'https://maps.app.goo.gl/zoNV8ckCL8zGQuDf6',
            ],
            [
                'name' => 'Suryasukses Group Bekasi',
                'phone' => '+62 821-6488-8806',
                'address' => 'Kawasan Industri MM2100<br>Jl. Selayar Blk. B3 No.1, Mekarwangi Kec. Cikarang Bar, Bekasi, Jawa Barat 17530',
                'map' => 'https://goo.gl/maps/K9uRD4tDpK2Wyphd7',
            ],
        ];
    @endphp

    <section class="contact-intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-flex">
                    <div class="contact-sidebar">
                        <span class="contact-intro-label">Contact Us</span>
                    </div>
                </div>

                <div class="col-lg-9">
                    <h2 class="contact-intro-title">We're here to help you</h2>
                    <p class="contact-intro-text">
                        We provide a variety of resources to assist our customers and partners in configuring, designing, enhancing and upgrading products. Customers will receive support services and product consultancy support, technical assistance and product sampling.
                    </p>
                    <p class="contact-intro-note">Please contact our help-line at these numbers</p>

                    <div class="row g-4 contact-offices">
                        @foreach ($offices as $office)
                            <div class="col-md-6">
                                <div class="contact-office-card">
                                    <h3 class="contact-office-name">{{ $office['name'] }}</h3>
                                    <p class="contact-office-phone">{{ $office['phone'] }}</p>
                                    <p class="contact-office-address">{!! $office['address'] !!}</p>
                                    <a href="{{ $office['map'] }}" target="_blank" rel="noopener" class="contact-office-map">
                                        Click here to view on Google Map
                                        <svg viewBox="0 0 24 24"><path d="M12 2C7.86 2 4.5 5.36 4.5 9.5c0 5.5 7.5 12.5 7.5 12.5s7.5-7 7.5-12.5C19.5 5.36 16.14 2 12 2zm0 10.25a2.75 2.75 0 1 1 0-5.5 2.75 2.75 0 0 1 0 5.5z"/></svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="contact-support-block">
                        <h3 class="contact-support-title">PIC Kantor Surabaya</h3>
                        <p class="contact-support-text">Phyllia (081 651 1229)</p>
                        <p class="contact-support-text">Livia &amp; Ayu (0882 2616 3037)</p>
                        <p class="contact-support-email">
                            Email your inquiry at <a href="mailto:cs@suryasukses.com">cs@suryasukses.com</a>
                        </p>
                        <p class="contact-whatsapp-line">
                            <span class="contact-whatsapp-label">Whatsapp</span>
                            <a href="https://wa.me/62816511229" target="_blank" rel="noopener" class="contact-whatsapp-text">
                                <img src="/assets/images/logo/logo-wa.png" alt="WhatsApp" class="contact-whatsapp-icon">
                                +62 81 651 1229
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
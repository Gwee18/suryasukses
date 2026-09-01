@extends('layouts.app')

@section('title', 'Contact Us')

@push('styles')
    @vite('resources/css/pages/contact.css')
@endpush

@section('content')

    @php
        $content = optional($page)->content ?? [];

        $heroEyebrow = $content['hero_eyebrow'] ?? 'Contact Us';
        $heroTitle = $content['hero_title'] ?? "We're at your service";
        $introTitle = $content['intro_title'] ?? "We're here to help you";
        $introText = $content['intro_text'] ?? 'We provide a variety of resources to assist our customers and partners in configuring, designing, enhancing and upgrading products. Customers will receive support services and product consultancy support, technical assistance and product sampling.';
        $introNote = $content['intro_note'] ?? 'Please contact our help-line at these numbers';

                $offices = $content['offices'] ?? [
            [
                'name' => 'Suryasukses Group Surabaya',
                'phones' => ['031 5030450 / 99603700'],
                'address_lines' => ['Jl. Kertajaya 109 Surabaya 60286 - Indonesia', 'Jl. Raya Sedati 97 Sidoarjo - Indonesia'],
                'map' => 'https://goo.gl/maps/RmAtJontTNyMtMuZ6',
            ],
            [
                'name' => 'Suryasukses Group Jakarta',
                'phones' => ['021 386 1333'],
                'address_lines' => ['Jakarta', 'Jl. Cideng Timur No. 70E dan F', 'Jakarta Pusat - Indonesia'],
                'map' => 'https://maps.app.goo.gl/zoNV8ckCL8zGQuDf6',
            ],
            [
                'name' => 'Suryasukses Group Bekasi',
                'phones' => ['+62 821-6488-8806'],
                'address_lines' => ['Kawasan Industri MM2100', 'Jl. Selayar Blk. B3 No.1, Mekarwangi Kec. Cikarang Bar, Bekasi, Jawa Barat 17530'],
                'map' => 'https://goo.gl/maps/K9uRD4tDpK2Wyphd7',
            ],
        ];

        $supportTitle = $content['support_title'] ?? 'PIC Kantor Surabaya';
        $pics = $content['pics'] ?? ['Phyllia (081 651 1229)', 'Livia & Ayu (0882 2616 3037)'];
        $supportEmail = $content['support_email'] ?? 'cs@suryasukses.com';
        $whatsappLabel = $content['whatsapp_label'] ?? 'Whatsapp';
        $whatsappDisplay = $content['whatsapp_display'] ?? '+62 81 651 1229';
        $whatsappLink = $content['whatsapp_link'] ?? 'https://wa.me/62816511229';
    @endphp

    <section class="contact-hero">
        <div class="contact-hero-overlay"></div>
        <div class="container">
            <p class="contact-hero-eyebrow">{{ $heroEyebrow }}</p>
            <h1 class="contact-hero-title">{{ $heroTitle }}</h1>
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

    <section class="contact-intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-flex">
                    <div class="contact-sidebar">
                        <span class="contact-intro-label">Contact Us</span>
                    </div>
                </div>

                <div class="col-lg-9">
                    <h2 class="contact-intro-title">{{ $introTitle }}</h2>
                    <p class="contact-intro-text">{{ $introText }}</p>
                    <p class="contact-intro-note">{{ $introNote }}</p>

                    <div class="row g-4 contact-offices">
                        @foreach ($offices as $office)
                            <div class="col-md-6">
                                <div class="contact-office-card">
                                    <h3 class="contact-office-name">{{ $office['name'] ?? '' }}</h3>

                                    @if(!empty(array_filter($office['phones'] ?? [])))
                                        <p class="contact-office-phone">
                                            {{ implode(' / ', array_filter($office['phones'])) }}
                                        </p>
                                    @endif

                                    @if(!empty(array_filter($office['address_lines'] ?? [])))
                                        <p class="contact-office-address">
                                            {!! implode('<br>', array_map('e', array_filter($office['address_lines']))) !!}
                                        </p>
                                    @endif

                                    @if(!empty($office['map']))
                                        <a href="{{ $office['map'] }}" target="_blank" rel="noopener" class="contact-office-map">
                                            Click here to view on Google Map
                                            <svg viewBox="0 0 24 24"><path d="M12 2C7.86 2 4.5 5.36 4.5 9.5c0 5.5 7.5 12.5 7.5 12.5s7.5-7 7.5-12.5C19.5 5.36 16.14 2 12 2zm0 10.25a2.75 2.75 0 1 1 0-5.5 2.75 2.75 0 0 1 0 5.5z"/></svg>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="contact-support-block">
                        @if(!empty($supportTitle))
                            <h3 class="contact-support-title">{{ $supportTitle }}</h3>
                        @endif

                        @foreach ($pics as $pic)
                            @if(trim($pic) !== '')
                                <p class="contact-support-text">{{ $pic }}</p>
                            @endif
                        @endforeach

                        @if(!empty($supportEmail))
                            <p class="contact-support-email">
                                Email your inquiry at <a href="mailto:{{ $supportEmail }}">{{ $supportEmail }}</a>
                            </p>
                        @endif

                        @if(!empty($whatsappDisplay))
                            <p class="contact-whatsapp-line">
                                <span class="contact-whatsapp-label">{{ $whatsappLabel }}</span>
                                <a href="{{ $whatsappLink }}" target="_blank" rel="noopener" class="contact-whatsapp-text">
                                    <img src="/assets/images/logo/logo-wa.png" alt="WhatsApp" class="contact-whatsapp-icon">
                                    {{ $whatsappDisplay }}
                                </a>
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
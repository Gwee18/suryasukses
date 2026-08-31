@extends('layouts.app')

@section('title', 'Suryasukses Studio - Solutions')

@push('styles')
    @vite('resources/css/pages/solutions.css')
@endpush

@section('content')

<div class="studio-page">

    <section class="studio-breadcrumb">
        <div class="studio-container">
            <div class="studio-breadcrumb__layout">
                <nav aria-label="breadcrumb">
                    <ul class="studio-breadcrumb__list">
                        <li class="studio-breadcrumb__item"><a href="{{ route('home') }}" class="studio-breadcrumb__link">Home</a></li>
                        <li class="studio-breadcrumb__item"><a href="javascript:void(0)" class="studio-breadcrumb__link studio-breadcrumb__link--disabled">Solution</a></li>
                        <li class="studio-breadcrumb__item studio-breadcrumb__item--active"><span class="studio-breadcrumb__link">Suryasukses Studio</span></li>
                    </ul>
                </nav>
                <div class="studio-breadcrumb__back">
                    <a href="javascript:history.back()" class="studio-breadcrumb__back-link">Back</a>
                </div>
            </div>
        </div>
    </section>

    <section class="studio-section">
        <div class="studio-container">
            <div class="studio-wrapper">
                
                <aside class="studio-sidebar">
                    <div class="studio-sidebar__box">
                        <h5 class="studio-sidebar__title">Solutions</h5>
                        <ul class="studio-sidebar__nav">
                            <li class="studio-sidebar__nav-item studio-sidebar__nav-item--active"><a href="{{ route('solutions') }}" class="studio-sidebar__nav-link">Suryasukses Studio</a></li>
                            <li class="studio-sidebar__nav-item"><a href="{{ route('capabilities') }}" class="studio-sidebar__nav-link">Capabilities</a></li>
                        </ul>
                    </div>
                </aside>
                
                <main class="studio-body">
                    <h4 class="studio-subtitle">Your partner in design</h4>
                    <h3 class="studio-title">Suryasukses Studio</h3>
                    
                    <div class="studio-content">
                        <div class="studio-banner">
                            <img src="{{ asset('assets/images/' . ($page->content['image_1'] ?? 'solutions/aa68c28011sbl-sap (1) (1).jpg')) }}" alt="{{ $page->title ?? 'Suryasukses Studio' }}" class="studio-image">
                        </div>

                        <div class="studio-description">
                            {!! nl2br(e($page->content['main_text'] ?? "Whether you’re looking for a specific cap or or designing a revolutionary bottle/cup shape, our teams will work together to develop a product your consumers are sure to enjoy, guaranteed by our many years of experience and well-established networks around the world.\n\nOur decoration options includes:\n- Custom design products\n- Offset printing on Cup\n- Emboss cap\n- Emboss bottle\n- Print logo on Houseware products\n\nContact us and discuss your project with us now.")) !!}
                        </div>
                        
                        <div class="whatsapp pt-2">
                            <h5>Whatsapp <a target="_blank" href="{{ $page->content['whatsapp_link'] ?? 'http://wa.me/6285777303030' }}"><img src="{{ asset('assets/images/WA-Logo-copy-2.png') }}" alt=""> {{ $page->content['whatsapp'] ?? '+62 857 7730 3030' }}</a></h5>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
    </section>

</div>

@endsection

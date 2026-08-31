@extends('layouts.app')

@section('title', 'Capabilities - Solutions')

@push('styles')
    @vite('resources/css/pages/solutions.css')
@endpush

@section('content')
<div class="solution-capabilities">
    <div class="solution-capabilities__breadcrumb-wrapper">
        <div class="solution-capabilities__container">
            <div class="solution-capabilities__breadcrumb-layout">
                <nav class="solution-capabilities__breadcrumb" aria-label="breadcrumb">
                    <ul class="solution-capabilities__breadcrumb-list">
                        <li class="solution-capabilities__breadcrumb-item"><a href="{{ route('home') }}" class="solution-capabilities__breadcrumb-link">Home</a></li>
                        <li class="solution-capabilities__breadcrumb-item"><a href="#" class="solution-capabilities__breadcrumb-link solution-capabilities__breadcrumb-link--disabled">Solution</a></li>
                        <li class="solution-capabilities__breadcrumb-item solution-capabilities__breadcrumb-item--active"><span class="solution-capabilities__breadcrumb-link">Capabilities</span></li>
                    </ul>
                </nav>
                <div class="solution-capabilities__back">
                    <a href="javascript:history.back()" class="solution-capabilities__back-link">Back</a>
                </div>
            </div>
        </div>
    </div>

    <div class="solution-capabilities__section">
        <div class="solution-capabilities__container">
            <div class="solution-capabilities__layout">
                
                <aside class="solution-capabilities__sidebar">
                    <div class="solution-capabilities__sidebar-box">
                        <h5 class="solution-capabilities__sidebar-title">Solutions</h5>
                        <ul class="solution-capabilities__nav">
                            <li class="solution-capabilities__nav-item">
                                <a href="{{ route('solutions') }}" class="solution-capabilities__nav-link">Suryasukses Studio</a>
                            </li>
                            <li class="solution-capabilities__nav-item solution-capabilities__nav-item--active">
                                <a href="{{ route('capabilities') }}" class="solution-capabilities__nav-link">Capabilities</a>
                            </li>
                        </ul>
                    </div>
                </aside>

                <main class="solution-capabilities__main">
                    <h4 class="solution-capabilities__subtitle">What we can do for you</h4>
                    <h3 class="solution-capabilities__title">Capabilities</h3>

                    <div class="solution-capabilities__grid">
                        
                        @for($i = 1; $i <= 7; $i++)
                            @if(isset($page->content['cap_title_'.$i]) && $page->content['cap_title_'.$i] != '')
                            <article class="solution-capabilities__card">
                                <div class="solution-capabilities__image-wrapper">
                                    <img src="{{ asset('assets/images/' . ($page->content['cap_img_'.$i] ?? '')) }}" alt="{{ $page->content['cap_title_'.$i] }}" class="solution-capabilities__image">
                                </div>
                                <div class="solution-capabilities__content">
                                    <h5 class="solution-capabilities__card-title">{{ $page->content['cap_title_'.$i] }}</h5>
                                    <p class="solution-capabilities__card-text">
                                        {!! nl2br(e($page->content['cap_desc_'.$i] ?? '')) !!}
                                    </p>
                                </div>
                            </article>
                            @endif
                        @endfor
                    </div>

                    <div class="solution-capabilities__contact">
                        <div class="solution-capabilities__email">
                            <p>Email your inquiry at <a href="mailto:cs@suryasukses.com" class="solution-capabilities__email-link">cs@suryasukses.com</a></p>
                        </div>
                        <div class="whatsapp pt-2">
                            <h5>Whatsapp <a target="_blank" href="{{ $page->content['whatsapp_link'] ?? 'http://wa.me/6285777303030' }}"><img src="{{ asset('assets/images/WA-Logo-copy-2.png') }}" alt=""> {{ $page->content['whatsapp'] ?? '+62 857 7730 3030' }}</a></h5>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection

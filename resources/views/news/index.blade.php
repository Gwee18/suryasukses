@extends('layouts.app')

@section('title', 'News & Articles | Surya Sukses')

@push('styles')
    @vite('resources/css/pages/news.css')
@endpush

@section('content')

<section class="breadcrumb-det">
    <div class="container prelative">
        <div class="row align-items-center">
            <div class="col-md-9 content-align-logo">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('news') }}">News & Articles</a></li>
                    </ol>
                </nav>
            </div>
            
            <div class="col-md-3">
                <div class="block-back-link text-md-end text-start">
                    <a href="javascript:history.back();">Back</a>
                </div>
            </div>
        </div>
        <div class="py-2"></div>
    </div>
</section>

<section class="product-sec-1 mb-5">
    <div class="container prelative">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 content-align-logo">
                <div class="box-konten-kiri">
                    <h5>News & Articles</h5>        
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 rights_cont_def">
                <div class="clear clearfix"></div>

                <div class="row default-data">
                    @forelse($posts as $post)
                    <div class="col-md-4">
                        <div class="box-content">
                            <div class="image">
                                <a href="{{ route('news.detail', $post->slug) }}">
                                    @if($post->cover_image)
                                        <img class="img img-fluid w-100" src="{{ asset('assets/images/news/' . $post->cover_image) }}" alt="{{ $post->title }}">
                                    @else
                                        <div style="background:#eee; height:200px; display:flex; align-items:center; justify-content:center; color:#999;">No Image</div>
                                    @endif
                                </a>
                            </div>
                            <div class="title">
                                <p>{{ $post->title }}</p>
                            </div>
                            <div class="klik">
                                <a href="{{ route('news.detail', $post->slug) }}"><p>Read More</p></a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">Belum ada berita yang diterbitkan.</p>
                    </div>
                    @endforelse
                </div>
                
                @if($posts->hasPages())
                <div class="row pt-5 mt-4">
                    <div class="col-12">
                        {{ $posts->links('vendor.pagination.custom') }}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
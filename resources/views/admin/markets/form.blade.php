@extends('admin.layout')

@section('title', isset($market) ? 'Edit Market' : 'Tambah Market')
@section('header', isset($market) ? 'Edit Market' : 'Tambah Market')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h6 class="m-0 font-weight-bold text-primary">{{ isset($market) ? 'Edit Data Market' : 'Form Tambah Market Baru' }}</h6>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ isset($market) ? route('admin.markets.update', $market->id) : route('admin.markets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($market))
                @method('PUT')
            @endif

            <div class="mb-3">
                @include('admin.markets._market_image_upload', ['name' => 'banner_image', 'label' => 'Gambar Banner Atas', 'default' => $market->banner_image ?? ''])
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Judul Halaman <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="title" value="{{ old('title', $market->title ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Sub-judul <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="subtitle" value="{{ old('subtitle', $market->subtitle ?? 'Our Markets') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Deskripsi Utama <span class="text-muted">(Opsional)</span></label>
                <textarea class="form-control summernote" name="description" rows="5">{{ old('description', $market->description ?? '') }}</textarea>
            </div>

            <h5 class="fw-bold mt-5 mb-3 border-bottom pb-2">Daftar Produk/Kategori Market</h5>
            <div class="alert alert-info py-2" style="font-size: 0.85rem;">
                Anda dapat mengisi hingga 8 kartu produk. Kosongkan "Judul Kartu" jika kartu tersebut tidak ingin ditampilkan di halaman.
            </div>
            
            <div class="accordion mb-4" id="marketCardsAccordion">
                @for($i = 0; $i < 8; $i++)
                    @php
                        $card = isset($market) && isset($market->cards[$i]) ? $market->cards[$i] : null;
                        $isOpen = $i === 0 || !empty($card['title']);
                    @endphp
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingCard{{ $i }}">
                            <button class="accordion-button {{ $isOpen ? '' : 'collapsed' }} fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCard{{ $i }}" aria-expanded="{{ $isOpen ? 'true' : 'false' }}" aria-controls="collapseCard{{ $i }}">
                                <i class="fas fa-box me-2"></i> {{ $i + 1 }}. {{ $card['title'] ?? 'Kartu Baru' }}
                            </button>
                        </h2>
                        <div id="collapseCard{{ $i }}" class="accordion-collapse collapse {{ $isOpen ? 'show' : '' }}" aria-labelledby="headingCard{{ $i }}" data-bs-parent="#marketCardsAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        @include('admin.markets._market_image_upload', ['name' => "cards[$i][image]", 'label' => 'Gambar Kartu', 'default' => $card['image'] ?? ''])
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Judul Kartu</label>
                                            <input type="text" class="form-control" name="cards[{{ $i }}][title]" value="{{ old("cards.$i.title", $card['title'] ?? '') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Deskripsi Singkat</label>
                                            <textarea class="form-control" name="cards[{{ $i }}][subtitle]" rows="3">{{ old("cards.$i.subtitle", $card['subtitle'] ?? '') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="text-end">
                <a href="{{ route('admin.markets.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-danger"><i class="fas fa-save me-1"></i> Simpan Market</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endpush
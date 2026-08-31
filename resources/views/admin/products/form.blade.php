@extends('admin.layout')

@section('title', isset($product) ? 'Edit Produk' : 'Tambah Produk')
@section('header', isset($product) ? 'Edit Produk' : 'Tambah Produk Baru')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ isset($product) ? route('admin.products.update', $product->id) : route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Produk *</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $product->title ?? '') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Kategori Produk *</label>
                        <select name="product_category_id" class="form-select @error('product_category_id') is-invalid @enderror" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ old('product_category_id', $product->product_category_id ?? '') == $cat->id ? 'selected' : '' }}>{{ $cat->title }}</option>
                            @endforeach
                        </select>
                        @error('product_category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi Singkat (Card Text)</label>
                        <textarea name="card_text" class="form-control @error('card_text') is-invalid @enderror" rows="2" maxlength="255">{{ old('card_text', $product->card_text ?? '') }}</textarea>
                        <div class="form-text">Maksimal 255 karakter. Ditampilkan pada halaman daftar produk.</div>
                        @error('card_text')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi/Konten Produk Lengkap *</label>
                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="15" required>{{ old('content', $product->content ?? '') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Anda bisa menggunakan tag HTML untuk memformat teks dan gambar (seperti &lt;p&gt;, &lt;strong&gt;, dll).</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Gambar Carousel Produk</label>
                                
                                @if(isset($product) && is_array($product->images) && count($product->images) > 0)
                                    <div class="mb-3 d-flex flex-wrap gap-2">
                                        @foreach($product->images as $index => $img)
                                            <div class="position-relative">
                                                <img src="{{ asset('assets/images/product/' . $img) }}" alt="Current Cover" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
                                                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 py-0 px-1" onclick="if(confirm('Hapus gambar ini?')) document.getElementById('delete-img-{{ $index }}').submit();" style="transform: translate(30%, -30%);">&times;</button>
                                            </div>
                                        @endforeach
                                    </div>
                                    <small class="text-muted d-block mb-2">Pilih gambar baru akan **menggantikan** gambar-gambar di atas secara keseluruhan.</small>
                                @endif

                                <input type="file" name="images[]" class="form-control @error('images.*') is-invalid @enderror" accept="image/*" multiple>
                                <div class="form-text">Anda dapat memilih lebih dari satu gambar sekaligus untuk carousel.</div>
                                @error('images.*')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <hr>
                            <button type="submit" class="btn btn-danger w-100 mb-2">
                                {{ isset($product) ? 'Update Produk' : 'Simpan Produk' }}
                            </button>
                            <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary w-100">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
        <!-- Hidden forms for deleting images individually -->
        @if(isset($product) && is_array($product->images))
            @foreach($product->images as $index => $img)
                <form id="delete-img-{{ $index }}" action="{{ route('admin.products.deleteImage', [$product->id, $index]) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            @endforeach
        @endif
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<style>
    /* Fix Summernote fullscreen transparent background and height bug */
    .note-editor.note-frame.fullscreen {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100vw !important;
        height: 100vh !important;
        background: #ffffff !important;
        z-index: 9999 !important;
    }
    .note-editor.note-frame.fullscreen .note-editable {
        height: calc(100vh - 45px) !important;
        background: #ffffff !important;
        max-height: none !important;
    }
    
    /* Berikan jarak (margin) default pada gambar di dalam editor */
    .note-editable img {
        margin: 10px;
        max-width: 100%;
        height: auto;
    }
</style>
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('textarea[name="content"]').summernote({
            placeholder: 'Tulis deksripsi/konten produk di sini...',
            tabsize: 2,
            height: 400,
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

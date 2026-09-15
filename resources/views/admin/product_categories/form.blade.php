@extends('admin.layout')

@section('title', isset($productCategory) ? 'Edit Kategori Produk' : 'Tambah Kategori Produk')
@section('header', isset($productCategory) ? 'Edit Kategori Produk' : 'Tambah Kategori Produk Baru')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ isset($productCategory) ? route('admin.product-categories.update', $productCategory->id) : route('admin.product-categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($productCategory))
                @method('PUT')
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Kategori *</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $productCategory->title ?? '') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Intro (Opsional)</label>
                        <textarea name="intro" class="form-control @error('intro') is-invalid @enderror" rows="4">{{ old('intro', $productCategory->intro ?? '') }}</textarea>
                        @error('intro')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Teks Tombol Katalog (Opsional)</label>
                        <input type="text" name="catalog_text" class="form-control @error('catalog_text') is-invalid @enderror" value="{{ old('catalog_text', $productCategory->catalog_text ?? '') }}">
                        @error('catalog_text')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Link Katalog (Opsional)</label>
                        <input type="text" name="catalog_href" class="form-control @error('catalog_href') is-invalid @enderror" value="{{ old('catalog_href', $productCategory->catalog_href ?? '') }}">
                        @error('catalog_href')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Gambar Cover Carousel</label>
                                
                                @if(isset($productCategory) && is_array($productCategory->images) && count($productCategory->images) > 0)
                                    <div class="mb-3 d-flex flex-wrap gap-2">
                                        @foreach($productCategory->images as $img)
                                            <div class="position-relative">
                                                <img src="{{ asset('assets/images/product/' . $img) }}" alt="Current Image" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
                                            </div>
                                        @endforeach
                                    </div>
                                    <small class="text-muted d-block mb-2">Pilih gambar baru akan menggantikan gambar-gambar di atas.</small>
                                @endif

                                <input type="file" name="images[]" class="form-control @error('images.*') is-invalid @enderror" accept="image/*" multiple>
                                <div class="form-text">Anda dapat memilih lebih dari satu gambar (Tahan Ctrl/Cmd saat memilih file).</div>
                                @error('images.*')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <hr>
                            <button type="submit" class="btn btn-danger w-100 mb-2">
                                {{ isset($productCategory) ? 'Update Kategori' : 'Simpan Kategori' }}
                            </button>
                            <a href="{{ route('admin.product-categories.index') }}" class="btn btn-outline-secondary w-100">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

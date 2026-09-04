@extends('admin.layout')

@section('title', isset($capability) ? 'Edit Kapabilitas' : 'Tambah Kapabilitas')
@section('header', isset($capability) ? 'Edit Kapabilitas' : 'Tambah Kapabilitas Baru')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold">{{ isset($capability) ? 'Edit: ' . $capability->title : 'Form Tambah Kapabilitas' }}</h5>
    </div>
    <div class="card-body">
        <form action="{{ isset($capability) ? route('admin.capabilities.update', $capability->id) : route('admin.capabilities.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($capability))
                @method('PUT')
            @endif
            
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Judul Kapabilitas <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $capability->title ?? '') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold">Deskripsi <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description', $capability->description ?? '') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="sort_order" class="form-label fw-bold">Urutan Tampil <span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('sort_order') is-invalid @enderror" id="sort_order" name="sort_order" value="{{ old('sort_order', $capability->sort_order ?? 0) }}" required>
                        <div class="form-text">Angka lebih kecil akan tampil lebih dulu (0, 1, 2, ...).</div>
                        @error('sort_order')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3 p-3 border rounded bg-light">
                        <label class="form-label fw-bold">Gambar Kapabilitas</label>
                        
                        @if(isset($capability) && $capability->image)
                            <div class="mb-2">
                                <label class="d-block text-muted small mb-1">Gambar Saat Ini:</label>
                                <img src="{{ asset('assets/images/' . $capability->image) }}" class="img-fluid rounded border mb-2" alt="Current Image">
                            </div>
                        @endif
                        
                        <input type="file" class="form-control @error('image_file') is-invalid @enderror" id="image_file" name="image_file" accept="image/*">
                        <div class="form-text">Format: JPG, PNG, GIF. Max: 2MB. @if(isset($capability)) Biarkan kosong jika tidak ingin mengubah gambar. @endif</div>
                        @error('image_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mt-4 border-top pt-3">
                <button type="submit" class="btn btn-primary px-4">{{ isset($capability) ? 'Simpan Perubahan' : 'Tambah Kapabilitas' }}</button>
                <a href="{{ route('admin.capabilities.index') }}" class="btn btn-secondary px-4 ms-2">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection

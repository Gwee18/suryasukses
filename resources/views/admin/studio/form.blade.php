@extends('admin.layout')

@section('title', 'Suryasukses Studio Settings')
@section('header', 'Pengaturan Suryasukses Studio')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold">Pengaturan Halaman Suryasukses Studio</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.studio.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="main_text" class="form-label fw-bold">Teks Deskripsi Utama <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('main_text') is-invalid @enderror" id="main_text" name="main_text" rows="10" required>{{ old('main_text', $studio->main_text ?? '') }}</textarea>
                        @error('main_text')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="whatsapp" class="form-label fw-bold">Nomor Whatsapp (Tampilan) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $studio->whatsapp ?? '+62 857 7730 3030') }}" required>
                            @error('whatsapp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="whatsapp_link" class="form-label fw-bold">Link Whatsapp (URL) <span class="text-danger">*</span></label>
                            <input type="url" class="form-control @error('whatsapp_link') is-invalid @enderror" id="whatsapp_link" name="whatsapp_link" value="{{ old('whatsapp_link', $studio->whatsapp_link ?? 'http://wa.me/6285777303030') }}" required>
                            @error('whatsapp_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3 p-3 border rounded bg-light">
                        <label class="form-label fw-bold">Gambar Hero (Banner)</label>
                        
                        @if($studio->hero_image)
                            <div class="mb-2">
                                <label class="d-block text-muted small mb-1">Gambar Saat Ini:</label>
                                <img src="{{ asset('assets/images/' . $studio->hero_image) }}" class="img-fluid rounded border mb-2" alt="Current Image">
                            </div>
                        @endif
                        
                        <input type="file" class="form-control @error('hero_image_file') is-invalid @enderror" id="hero_image_file" name="hero_image_file" accept="image/*">
                        <div class="form-text">Format: JPG, PNG, GIF. Max: 2MB. Biarkan kosong jika tidak ingin mengubah gambar.</div>
                        @error('hero_image_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mt-4 border-top pt-3">
                <button type="submit" class="btn btn-primary px-4">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection

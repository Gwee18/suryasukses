@extends('admin.layout')

@section('title', isset($post) ? 'Edit Berita' : 'Tambah Berita')
@section('header', isset($post) ? 'Edit Berita' : 'Tambah Berita Baru')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ isset($post) ? route('admin.posts.update', $post->id) : route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($post))
                @method('PUT')
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Berita *</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title ?? '') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Isi Berita *</label>
                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="15" required>{{ old('content', $post->content ?? '') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Anda bisa menggunakan tag HTML untuk memformat tulisan (seperti &lt;p&gt;, &lt;strong&gt;, dll).</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tanggal Publikasi</label>
                                <input type="date" name="published_at" class="form-control" value="{{ old('published_at', isset($post) && $post->published_at ? $post->published_at->format('Y-m-d') : date('Y-m-d')) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Gambar Cover</label>
                                @if(isset($post) && $post->cover_image)
                                    <div class="mb-2">
                                        <img src="{{ asset('assets/images/news/' . $post->cover_image) }}" alt="Current Cover" class="img-thumbnail" style="max-height: 150px;">
                                    </div>
                                    <small class="text-muted d-block mb-2">Pilih gambar baru jika ingin mengganti</small>
                                @endif
                                <input type="file" name="cover_image" class="form-control @error('cover_image') is-invalid @enderror" accept="image/*">
                                @error('cover_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <hr>
                            <button type="submit" class="btn btn-danger w-100 mb-2">
                                {{ isset($post) ? 'Update Berita' : 'Simpan Berita' }}
                            </button>
                            <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary w-100">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('textarea[name="content"]').summernote({
            placeholder: 'Tulis isi berita di sini...',
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

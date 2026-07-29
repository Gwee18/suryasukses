@extends('admin.layout')

@section('title', 'Kelola Berita')
@section('header', 'Kelola Berita')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <h5 class="m-0 font-weight-bold">Daftar Berita</h5>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-danger btn-sm">
            + Tambah Berita Baru
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="50">No</th>
                        <th width="100">Cover</th>
                        <th>Judul</th>
                        <th width="150">Tanggal Publish</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $index => $post)
                    <tr>
                        <td>{{ $posts->firstItem() + $index }}</td>
                        <td>
                            @if($post->cover_image)
                                <img src="{{ asset('assets/images/news/' . $post->cover_image) }}" alt="Cover" style="width: 80px; height: 50px; object-fit: cover;" class="rounded">
                            @else
                                <span class="text-muted small">No Image</span>
                            @endif
                        </td>
                        <td>
                            <strong>{{ $post->title }}</strong>
                            <div class="text-muted small">Slug: {{ $post->slug }}</div>
                        </td>
                        <td>{{ $post->published_at ? $post->published_at->format('d M Y') : 'Draft' }}</td>
                        <td>
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">Belum ada berita.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-3">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection

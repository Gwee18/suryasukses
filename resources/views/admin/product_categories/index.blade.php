@extends('admin.layout')

@section('title', 'Kelola Kategori Produk')
@section('header', 'Kelola Kategori Produk')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <div>
            <h5 class="m-0 font-weight-bold">Daftar Kategori</h5>
            <small class="text-muted">Menampilkan {{ $categories->firstItem() ?? 0 }} - {{ $categories->lastItem() ?? 0 }} dari total {{ $categories->total() }} kategori</small>
        </div>
        <div class="d-flex gap-2">
            <form action="{{ route('admin.product-categories.index') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control form-control-sm me-2" placeholder="Cari judul..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-sm btn-outline-secondary">Cari</button>
            </form>
            <a href="{{ route('admin.product-categories.create') }}" class="btn btn-danger btn-sm text-nowrap">
                + Tambah Kategori
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="50">No</th>
                        <th>Judul</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $index => $category)
                    <tr>
                        <td>{{ $categories->firstItem() + $index }}</td>
                        <td>
                            <strong>{{ $category->title }}</strong>
                            <div class="text-muted small">Slug: {{ $category->slug }}</div>
                        </td>
                        <td>
                            <a href="{{ route('admin.product-categories.edit', $category->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.product-categories.destroy', $category->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center py-4">Belum ada kategori.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-3">
            {{ $categories->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection

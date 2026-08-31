@extends('admin.layout')

@section('title', 'Kelola Produk')
@section('header', 'Kelola Produk')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <div>
            <h5 class="m-0 font-weight-bold">Daftar Produk</h5>
            <small class="text-muted">Menampilkan {{ $products->firstItem() ?? 0 }} - {{ $products->lastItem() ?? 0 }} dari total {{ $products->total() }} produk</small>
        </div>
        <div class="d-flex gap-2">
            <form action="{{ route('admin.products.index') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control form-control-sm me-2" placeholder="Cari judul..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-sm btn-outline-secondary">Cari</button>
            </form>
            <a href="{{ route('admin.products.create') }}" class="btn btn-danger btn-sm text-nowrap">
                + Tambah Produk
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="50">No</th>
                        <th width="100">Cover</th>
                        <th>Judul & Kategori</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $index => $product)
                    <tr>
                        <td>{{ $products->firstItem() + $index }}</td>
                        <td>
                            @if(is_array($product->images) && count($product->images) > 0)
                                <img src="{{ asset('assets/images/product/' . $product->images[0]) }}" alt="Cover" style="width: 80px; height: 50px; object-fit: cover;" class="rounded">
                            @else
                                <span class="text-muted small">No Image</span>
                            @endif
                        </td>
                        <td>
                            <strong>{{ $product->title }}</strong>
                            <div class="text-muted small">Kategori: {{ $product->category->title ?? 'Tidak Ada' }}</div>
                        </td>
                        <td>
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-4">Belum ada produk.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-3">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection

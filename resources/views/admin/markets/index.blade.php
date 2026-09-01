@extends('admin.layout')

@section('title', 'Kelola Market')
@section('header', 'Kelola Market')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
        <div>
            <h5 class="m-0 font-weight-bold">Daftar Market</h5>
            <small class="text-muted">Menampilkan {{ $markets->firstItem() ?? 0 }} - {{ $markets->lastItem() ?? 0 }} dari total {{ $markets->total() }} market</small>
        </div>
        <div class="d-flex gap-2">
            <form action="{{ route('admin.markets.index') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control form-control-sm me-2" placeholder="Cari judul..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-sm btn-outline-secondary">Cari</button>
            </form>
            <a href="{{ route('admin.markets.create') }}" class="btn btn-danger btn-sm text-nowrap">
                + Tambah Market
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="50">No</th>
                        <th width="120">Banner</th>
                        <th>Judul Market</th>
                        <th>Sub-judul</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($markets as $index => $market)
                    <tr>
                        <td>{{ $markets->firstItem() + $index }}</td>
                        <td>
                            @if($market->banner_image)
                                <img src="{{ asset('assets/images/' . $market->banner_image) }}" alt="Banner" style="width: 100px; height: 40px; object-fit: cover;" class="rounded border">
                            @else
                                <span class="text-muted small">No Image</span>
                            @endif
                        </td>
                        <td>
                            <strong>{{ $market->title }}</strong>
                        </td>
                        <td>
                            {{ $market->subtitle }}
                        </td>
                        <td>
                            <a href="{{ route('admin.markets.edit', $market->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.markets.destroy', $market->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus market ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">Belum ada data market.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-3">
            {{ $markets->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
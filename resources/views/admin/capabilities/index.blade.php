@extends('admin.layout')

@section('title', 'Daftar Kapabilitas (Capabilities)')
@section('header', 'Modul Capabilities')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="m-0 font-weight-bold">Daftar Kapabilitas</h5>
        <a href="{{ route('admin.capabilities.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Tambah Kapabilitas
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="5%">Urutan</th>
                        <th width="15%">Gambar</th>
                        <th width="25%">Judul</th>
                        <th width="40%">Deskripsi</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($capabilities as $cap)
                        <tr>
                            <td class="text-center">{{ $cap->sort_order }}</td>
                            <td>
                                @if($cap->image)
                                    <img src="{{ asset('assets/images/' . $cap->image) }}" alt="{{ $cap->title }}" class="img-thumbnail" style="max-height: 80px;">
                                @else
                                    <span class="text-muted fst-italic">Tidak ada gambar</span>
                                @endif
                            </td>
                            <td class="fw-bold">{{ $cap->title }}</td>
                            <td>{{ Str::limit($cap->description, 100) }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.capabilities.edit', $cap->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{ route('admin.capabilities.destroy', $cap->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kapabilitas ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">Belum ada data kapabilitas. Silakan tambahkan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

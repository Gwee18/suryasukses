@extends('admin.layout')

@section('title', 'Kelola Halaman')
@section('header', 'Kelola Halaman (Pages)')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold">Daftar Halaman</h5>
        <small class="text-muted">Pilih halaman yang ingin Anda edit teks/kontennya.</small>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="5%">No</th>
                        <th>Judul Halaman</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pages as $index => $page)
                        <tr>
                            <td>{{ $pages->firstItem() + $index }}</td>
                            <td class="fw-bold">{{ $page->title }} <br> <small class="text-muted fw-normal">Slug: {{ $page->slug }}</small></td>
                            <td>
                                <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-sm btn-primary">Edit Konten</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Belum ada halaman.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="d-flex justify-content-center mt-3">
            {{ $pages->links() }}
        </div>
    </div>
</div>
@endsection

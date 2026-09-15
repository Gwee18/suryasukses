@extends('admin.layout')

@section('title', 'Manajemen Akun Admin')
@section('header', 'Manajemen Akun Admin')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-3">
        <h5 class="m-0 font-weight-bold">Daftar Akun Admin</h5>
        <div class="d-flex align-items-center gap-2">
            <form action="{{ route('admin.users.index') }}" method="GET" class="d-flex gap-2 mb-0">
                <input type="text" name="search" class="form-control form-control-sm" placeholder="Cari nama/email..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-sm btn-outline-secondary">Cari</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-outline-secondary">Reset</a>
            </form>
            <a href="{{ route('admin.users.create') }}" class="btn btn-danger btn-sm text-nowrap">
                + Tambah Akun Admin
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="30%">Nama</th>
                        <th width="30%">Email</th>
                        <th width="20%">Terdaftar</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td class="fw-bold">
                                {{ $user->name }}
                                @if($user->id === Auth::id())
                                    <span class="badge bg-secondary">Anda</span>
                                @endif
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at?->format('d M Y') }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                    @if($user->id !== Auth::id())
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus akun admin ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">Belum ada akun admin.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

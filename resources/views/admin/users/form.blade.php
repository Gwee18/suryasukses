@extends('admin.layout')

@section('title', isset($user) ? 'Edit Akun Admin' : 'Tambah Akun Admin')
@section('header', isset($user) ? 'Edit Akun Admin' : 'Tambah Akun Admin')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold">{{ isset($user) ? 'Edit Akun: ' . $user->name : 'Form Akun Admin Baru' }}</h5>
    </div>
    <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ isset($user) ? route('admin.users.update', $user->id) : route('admin.users.store') }}" method="POST">
            @csrf
            @if(isset($user))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" {{ isset($user) ? '' : 'required' }}>
                @if(isset($user))
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah password.</small>
                @endif
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" {{ isset($user) ? '' : 'required' }}>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-danger">Simpan</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection

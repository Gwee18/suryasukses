@extends('admin.layout')

@section('title', 'Dashboard')
@section('header', 'Dashboard Utama')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Berita</h5>
                <p class="card-text fs-2">{{ \App\Models\Post::count() }}</p>
            </div>
        </div>
    </div>
</div>
<div class="card shadow-sm mt-3">
    <div class="card-body">
        <h5>Selamat datang di Panel Admin Surya Sukses!</h5>
        <p class="text-muted">Gunakan menu di sebelah kiri untuk mengelola konten website Anda.</p>
    </div>
</div>
@endsection

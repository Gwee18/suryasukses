@extends('admin.layout')

@section('title', 'Pusat Komando')
@section('header', 'Dashboard Utama')

@push('styles')
<style>
    .stat-card {
        background-color: #ffffff;
        border: 1px solid #ececec;
        border-radius: 8px;
        margin-bottom: 24px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.02);
    }
    .stat-header {
        padding: 16px 24px;
        border-bottom: 1px solid #f0f0f0;
        font-size: 12px;
        font-weight: 600;
        color: #8c8c8c;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .stat-col {
        padding: 32px 24px;
        text-align: center;
    }
    .stat-col:not(:last-child) {
        border-right: 1px solid #f0f0f0;
    }
    .stat-title {
        font-size: 14px;
        color: #8c8c8c;
        margin-bottom: 12px;
        font-weight: 500;
    }
    .stat-number {
        font-size: 48px;
        font-weight: 300;
        line-height: 1;
        margin-bottom: 8px;
    }
    .stat-number.color-1 { color: #69b05b; } /* Soft Green */
    .stat-number.color-2 { color: #4aa3df; } /* Soft Blue */
    .stat-number.color-3 { color: #f4ab43; } /* Soft Orange */
    .stat-number.color-4 { color: #8c8c8c; } /* Muted Gray */
    
    .table-card {
        background-color: #ffffff;
        border: 1px solid #ececec;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.02);
    }
    .table-card-header {
        padding: 20px 24px;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        align-items: center;
    }
    .table-card-title {
        font-size: 15px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }
    .custom-table th {
        font-weight: 500;
        color: #8c8c8c;
        border-bottom: 1px solid #f0f0f0;
        padding: 16px 24px;
        font-size: 13px;
    }
    .custom-table td {
        padding: 16px 24px;
        vertical-align: middle;
        border-bottom: 1px solid #f0f0f0;
        color: #333;
        font-size: 14px;
    }
    .custom-table tr:last-child td {
        border-bottom: none;
    }
    
    @media (max-width: 991px) {
        .stat-col:not(:last-child) {
            border-right: none;
            border-bottom: 1px solid #f0f0f0;
        }
    }
</style>
@endpush

@section('content')
<div class="mb-4">
    <h5 class="fw-normal text-dark mb-1">Selamat Datang di Panel Admin, <span class="fw-bold">{{ auth()->user()->name }}</span></h5>
    <p class="text-muted small">Berikut adalah ringkasan data dan aktivitas sistem saat ini.</p>
</div>

<!-- Statistik 4 Grid (Merged Card style) -->
<div class="stat-card">
    <div class="stat-header">
        Statistik Saat Ini
    </div>
    <div class="row g-0">
        <div class="col-12 col-lg-3 stat-col">
            <div class="stat-title">Total Berita</div>
            <div class="stat-number color-1">{{ $totalPosts }}</div>
        </div>
        
        <div class="col-12 col-lg-3 stat-col">
            <div class="stat-title">Total Produk</div>
            <div class="stat-number color-2">{{ $totalProducts }}</div>
        </div>
        
        <div class="col-12 col-lg-3 stat-col">
            <div class="stat-title">Total Markets</div>
            <div class="stat-number color-3">{{ $totalMarkets }}</div>
        </div>
        
        <div class="col-12 col-lg-3 stat-col">
            <div class="stat-title">Total Pengurus</div>
            <div class="stat-number color-4">{{ $totalUsers }}</div>
        </div>
    </div>
</div>

<div class="row g-4">
    <!-- Tabel 5 Berita Terakhir -->
    <div class="col-12 col-xl-8">
        <div class="table-card h-100">
            <div class="table-card-header">
                <h5 class="table-card-title">Aktivitas Berita Terakhir</h5>
            </div>
            <div class="table-responsive">
                <table class="table custom-table mb-0">
                    <thead>
                        <tr>
                            <th style="width: 50px;">No</th>
                            <th>Judul Berita</th>
                            <th style="width: 150px;">Tanggal Dibuat</th>
                            <th style="width: 100px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($latestPosts as $index => $post)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td class="fw-medium text-dark">{{ Str::limit($post->title, 55) }}</td>
                            <td>{{ $post->created_at->translatedFormat('d M Y') }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-light border shadow-sm">
                                    Edit
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-5 text-muted">Belum ada berita yang diterbitkan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Quick Links Card -->
    <div class="col-12 col-xl-4">
        <div class="table-card h-100">
            <div class="table-card-header">
                <h5 class="table-card-title">Pintasan Cepat</h5>
            </div>
            <div class="card-body p-4">
                <p class="text-muted small mb-4">Akses cepat ke menu yang sering digunakan.</p>
                
                <div class="d-flex flex-column gap-3">
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-outline-secondary d-flex align-items-center justify-content-start p-3" style="border-color: #ececec;">
                        <div class="bg-light rounded p-2 me-3 text-primary">
                            <i class="bi bi-newspaper fs-5"></i>
                        </div>
                        <div class="text-start">
                            <h6 class="mb-0 fw-semibold text-dark">Tulis Berita Baru</h6>
                            <small class="text-muted">Publikasikan informasi terbaru</small>
                        </div>
                    </a>
                    
                    <a href="{{ route('admin.products.create') }}" class="btn btn-outline-secondary d-flex align-items-center justify-content-start p-3" style="border-color: #ececec;">
                        <div class="bg-light rounded p-2 me-3 text-success">
                            <i class="bi bi-box-seam fs-5"></i>
                        </div>
                        <div class="text-start">
                            <h6 class="mb-0 fw-semibold text-dark">Tambah Produk</h6>
                            <small class="text-muted">Masukkan katalog produk baru</small>
                        </div>
                    </a>
                    
                    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary d-flex align-items-center justify-content-start p-3" style="border-color: #ececec;">
                        <div class="bg-light rounded p-2 me-3 text-danger">
                            <i class="bi bi-people fs-5"></i>
                        </div>
                        <div class="text-start">
                            <h6 class="mb-0 fw-semibold text-dark">Manajemen Akun</h6>
                            <small class="text-muted">Kelola akses admin sistem</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

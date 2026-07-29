@extends('admin.layout')

@section('title', 'Login Admin')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
        <div class="card-body p-4">
            <div class="text-center mb-4">
                <h4 class="text-danger fw-bold">Surya Sukses</h4>
                <p class="text-muted">Login Administrator</p>
            </div>
            
            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-danger w-100 mb-3">Login</button>
                <a href="{{ url('/') }}" class="text-decoration-none d-block text-center text-secondary small">&larr; Kembali ke Website</a>
            </form>
        </div>
    </div>
</div>
@endsection

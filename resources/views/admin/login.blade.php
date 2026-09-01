<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Surya Sukses</title>
    
    <!-- Favicon -->
    <link rel="Shortcut Icon" href="{{ asset('asset/images/favicon.png') }}" />
    
    <!-- Google Fonts: Fira Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Fira Sans', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-sm border-0" style="width: 100%; max-width: 400px; border-radius: 8px;">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-4">
                    <h4 class="fw-bold" style="color: #C52026;">Surya Sukses</h4>
                    <p class="text-muted mb-0">Login Administrator</p>
                </div>
                
                <form action="{{ route('admin.login.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" style="font-size: 0.9rem;">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus style="padding: 0.6rem 1rem;">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label class="form-label" style="font-size: 0.9rem;">Password</label>
                        <input type="password" name="password" class="form-control" required style="padding: 0.6rem 1rem;">
                    </div>
                    
                    <button type="submit" class="btn w-100 mb-3 fw-medium" style="background-color: #C52026; color: white; padding: 0.6rem 1rem;">Login</button>
                    
                    <a href="{{ url('/') }}" class="text-decoration-none d-block text-center text-secondary small">&larr; Kembali ke Website</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
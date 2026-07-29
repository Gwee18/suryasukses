<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - Surya Sukses')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #343a40; color: white; }
        .sidebar a { color: rgba(255,255,255,.8); text-decoration: none; padding: 10px 15px; display: block; }
        .sidebar a:hover, .sidebar a.active { color: #fff; background: #495057; }
        .main-content { padding: 20px; }
    </style>
    @stack('styles')
</head>
<body>
    @auth
        <div class="d-flex">
            <!-- Sidebar -->
            <div class="sidebar" style="width: 250px;">
                <div class="p-3 mb-3 border-bottom border-secondary text-center">
                    <h5 class="m-0">SAP Admin</h5>
                </div>
                <nav>
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                    <a href="{{ route('admin.posts.index') }}" class="{{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">Berita (News)</a>
                </nav>
            </div>
            
            <!-- Content -->
            <div class="flex-grow-1 main-content">
                <!-- Topbar -->
                <div class="d-flex justify-content-between align-items-center mb-4 bg-white p-3 rounded shadow-sm">
                    <h4 class="m-0">@yield('header')</h4>
                    <div class="d-flex align-items-center">
                        <span class="me-3">Halo, {{ Auth::user()->name }}</span>
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-sm btn-outline-danger" type="submit">Logout</button>
                        </form>
                    </div>
                </div>

                <!-- Main Area -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                @yield('content')
            </div>
        </div>
    @else
        <!-- Login Page Layout -->
        @yield('content')
    @endauth

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>

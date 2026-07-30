<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - Surya Sukses')</title>
    
    <!-- Favicon (using same as public site) -->
    <link rel="Shortcut Icon" href="{{ asset('asset/images/favicon.png') }}" />
    <link rel="icon" type="image/ico" href="{{ asset('asset/images/favicon.png') }}" />
    
    <!-- Google Fonts: Fira Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #C52026;
            --text-color: #1a1a1a;
            --text-muted: #a9a9a9;
            --bg-body: #f8f9fa;
            --bg-sidebar: #ffffff;
        }

        body { 
            background-color: var(--bg-body); 
            font-family: 'Fira Sans', sans-serif;
            color: var(--text-color);
        }

        /* Sidebar Styling */
        .sidebar { 
            min-height: 100vh; 
            background: var(--bg-sidebar); 
            box-shadow: 2px 0 10px rgba(0,0,0,0.05);
            z-index: 1000;
        }
        
        .sidebar-brand {
            padding: 20px 25px;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 76px; /* Matches website navbar height */
        }

        .sidebar-brand img {
            max-height: 40px;
            width: auto;
        }

        .sidebar nav {
            padding: 20px 0;
        }

        .sidebar a { 
            color: var(--text-muted); 
            text-decoration: none; 
            padding: 12px 25px; 
            display: block; 
            font-weight: 500;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            position: relative;
            transition: all 0.3s ease;
        }

        .sidebar a:hover { 
            color: var(--text-color); 
            background: #f8f9fa; 
        }

        .sidebar a.active { 
            color: var(--text-color); 
            font-weight: 700;
            background: #f8f9fa;
        }

        /* Active Indicator (Red line) */
        .sidebar a.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background-color: var(--primary-color);
        }

        /* Main Content */
        .main-content { 
            padding: 0; 
        }

        /* Topbar Styling */
        .topbar {
            height: 76px; /* Matches website navbar height */
            background-color: #ffffff;
            border-bottom: 1px solid #ececec;
            padding: 0 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.02);
        }

        .topbar h4 {
            font-weight: 600;
            color: var(--text-color);
            margin: 0;
        }

        /* Content Area */
        .content-area {
            padding: 30px;
        }

        /* Buttons matching brand */
        .btn-danger {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .btn-danger:hover {
            background-color: #a61b20;
            border-color: #a61b20;
        }
        
        .btn-outline-danger {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .btn-outline-danger:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }

        .card {
            border: none;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            border-radius: 8px;
        }
        
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #ececec;
            font-weight: 600;
        }
    </style>
    @stack('styles')
</head>
<body>
    @auth
        <div class="d-flex">
            <!-- Sidebar -->
            <div class="sidebar" style="width: 260px;">
                <div class="sidebar-brand">
                    <!-- Added fallback text if logo is missing -->
                    <img src="{{ asset('assets/images/logo/logo-header.png') }}" alt="Surya Sukses" onerror="this.outerHTML='<h5 class=\'m-0 font-weight-bold text-dark\'>SAP Admin</h5>'">
                </div>
                <nav>
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                    <a href="{{ route('admin.posts.index') }}" class="{{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">Berita (News)</a>
                    <!-- Modul lain akan ditambahkan di sini -->
                </nav>
            </div>
            
            <!-- Content -->
            <div class="flex-grow-1 main-content">
                <!-- Topbar -->
                <div class="topbar">
                    <h4 class="m-0">@yield('header')</h4>
                    <div class="d-flex align-items-center">
                        <span class="me-3 fw-medium">Halo, {{ Auth::user()->name }}</span>
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-sm btn-outline-danger" type="submit">Logout</button>
                        </form>
                    </div>
                </div>

                <!-- Main Area -->
                <div class="content-area">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show shadow-sm">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show shadow-sm">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    @yield('content')
                </div>
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

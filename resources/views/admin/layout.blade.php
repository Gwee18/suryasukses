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
            width: 260px;
            flex-shrink: 0;
            height: 100vh;
            position: sticky;
            top: 0;
            background: var(--bg-sidebar); 
            box-shadow: 2px 0 10px rgba(0,0,0,0.05);
            z-index: 1000;
            overflow-y: auto;
        }
        
        /* Hide scrollbar for sidebar */
        .sidebar::-webkit-scrollbar {
            width: 5px;
        }
        .sidebar::-webkit-scrollbar-track {
            background: transparent;
        }
        .sidebar::-webkit-scrollbar-thumb {
            background: #e0e0e0;
            border-radius: 5px;
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

        /* Dropdown Arrow Rotation */
        .sidebar a[data-bs-toggle="collapse"] svg {
            transition: transform 0.3s ease;
        }
        .sidebar a[data-bs-toggle="collapse"][aria-expanded="true"] svg {
            transform: rotate(180deg) !important;
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
        @php
            // $page hanya tersedia saat sedang membuka form edit halaman (admin.pages.edit).
            // Di halaman lain (dashboard, posts, dst) variabel ini tidak ada, jadi kita fallback ke null.
            $currentEditedPage = isset($page) ? $page : null;
            $isAboutFamily = $currentEditedPage && in_array($currentEditedPage->slug, ['about', 'about-values', 'about-quality', 'about-career']);
            $isContactPage = $currentEditedPage && $currentEditedPage->slug == 'contact';
        @endphp
        <div class="d-flex">
            <!-- Sidebar -->
            <div class="sidebar">
                <div class="sidebar-brand">
                    <!-- Added fallback text if logo is missing -->
                    <img src="{{ asset('assets/images/logo/logo-header.png') }}" alt="Surya Sukses" onerror="this.outerHTML='<h5 class=\'m-0 font-weight-bold text-dark\'>SAP Admin</h5>'">
                </div>
                <nav>
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                    
                    <a href="{{ route('admin.home.edit') }}" class="{{ request()->routeIs('admin.home.*') ? 'active' : '' }}">Home</a>
                    
                    @php
                        $isProductMenuOpen = request()->routeIs('admin.product-categories.*') || request()->routeIs('admin.products.*');
                    @endphp
                    <a data-bs-toggle="collapse" href="#collapseProducts" role="button" aria-expanded="{{ $isProductMenuOpen ? 'true' : 'false' }}" aria-controls="collapseProducts" class="d-flex justify-content-between align-items-center {{ $isProductMenuOpen ? 'active' : '' }}">
                        PRODUCT 
                        <svg width="12" height="12" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <div class="collapse {{ $isProductMenuOpen ? 'show' : '' }}" id="collapseProducts">
                        <div style="background-color: #fcfcfc;">
                            <a href="{{ route('admin.product-categories.index') }}" class="{{ request()->routeIs('admin.product-categories.*') ? 'active' : '' }}" style="padding-left: 45px; font-size: 14px; text-transform: capitalize;">Kategori</a>
                            <a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}" style="padding-left: 45px; font-size: 14px; text-transform: capitalize;">Daftar Produk</a>
                        </div>
                    </div>
                                        <a href="{{ route('admin.markets.index') }}" class="{{ request()->routeIs('admin.markets.*') ? 'active' : '' }}">Markets</a>
                    <a href="#solutionsSubmenu" data-bs-toggle="collapse" class="dropdown-toggle {{ request()->url() == route('admin.pages.edit', \App\Models\Page::where('slug', 'solutions')->first()->id ?? 0) || request()->url() == route('admin.pages.edit', \App\Models\Page::where('slug', 'capabilities')->first()->id ?? 0) ? 'active' : '' }}">Solutions</a>
                    <ul class="collapse list-unstyled ps-3 {{ request()->url() == route('admin.pages.edit', \App\Models\Page::where('slug', 'solutions')->first()->id ?? 0) || request()->url() == route('admin.pages.edit', \App\Models\Page::where('slug', 'capabilities')->first()->id ?? 0) ? 'show' : '' }}" id="solutionsSubmenu">
                        @php 
                            $solutionsPage = \App\Models\Page::where('slug', 'solutions')->first(); 
                            $capabilitiesPage = \App\Models\Page::where('slug', 'capabilities')->first(); 
                        @endphp
                        @if($solutionsPage)
                            <li><a href="{{ route('admin.pages.edit', $solutionsPage->id) }}" class="{{ request()->url() == route('admin.pages.edit', $solutionsPage->id) ? 'active' : '' }}" style="font-size: 13px; padding: 8px 25px;">Suryasukses Studio</a></li>
                        @endif
                        @if($capabilitiesPage)
                            <li><a href="{{ route('admin.pages.edit', $capabilitiesPage->id) }}" class="{{ request()->url() == route('admin.pages.edit', $capabilitiesPage->id) ? 'active' : '' }}" style="font-size: 13px; padding: 8px 25px;">Capabilities</a></li>
                        @endif
                    </ul>
                    
                    <a href="{{ route('admin.about.edit') }}" class="{{ request()->routeIs('admin.about.*') ? 'active' : '' }}">About Us</a>
                    
                    <a href="{{ route('admin.posts.index') }}" class="{{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">News</a>
                    
                    @php $contactPage = \App\Models\Page::where('slug', 'contact')->first(); @endphp
                    @if($contactPage)
                        <a href="{{ route('admin.pages.edit', $contactPage->id) }}" class="{{ $isContactPage ? 'active' : '' }}">Contact Us</a>
                    @else
                        <a href="#">Contact Us</a>
                    @endif
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
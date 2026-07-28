<header class="site-navbar">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid navbar-inner">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo/logo-header.png') }}" alt="Surya Sukses Logo" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav main-menu">
                    <li class="nav-item d-lg-none">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">HOME</a>
                    </li>

                    <li class="nav-item mega-nav-item">
                        <a class="nav-link mega-toggle {{ request()->routeIs('product') ? 'active' : '' }}" href="{{ route('product') }}">
                            PRODUCTS
                        </a>
                        <div class="mega-dropdown mega-dropdown-columns">
                            <div class="container">
                                <div class="row gy-4">
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="mega-heading"><a href="{{ route('product.landing', ['id' => 2, 'slug' => 'packaging']) }}">Packaging</a></h6>
                                        <ul class="mega-list">
                                            <li><a href="{{ route('product.range', ['id' => 1, 'parentId' => 2, 'slug' => 'preform']) }}">Preform</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 2, 'parentId' => 2, 'slug' => 'bottles']) }}">Bottles</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 3, 'parentId' => 2, 'slug' => 'closures']) }}">Closures</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 4, 'parentId' => 2, 'slug' => 'drinking-cups']) }}">Drinking Cups</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 5, 'parentId' => 2, 'slug' => 'lids']) }}">Lids</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 6, 'parentId' => 2, 'slug' => 'containers']) }}">Containers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="mega-heading"><a href="{{ route('product.landing', ['id' => 3, 'slug' => 'specialty-nonwoven']) }}">Specialty Nonwoven</a></h6>
                                        <ul class="mega-list">
                                            <li><a href="{{ route('product.range', ['id' => 7, 'parentId' => 3, 'slug' => 'spunbond-polypropylene']) }}">Spunbond Polypropylene</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 8, 'parentId' => 3, 'slug' => 'meltblown']) }}">Meltblown</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="mega-heading"><a href="{{ route('product.landing', ['id' => 4, 'slug' => 'housewares']) }}">Housewares</a></h6>
                                        <ul class="mega-list">
                                            <li><a href="{{ route('product.range', ['id' => 9, 'parentId' => 4, 'slug' => 'storage']) }}">Storage</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 10, 'parentId' => 4, 'slug' => 'sealware']) }}">Sealware</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 11, 'parentId' => 4, 'slug' => 'kitchen']) }}">Kitchen</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 13, 'parentId' => 4, 'slug' => 'containers']) }}">Containers</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 14, 'parentId' => 4, 'slug' => 'racks']) }}">Racks</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 15, 'parentId' => 4, 'slug' => 'bathroom']) }}">Bathroom</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 16, 'parentId' => 4, 'slug' => 'cleaning-ware']) }}">Cleaning Ware</a></li>
                                            <li><a href="{{ route('product.range', ['id' => 17, 'parentId' => 4, 'slug' => 'garden']) }}">Garden</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="mega-heading"><a href="{{ route('product.landing', ['id' => 5, 'slug' => 'roofing']) }}">Roofing</a></h6>
                                        <ul class="mega-list">
                                            <li><a href="{{ route('product.range', ['id' => 18, 'parentId' => 5, 'slug' => 'upvc']) }}">UPVC</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- SECTION MARKET (SUDAH DISAMBUNGKAN) -->
                    <li class="nav-item mega-nav-item">
                        <a class="nav-link mega-toggle {{ request()->routeIs('markets.*') ? 'active' : '' }}" href="#">
                            MARKETS
                        </a>
                        <div class="mega-dropdown mega-dropdown-inline">
                            <div class="container">
                                <ul class="mega-inline-list">
                                    <li><a href="{{ route('markets.beverage') }}">Beverage</a></li>
                                    <li><a href="{{ route('markets.healthcare') }}">Healthcare</a></li>
                                    <li><a href="{{ route('markets.household') }}">Household</a></li>
                                    <li><a href="{{ route('markets.agriculture') }}">Agriculture</a></li>
                                    <li><a href="{{ route('markets.industrial') }}">Industrial</a></li>
                                    <li><a href="{{ route('markets.filtration') }}">Filtration</a></li>
                                    <li><a href="{{ route('markets.building_construction') }}">Building &amp; Construction</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item mega-nav-item">
                        <a class="nav-link mega-toggle {{ request()->routeIs('solutions') ? 'active' : '' }}" href="{{ route('solutions') }}">
                            SOLUTIONS
                        </a>
                        <div class="mega-dropdown mega-dropdown-inline">
                            <div class="container">
                                <ul class="mega-inline-list">
                                    <li><a href="{{ route('solutions') }}">Suryasukses Studio</a></li>
                                    <li><a href="{{ route('capabilities') }}">Capabilities</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item mega-nav-item">
                        <a class="nav-link mega-toggle {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                            ABOUT US
                        </a>
                        <div class="mega-dropdown mega-dropdown-inline">
                            <div class="container">
                                <ul class="mega-inline-list">
                                    <li><a href="{{ route('about') }}">Who We Are</a></li>
                                    <li><a href="{{ route('about.values') }}">Our Values</a></li>
                                    <li><a href="{{ route('about.quality') }}">Quality Statement</a></li>
                                    <li><a href="{{ route('about.career') }}">Career</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">CONTACT US</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-iso ms-auto d-none d-lg-block">
                <img src="{{ asset('assets/images/logo/iso-headers.png') }}" alt="ISO Certification">
            </div>
        </div>
    </nav>
</header>
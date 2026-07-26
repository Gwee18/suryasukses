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
                                        <h6 class="mega-heading">Packaging</h6>
                                        <ul class="mega-list">
                                            <li><a href="#">Preform</a></li>
                                            <li><a href="#">Bottles</a></li>
                                            <li><a href="#">Closures</a></li>
                                            <li><a href="#">Drinking Cups</a></li>
                                            <li><a href="#">Lids</a></li>
                                            <li><a href="#">Containers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="mega-heading">Specialty Nonwoven</h6>
                                        <ul class="mega-list">
                                            <li><a href="#">Spunbond Polypropylene</a></li>
                                            <li><a href="#">Meltblown</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="mega-heading">Housewares</h6>
                                        <ul class="mega-list">
                                            <li><a href="#">Storage</a></li>
                                            <li><a href="#">Sealware</a></li>
                                            <li><a href="#">Kitchen</a></li>
                                            <li><a href="#">Containers</a></li>
                                            <li><a href="#">Racks</a></li>
                                            <li><a href="#">Bathroom</a></li>
                                            <li><a href="#">Cleaning Ware</a></li>
                                            <li><a href="#">Garden</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h6 class="mega-heading">Roofing</h6>
                                        <ul class="mega-list">
                                            <li><a href="#">UPVC</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item mega-nav-item">
                        <a class="nav-link mega-toggle {{ request()->routeIs('market') ? 'active' : '' }}" href="{{ route('market') }}">
                            MARKET
                        </a>
                        <div class="mega-dropdown mega-dropdown-inline">
                            <div class="container">
                                <ul class="mega-inline-list">
                                    <li><a href="#">Beverage</a></li>
                                    <li><a href="#">Healthcare</a></li>
                                    <li><a href="#">Household</a></li>
                                    <li><a href="#">Agriculture</a></li>
                                    <li><a href="#">Industrial</a></li>
                                    <li><a href="#">Filtration</a></li>
                                    <li><a href="#">Building &amp; Construction</a></li>
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

                    <li class="nav-item">
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
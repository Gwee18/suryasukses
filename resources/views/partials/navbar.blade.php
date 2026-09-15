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
                                    @foreach($navbarCategories as $cat)
                                        <div class="col-lg-3 col-md-6">
                                            <h6 class="mega-heading"><a href="{{ route('product.landing', ['id' => $cat->id, 'slug' => $cat->slug]) }}">{{ $cat->title }}</a></h6>
                                            <ul class="mega-list">
                                                @php($shownSlugs = [])
                                                @foreach($cat->products as $product)
                                                    @continue(in_array($product->slug, $shownSlugs))
                                                    @php($shownSlugs[] = $product->slug)
                                                    <li><a href="{{ route('product.range', ['id' => $product->id, 'parentId' => $cat->id, 'slug' => $product->slug]) }}">{{ $product->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach
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
                                    <li><a href="{{ route('markets.show', 'beverage') }}">Beverage</a></li>
                                    <li><a href="{{ route('markets.show', 'healthcare') }}">Healthcare</a></li>
                                    <li><a href="{{ route('markets.show', 'household') }}">Household</a></li>
                                    <li><a href="{{ route('markets.show', 'agriculture') }}">Agriculture</a></li>
                                    <li><a href="{{ route('markets.show', 'industrial') }}">Industrial</a></li>
                                    <li><a href="{{ route('markets.show', 'filtration') }}">Filtration</a></li>
                                    <li><a href="{{ route('markets.show', 'building-construction') }}">Building &amp; Construction</a></li>
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
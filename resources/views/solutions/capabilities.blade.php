@extends('layouts.app')

@section('title', 'Capabilities - Solutions')

@push('styles')
    @vite('resources/css/pages/solutions.css')
@endpush

@section('content')
<div class="solution-capabilities">
    <div class="solution-capabilities__breadcrumb-wrapper">
        <div class="solution-capabilities__container">
            <div class="solution-capabilities__breadcrumb-layout">
                <nav class="solution-capabilities__breadcrumb" aria-label="breadcrumb">
                    <ul class="solution-capabilities__breadcrumb-list">
                        <li class="solution-capabilities__breadcrumb-item"><a href="{{ route('home') }}" class="solution-capabilities__breadcrumb-link">Home</a></li>
                        <li class="solution-capabilities__breadcrumb-item"><a href="#" class="solution-capabilities__breadcrumb-link solution-capabilities__breadcrumb-link--disabled">Solution</a></li>
                        <li class="solution-capabilities__breadcrumb-item solution-capabilities__breadcrumb-item--active"><span class="solution-capabilities__breadcrumb-link">Capabilities</span></li>
                    </ul>
                </nav>
                <div class="solution-capabilities__back">
                    <a href="javascript:history.back()" class="solution-capabilities__back-link">Back</a>
                </div>
            </div>
        </div>
    </div>

    <div class="solution-capabilities__section">
        <div class="solution-capabilities__container">
            <div class="solution-capabilities__layout">
                
                <aside class="solution-capabilities__sidebar">
                    <div class="solution-capabilities__sidebar-box">
                        <h5 class="solution-capabilities__sidebar-title">Solutions</h5>
                        <ul class="solution-capabilities__nav">
                            <li class="solution-capabilities__nav-item">
                                <a href="{{ route('solutions') }}" class="solution-capabilities__nav-link">Suryasukses Studio</a>
                            </li>
                            <li class="solution-capabilities__nav-item solution-capabilities__nav-item--active">
                                <a href="{{ route('capabilities') }}" class="solution-capabilities__nav-link">Capabilities</a>
                            </li>
                        </ul>
                    </div>
                </aside>

                <main class="solution-capabilities__main">
                    <h4 class="solution-capabilities__subtitle">What we can do for you</h4>
                    <h3 class="solution-capabilities__title">Capabilities</h3>

                    <div class="solution-capabilities__grid">
                        
                        <!-- Capability 1 -->
                        <article class="solution-capabilities__card">
                            <div class="solution-capabilities__image-wrapper">
                                <img src="{{ asset('assets/images/solutions/ff445c40b3injection (1).jpg') }}" alt="Injection Molding" class="solution-capabilities__image">
                            </div>
                            <div class="solution-capabilities__content">
                                <h5 class="solution-capabilities__card-title">Injection Molding</h5>
                                <p class="solution-capabilities__card-text">
                                    We have over 1000 products variations and over 30 years of experience and expertise necessary to provide the highest quality results for large and small scale manufacturing.<br><br>Applications: Packaging, preform, bottle caps, storage containers, household products
                                </p>
                            </div>
                        </article>

                        <!-- Capability 2 -->
                        <article class="solution-capabilities__card">
                            <div class="solution-capabilities__image-wrapper">
                                <img src="{{ asset('assets/images/solutions/b399409e51blow (1).jpg') }}" alt="Blow Molding" class="solution-capabilities__image">
                            </div>
                            <div class="solution-capabilities__content">
                                <h5 class="solution-capabilities__card-title">Blow Molding</h5>
                                <p class="solution-capabilities__card-text">
                                    As a long-standing name in the blow molding space, we serve a multitude of markets ranging from beverages to automotive.We currently manufacture a range of sizes from some of the smallest to largest bottles.<br><br>Applications: Bottles,
                                </p>
                            </div>
                        </article>

                        <!-- Capability 3 -->
                        <article class="solution-capabilities__card">
                            <div class="solution-capabilities__image-wrapper">
                                <img src="{{ asset('assets/images/solutions/49cf55322dCCJ_9900.jpg') }}" alt="Thermoforming" class="solution-capabilities__image">
                            </div>
                            <div class="solution-capabilities__content">
                                <h5 class="solution-capabilities__card-title">Thermoforming</h5>
                                <p class="solution-capabilities__card-text">
                                    As a pioneer for thermoformed drink cups, we lead the way for innovation. We are continuously expanding our expertise to include new thermoformed products.<br><br>Applications: disposable cups, containers, lids, trays
                                </p>
                            </div>
                        </article>

                        <!-- Capability 4 -->
                        <article class="solution-capabilities__card">
                            <div class="solution-capabilities__image-wrapper">
                                <img src="{{ asset('assets/images/solutions/3012f54c58CCJ_0062.jpg') }}" alt="Offset Printing" class="solution-capabilities__image">
                            </div>
                            <div class="solution-capabilities__content">
                                <h5 class="solution-capabilities__card-title">Offset Printing</h5>
                                <p class="solution-capabilities__card-text">
                                    The Dry Offset Printing process provides the most efficient method for high speed, large volume printing of multi-colored line copy, half-tones and full process art on preformed plastic parts. This option is widely used and can be completed at very high speeds.<br><br>Applications: Round containers, drink cups, jars
                                </p>
                            </div>
                        </article>

                        <!-- Capability 5 -->
                        <article class="solution-capabilities__card">
                            <div class="solution-capabilities__image-wrapper">
                                <img src="{{ asset('assets/images/solutions/b6311f963910(1).jpg') }}" alt="Spunbond Machine" class="solution-capabilities__image">
                            </div>
                            <div class="solution-capabilities__content">
                                <h5 class="solution-capabilities__card-title">Spunbond Machine</h5>
                                <p class="solution-capabilities__card-text">
                                    A versatile product that can be printed or luminated. Its naturally porous, light-weight and eco-friendly characteristics make spunbond a multipurpose product that can support various industries. It is commonly used for shopping/goodies bags, clothes & shoes cover, masks, medical cap/gown, fruit covers and many other things.
                                </p>
                            </div>
                        </article>

                        <!-- Capability 6 -->
                        <article class="solution-capabilities__card">
                            <div class="solution-capabilities__image-wrapper">
                                <img src="{{ asset('assets/images/solutions/41d2c2df9fextrusion.jpg') }}" alt="Spunmelt Machine" class="solution-capabilities__image">
                            </div>
                            <div class="solution-capabilities__content">
                                <h5 class="solution-capabilities__card-title">Spunmelt Machine</h5>
                                <p class="solution-capabilities__card-text">
                                    The extremely fine fibers differ from other extrusions,particularly spun bond, in that they have low intrinsic strength but much smaller size offering key properties. Often melt blown is added to spun bond to form SM or SMS webs, which are strong and offer the intrinsic benefits of fine fibers such as fine filtration, low pressure drop as used in face masks or filters and physical benefits such as acoustic insulation as used in dishwashers. One of the largest users of SM and SMS materials is the disposable diaper and feminine care.
                                </p>
                            </div>
                        </article>

                        <!-- Capability 7 -->
                        <article class="solution-capabilities__card">
                            <div class="solution-capabilities__image-wrapper">
                                <img src="{{ asset('assets/images/solutions/f4aa4e78c7spunmelt2.jpg') }}" alt="Extrusion Machine" class="solution-capabilities__image">
                            </div>
                            <div class="solution-capabilities__content">
                                <h5 class="solution-capabilities__card-title">Extrusion Machine</h5>
                                <p class="solution-capabilities__card-text">
                                    Extrusion of roofing sheets, manufactured from UPVC, are designed to suit a diverse range of applications in various markets: DIY, factories, construction, architectural projects, agricultural, manufacturing and fabrication.
                                </p>
                            </div>
                        </article>
                    </div>

                    <div class="solution-capabilities__contact">
                        <div class="solution-capabilities__email">
                            <p>Email your inquiry at <a href="mailto:cs@suryasukses.com" class="solution-capabilities__email-link">cs@suryasukses.com</a></p>
                        </div>
                        <div class="whatsapp pt-2">
                            <h5>Whatsapp <a target="_blank" href="http://wa.me/6285777303030"><img src="{{ asset('assets/images/WA-Logo-copy-2.png') }}" alt=""> +62 857 7730 3030</a></h5>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection

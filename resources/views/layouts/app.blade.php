<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Surya Sukses')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    @stack('early_styles')

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    @stack('styles')

</head>

<body>

    @include('partials.navbar')

    <main>

        @yield('content')

    </main>

    <a href="https://wa.me/62816511229" target="_blank" class="sticky-whatsapp d-none d-md-block">
        <img src="{{ asset('assets/images/home/Whatsapp-Click-to-chat.png') }}" alt="WhatsApp" class="sticky-whatsapp-pill">
        <span class="sticky-whatsapp-text">
            <svg viewBox="0 0 32 32" width="20" height="20" fill="#25D366">
                <path d="M16.004 3.2c-7.07 0-12.8 5.73-12.8 12.8 0 2.256.59 4.375 1.62 6.212L3.2 28.8l6.79-1.78a12.73 12.73 0 0 0 6.014 1.532h.005c7.07 0 12.8-5.73 12.8-12.8s-5.73-12.8-12.805-12.552zm7.49 18.28c-.318.895-1.577 1.638-2.582 1.85-.688.144-1.586.26-4.61-.99-3.868-1.6-6.36-5.52-6.554-5.78-.19-.26-1.567-2.088-1.567-3.984s.987-2.83 1.337-3.22c.318-.352.688-.44.918-.44.23 0 .46.002.66.012.212.01.497-.08.777.593.318.75 1.08 2.59 1.176 2.778.096.19.16.41.032.663-.128.254-.192.412-.38.635-.19.223-.4.497-.572.667-.19.19-.388.397-.167.78.222.383.985 1.626 2.115 2.634 1.453 1.297 2.678 1.7 3.06 1.888.383.19.606.16.83-.096.223-.256.955-1.113 1.21-1.495.256-.38.51-.317.86-.19.35.128 2.226 1.05 2.607 1.24.383.19.638.286.733.446.096.16.096.925-.223 1.82z"/>
            </svg>
            <span>Whatsapp</span>
        </span>
    </a>

    <div class="whatsapp-mobile-container d-block d-md-none text-center">
        <a href="https://wa.me/62816511229" target="_blank" class="whatsapp-mobile-link d-inline-flex align-items-center text-decoration-none">
            <svg class="whatsapp-mobile-icon" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56 81.2 56 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
            Whatsapp
        </a>
    </div>

    @include('partials.footer')

    @stack('scripts')

</body>

</html>
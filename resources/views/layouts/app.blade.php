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

    <a href="https://wa.me/62816511229" target="_blank" class="sticky-whatsapp">
    <img src="{{ asset('assets/images/home/Whatsapp-Click-to-chat.png') }}" alt="WhatsApp" class="sticky-whatsapp-pill">
    <span class="sticky-whatsapp-text">
        <svg viewBox="0 0 32 32" width="20" height="20" fill="#25D366">
            <path d="M16.004 3.2c-7.07 0-12.8 5.73-12.8 12.8 0 2.256.59 4.375 1.62 6.212L3.2 28.8l6.79-1.78a12.73 12.73 0 0 0 6.014 1.532h.005c7.07 0 12.8-5.73 12.8-12.8s-5.73-12.8-12.805-12.552zm7.49 18.28c-.318.895-1.577 1.638-2.582 1.85-.688.144-1.586.26-4.61-.99-3.868-1.6-6.36-5.52-6.554-5.78-.19-.26-1.567-2.088-1.567-3.984s.987-2.83 1.337-3.22c.318-.352.688-.44.918-.44.23 0 .46.002.66.012.212.01.497-.08.777.593.318.75 1.08 2.59 1.176 2.778.096.19.16.41.032.663-.128.254-.192.412-.38.635-.19.223-.4.497-.572.667-.19.19-.388.397-.167.78.222.383.985 1.626 2.115 2.634 1.453 1.297 2.678 1.7 3.06 1.888.383.19.606.16.83-.096.223-.256.955-1.113 1.21-1.495.256-.38.51-.317.86-.19.35.128 2.226 1.05 2.607 1.24.383.19.638.286.733.446.096.16.096.925-.223 1.82z"/>
        </svg>
        <span>Whatsapp</span>
    </span>
</a>

    @include('partials.footer')

    @stack('scripts')

</body>

</html>
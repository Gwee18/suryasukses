<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Surya Sukses')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

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
        <img src="{{ asset('assets/images/home/Whatsapp-Click-to-chat.png') }}" alt="WhatsApp">
    </a>

    @include('partials.footer')

    @stack('scripts')

</body>

</html>
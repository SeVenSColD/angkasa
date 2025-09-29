<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'AP Technical')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- CSS global --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Styles khusus halaman --}}
    @stack('styles')
</head>
<body class="@yield('body-class')">
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About Us</a>
        <a href="{{ url('/services') }}">Our Service</a>
        <a href="{{ url('/development') }}">Development</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        {{-- isi footer --}}
    </footer>

    {{-- Script global --}}
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- Script khusus halaman --}}
    @stack('scripts')
</body>
</html>

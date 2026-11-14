<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <title>@yield('title', 'PT. Solusi Net Nusantara — Jasa Jaringan & Pengkabelan')</title>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Geist+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-brand-canvas text-brand-neutral font-sans antialiased selection:bg-brand-accent/20 selection:text-brand-accent">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-brand-neutral focus:text-white focus:rounded-md focus:shadow-lg focus:outline-none">Lewati ke konten utama</a>
    @include('partials.header')
    <main id="main-content">@yield('content')</main>
    @include('partials.footer')
</body>
</html>

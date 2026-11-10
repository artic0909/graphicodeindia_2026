<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">

    <!-- SEO Meta Tags & Schema -->
    @include('frontend.includes.seo', [
        'title' => $title ?? 'Graphicode India | Software Marketing, App Development & Graphic Design Company',
        'description' => $description ?? 'Graphicode India is a premier technology and marketing agency specializing in high-performance mobile app development, custom software engineering, creative UI/UX graphic design, and ROI-driven software marketing.',
        'keywords' => $keywords ?? 'Graphicode India, software company India, app development company, mobile app developers, graphic design agency, software marketing, custom web development, UI UX design, Flutter app development, Laravel development, SEO agency India',
    ])

    <!-- Google Fonts for Modern Digital Agency Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        .font-heading {
            font-family: 'Space Grotesk', 'Plus Jakarta Sans', sans-serif;
        }
    </style>

    <!-- Vite Assets (Tailwind CSS v4 & App JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body id="top" class="bg-white text-slate-800 antialiased selection:bg-gc-orange selection:text-white min-h-screen flex flex-col overflow-x-hidden">
    <!-- Header -->
    @include('frontend.includes.header')

    <!-- Main Content -->
    <main class="flex-grow">
        @isset($slot)
            {{ $slot }}
        @else
            @yield('content')
        @endisset
    </main>

    <!-- Footer -->
    @include('frontend.includes.footer')

    <!-- Interactive Scripts -->
    @include('frontend.includes.script')

    @stack('scripts')
</body>
</html>


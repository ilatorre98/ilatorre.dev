<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    @php
        $siteUrl = 'https://ilatorre.dev';
        $ogTitle = 'Iker Latorre | Back-End & Full-Stack Developer';
        $ogImage = $siteUrl.'/images/profile.jpg';
    @endphp

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ __('cv.meta_description') }}">
    <title>{{ __('cv.meta_title') }}</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.svg') }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="profile">
    <meta property="og:url" content="{{ $siteUrl }}">
    <meta property="og:title" content="{{ $ogTitle }}">
    <meta property="og:description" content="{{ __('cv.meta_description') }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:locale" content="{{ str_replace('-', '_', app()->getLocale()) }}">
    <meta property="og:site_name" content="Iker Latorre">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $ogTitle }}">
    <meta name="twitter:description" content="{{ __('cv.meta_description') }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    @fonts

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-charcoal-900 text-charcoal-50 font-sans antialiased selection:bg-olive-500 selection:text-charcoal-950">

    @include('partials.navbar')

    <main>
        @include('partials.hero')
        @include('partials.experience')
        @include('partials.skills')
        @include('partials.education')
        @include('partials.languages')
        @include('partials.contact')
        @include('partials.behind-stack')
    </main>

    @include('partials.footer')

</body>
</html>

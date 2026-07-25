<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <title>@yield('title', config('app.name', 'Blitz Project'))</title>

    {{-- SEO --}}
    <meta name="description" content="@yield('meta_description', '')">
    <meta name="keywords" content="@yield('meta_keywords', '')">
    <meta name="author" content="mix_design">

    {{-- Viewport --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('assets/img/favicon/icon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/manifest.webmanifest') }}">

    {{-- Open Graph --}}
    <meta property="og:image:height" content="1200">
    <meta property="og:image:width" content="1200">
    <meta property="og:title" content="@yield('og_title', config('app.name'))">
    <meta property="og:description" content="@yield('og_description', '')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/img/og-image.jpg') }}">

    {{-- Template CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    {{-- Laravel Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Page Specific CSS --}}
    @stack('styles')

    {{-- Browser Theme --}}
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#EEEAE8">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#0f0f0f">
    <meta name="msapplication-navbutton-color" content="#0f0f0f">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>

<body>

@include('components.loader')

@include('components.navigation')

@include('components.header')

<main id="mxd-page-content" class="mxd-page-content">
    @yield('content')
</main>

@include('components.footer')

@stack('scripts')
<script src="{{asset('assets/js/libs.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>

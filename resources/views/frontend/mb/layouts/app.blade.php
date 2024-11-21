<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
        <title>Ministerios Bendición</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('plugins/glidejs/glide.core.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/glidejs/glide.theme.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="drawer">
            <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
              @include('frontend.mb.layouts.navigation')
              @isset($header)
                <div class="hero h-64 mb-16" style="background-image: url({{ asset('images/slideshow-04.jpeg')}});">
                  <div class="hero-overlay bg-gray-900 bg-opacity-80"></div>
                  <div class="hero-content text-neutral-content text-center">
                      <div class="px-6">
                          <h1 class="text-5xl font-black text-center animate__animated animate__flipInX">{{ $header }}</h1>
                      </div>
                  </div>
                </div>
              @endisset
              <main>
                {{ $slot }}
              </main>
              @include('frontend.mb.layouts.footer')
            </div>
            @include('frontend.mb.layouts.drawer')
        </div>
    </body>
</html>

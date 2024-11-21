<!doctype html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
  <title>Web Bendición</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <main class="relative min-h-screen flex flex-col lg:flex-row">

        <div class="absolute inset-0 flex items-center justify-center">
            <a href="{{ route('login') }}" class="bg-gray-500 rounded-full bg-clip-padding backdrop-filter backdrop-blur-lg bg-opacity-25 shadow-lg border border-gray-100/25 p-6 text-white font-black text-xl z-50 hover:text-yellow-600">Centro de Recursos</a>
        </div>

        <div class="flex flex-col justify-center items-center flex-1 p-6 relative">
            <img src="{{ asset('images/slideshow-01.jpeg') }}" class="absolute inset-0 w-full h-full object-cover" alt="bg">
            <div class="bg-gray-950/80 absolute inset-0"></div>
            <img src="{{ asset('images/logo-bendicion-invertido.svg') }}" class="h-auto w-64 relative mb-6" alt="">
            <a href="{{ route('mb.inicio')}}" class="relative btn bg-yellow-400 border-none rounded-full px-10">ENTRAR</a>
        </div>

        
        <div class="flex flex-col justify-center items-center flex-1 p-6 relative">
            <img src="{{ asset('images/slideshow-02.jpeg') }}" class="absolute inset-0 w-full h-full object-cover" alt="bg">
            <div class="bg-white/90 absolute inset-0"></div>
            <img src="{{ asset('images/LogoRedBendicion.png') }}" class="h-auto w-64 relative mb-6" alt="logo">
            <a href="{{ route('rb.inicio')}}" class="relative btn bg-yellow-400 border-none rounded-full px-10">ENTRAR</a>
        </div>

    </main>

</body>
</html>

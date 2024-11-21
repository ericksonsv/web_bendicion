<x-frontend.rb.layouts.app>

    <x-slot name="header">
        {{ __('Sobre Nosotros') }}
    </x-slot>

    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="mb-5 text-3xl lg:text-5xl font-bold wow animate__animated animate__fadeInDown">Quiénes Somos</h1>
        <p class="text-2xl italic wow animate__animated animate__fadeInDown">Red Bendición es una red de iglesias en casas. Dios nos ha llamado a formar una Red de redes donde todos podamos estar conectados en diferentes niveles. Desde las iglesias en casas que son los nodos de la red, los hubs o centros estratégicos que conectan varias iglesias en casas lideradas por un anciano, hasta la red misma que conecta a todos los centros estratégicos. Nuestro sueño es ver la red desarrollarse hasta alcanzar nuestro país con el evangelio. El gráfico es un mapa que describe quienes somos y como nos conectamos.</p>
    </div>

    <div class="container mx-auto max-w-7xl py-16 flex justify-center">
        <img src="{{ asset('images/vision-red-bendicion.jpg')}}" alt="Visión Gráfico">
    </div>

    <!-- Visión -->

    <div class="container mx-auto max-w-7xl px-6 mb-24">

        <div class="flex items-center justify-center relative mb-6">
            <div class="absolute inset-0 w-full h-full flex items-center justify-center">
                <h1 class="absolute text-6xl lg:text-8xl text-red-50 font-bold wow animate__animated animate__fadeInDown">Visión</h1>
            </div>
            <h1 class="relative text-4xl text-red-500 text-center font-bold wow animate__animated animate__fadeInDown">Visión</h1>
        </div>

        <div>
            <p class="text-3xl text-center wow animate__animated animate__fadeInDown">Ser una Red de iglesias al estilo de Jesús y los Apóstoles.</p>
        </div>

    </div>

    <!-- Misión -->

    <div class="container mx-auto max-w-7xl px-6 mb-24">

        <div class="flex items-center justify-center relative mb-8 lg:order-last">
            <div class="absolute inset-0 w-full h-full flex items-center justify-center">
                <h1 class="absolute text-6xl lg:text-8xl text-red-50 font-bold wow animate__animated animate__fadeInDown">Misión</h1>
            </div>
            <h1 class="relative text-4xl text-red-500 text-center font-bold wow animate__animated animate__fadeInDown">Misión</h1>
        </div>

        <div>
            <p class="text-3xl text-center mb-6 wow animate__animated animate__fadeInDown">
                Multiplicar comunidades kerigmáticas que celebran la nueva vida en Cristo, conectadas como red de iglesias en continua expansión; transformando vidas a través del Evangelio y procurando el bienestar de cada ciudad.
            </p>
        </div>

    </div>

    <div class="mb-20">
        <img src="{{ asset('images/valores-red-bendicion.png')}}" alt="Valores" class="w-full h-auto">
    </div>

    <!-- Cultura -->

    <div class="container mx-auto max-w-7xl px-6 mb-24">

        <div class="flex items-center justify-center relative mb-8">
            <div class="absolute inset-0 w-full h-full flex items-center justify-center">
                <h1 class="absolute text-6xl lg:text-8xl text-red-50 font-bold wow animate__animated animate__fadeInDown">Cultura</h1>
            </div>
            <h1 class="relative text-4xl text-red-500 text-center font-bold wow animate__animated animate__fadeInDown">Cultura</h1>
        </div>
        
        <div class="text-3xl text-center">
            <p class="wow animate__animated animate__fadeInDown">Somos una gran familia (sistema familiar y eclesial)</p>
            <p class="wow animate__animated animate__fadeInDown">Comunión y hospitalidad genuina</p>
            <p class="wow animate__animated animate__fadeInDown">Trabajo en redes</p>
        </div>
        
    </div>

    <div class="flex flex-col justify-center items-center mb-16">
        <h1 class="text-3xl font-bold text-red-500 text-center mb-2 wow animate__animated animate__fadeInDown">Declaración de propósito/misión red iglesias CCB</h1>
        <div class="bg-red-500 w-12 h-2 wow animate__animated animate__fadeInDown"></div>
        <div class="flex justify-center lg:justify-start mt-8">
            <a href="{{ route('rb.declaracion-doctrinal')}}" class="btn btn-error text-yellow-500 wow animate__animated animate__fadeInDown">Declaración Doctrinal</a>
        </div>
    </div>

    <x-frontend.rb.layouts.bottom-banner>
        {{ __('"Transformar vidas a través del evangelio conectados en pequeñas comunidades
        formando una red de iglesias en continua multiplicación,
        procurando el bienestar de cada ciudad."') }}
    </x-frontend.rb.layouts.bottom-banner>

</x-frontend.rb.layouts.app>
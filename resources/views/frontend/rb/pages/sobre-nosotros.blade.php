<x-frontend.rb.layouts.app>

    <x-slot name="header">
        {{ __('Sobre Nosotros') }}
    </x-slot>

    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="mb-5 text-3xl lg:text-5xl font-bold wow animate__animated animate__fadeInDown">Quiénes Somos</h1>
        <p class="text-base lg:text-2xl italic wow animate__animated animate__fadeInDown">Ministerios Bendición (MB) tiene el proposito de expandir el evangelio en República Dominicana y el mundo. La prioridad principal es expandir el evangelio a través de la red de iglesias Bendición (Rb), ministerios educativos y ministerios comunitarios, entre otros ministerios orientados a servir y apoyar a las familias y a las iglesias.</p>
    </div>

    <div class="flex flex-col justify-center items-center py-6 lg:py-32">
        <h1 class="text-3xl font-bold text-red-500 text-center mb-2 wow animate__animated animate__fadeInDown">Declaración de propósito/misión red iglesias CCB</h1>
        <div class="bg-red-500 w-12 h-2 wow animate__animated animate__fadeInDown"></div>
    </div>

    <!-- Visión -->

    <div class="container mx-auto max-w-7xl px-6 grid lg:grid-cols-2 gap-4 py-6 lg:py-32">
        <div class="flex items-center justify-center relative mb-10 md:mb-0">
        <div class="absolute inset-0 w-full h-full flex items-center justify-center">
            <h1 class="absolute text-7xl lg:text-9xl text-red-50 font-bold wow animate__animated animate__fadeInDown">Visión</h1>
        </div>
        <h1 class="relative text-5xl text-red-500 text-center font-bold wow animate__animated animate__fadeInDown">Visión</h1>
        </div>
        <div>
        <p class="text-2xl text-center lg:text-justify mb-6 wow animate__animated animate__fadeInDown">Multiplicar comunidades kerigmáticas conectadas como red de iglesias en continua expansión celebrando la nueva vida en Cristo y procurando el bienestar de cada ciudad.</p>
        <div class="flex justify-center lg:justify-start">
            <a href="{{ route('mb.declaracion-doctrinal')}}" class="btn btn-error text-yellow-500 wow animate__animated animate__fadeInDown">Declaración Doctrinal</a>
        </div>
        </div>
    </div>

    <!-- Valores -->

    <div class="container mx-auto max-w-7xl px-6 grid lg:grid-cols-2 gap-4 py-6 lg:py-32">
        <div class="flex items-center justify-center relative mb-10 md:mb-0 lg:order-last">
        <div class="absolute inset-0 w-full h-full flex items-center justify-center">
            <h1 class="absolute text-7xl lg:text-9xl text-red-50 font-bold wow animate__animated animate__fadeInDown">Valores</h1>
        </div>
        <h1 class="relative text-5xl text-red-500 text-center font-bold wow animate__animated animate__fadeInDown">Valores</h1>
        </div>
        <div>
        <ul class="list-image-[url(images/cruz-peq.png)] list-inside">
            <li class="bg-yellow-50/50 text-xl p-2 rounded-lg shadow-sm mb-2 wow animate__animated animate__fadeInDown">Comunidades amorosas</li>
            <li class="bg-yellow-50/50 text-xl p-2 rounded-lg shadow-sm mb-2 wow animate__animated animate__fadeInDown">Conectados unos a otros</li>
            <li class="bg-yellow-50/50 text-xl p-2 rounded-lg shadow-sm mb-2 wow animate__animated animate__fadeInDown">Establecidos en el evangelio</li>
            <li class="bg-yellow-50/50 text-xl p-2 rounded-lg shadow-sm mb-2 wow animate__animated animate__fadeInDown">Multiplicación de Comunidades Kerigmáticas</li>
            <li class="bg-yellow-50/50 text-xl p-2 rounded-lg shadow-sm mb-2 wow animate__animated animate__fadeInDown">Bienestar de las ciudades</li>
        </ul>
        </div>
    </div>

    <!-- Cultura -->

    <div class="container mx-auto max-w-7xl px-6 grid lg:grid-cols-2 gap-4 py-6 lg:py-32 mb-16">
        <div class="flex items-center justify-center relative mb-10 md:mb-0">
        <div class="absolute inset-0 w-full h-full flex items-center justify-center">
            <h1 class="absolute text-7xl lg:text-9xl text-red-50 font-bold wow animate__animated animate__fadeInDown">Cultura</h1>
        </div>
        <h1 class="relative text-5xl text-red-500 text-center font-bold wow animate__animated animate__fadeInDown">Cultura</h1>
        </div>
        <div>
        <ul class="list-image-[url(images/cruz-peq.png)] list-inside">
            <li class="bg-yellow-50/50 text-xl p-2 rounded-lg shadow-sm mb-2 wow animate__animated animate__fadeInDown">Celebraciones Participativas y funcionales</li>
            <li class="bg-yellow-50/50 text-xl p-2 rounded-lg shadow-sm mb-2 wow animate__animated animate__fadeInDown">Estructura simple</li>
            <li class="bg-yellow-50/50 text-xl p-2 rounded-lg shadow-sm mb-2 wow animate__animated animate__fadeInDown">Educación Teológica basada en iglesia local</li>
            <li class="bg-yellow-50/50 text-xl p-2 rounded-lg shadow-sm mb-2 wow animate__animated animate__fadeInDown">Comunión y hospitalidad Genuina</li>
            <li class="bg-yellow-50/50 text-xl p-2 rounded-lg shadow-sm mb-2 wow animate__animated animate__fadeInDown">Espiritualidad Ferviente</li>
            <li class="bg-yellow-50/50 text-xl p-2 rounded-lg shadow-sm mb-2 wow animate__animated animate__fadeInDown">Liderazgo entrenado</li>
        </ul>
        </div>
    </div>

    <x-frontend.rb.layouts.bottom-banner>
        {{ __('"Transformar vidas a través del evangelio conectados en pequeñas comunidades
        formando una red de iglesias en continua multiplicación,
        procurando el bienestar de cada ciudad."') }}
    </x-frontend.rb.layouts.bottom-banner>

</x-frontend.rb.layouts.app>
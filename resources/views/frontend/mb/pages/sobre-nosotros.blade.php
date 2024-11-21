<x-frontend.mb.layouts.app>

    <x-slot name="header">
        {{ __('Sobre Nosotros') }}
    </x-slot>

    <div>
        <div class="max-w-5xl mx-auto px-6 text-center mb-16">
            <h1 class="mb-5 text-3xl text-red-500 lg:text-5xl font-bold uppercase wow animate__animated animate__fadeInDown">Quiénes Somos</h1>
            <p class="text-3xl font-bold font-ibarra animate__animated animate__fadeInDown">Ministerios Bendición (MB) tiene el proposito de expandir el evangelio en República Dominicana y el mundo. La prioridad principal es expandir el evangelio a través de la red de iglesias Bendición (Rb), ministerios educativos y ministerios comunitarios, entre otros ministerios orientados a servir y apoyar a las familias y a las iglesias.</p>
        </div>
    </div>

    <div class="bg-contain bg-repeat-x p-6 mb-20 shadow" style="background-image: url({{ asset('images/red-dots.png') }})">
        <div class="max-w-3xl mx-auto px-6 text-center mb-16">
            <div class="flex justify-center">
                <img class="wow animate__animated animate__fadeInDown h-64" src="{{ asset('images/mb-vision-icono.png') }}" alt="valores">
            </div>
            <h1 class="mb-10 mt-10 text-3xl text-red-500 lg:text-5xl font-bold uppercase wow animate__animated animate__fadeInDown">Visión</h1>
            <p class="text-3xl font-bold font-ibarra wow animate__animated animate__fadeInDown">
                <span class="text-red-500">Equipar</span> líderes que <span class="text-red-500">establezcan</span> la red de Iglesias Bendición y los ministerios orientados a <span class="text-red-500">servir</span> a la comunidad.
            </p>
        </div>
    </div>

    <div class="mb-20">
        <div class="max-w-3xl mx-auto px-6 text-center mb-16">
            <div class="flex justify-center">
                <img class="wow animate__animated animate__fadeInDown h-64" src="{{ asset('images/mb-mision-icono.png') }}" alt="mision">
            </div>
            <h1 class="mb-10 mt-10 text-3xl text-red-500 lg:text-5xl font-bold uppercase wow animate__animated animate__fadeInDown">Misión</h1>
            <p class="text-3xl font-bold font-ibarra wow animate__animated animate__fadeInDown">
                Seguir el ejemplo de <span class="text-red-500">Jesús</span> y los <span class="text-red-500">Apóstoles</span> al establecer iglesias en <span class="text-red-500">red</span>, mientras <span class="text-red-500">servimos</span> con amor, buscando el <span class="text-red-500">bienestar</span> de la ciudad.
            </p>
        </div>
    </div>

    <div class="bg-contain bg-repeat-x p-6 mb-20 shadow" style="background-image: url({{ asset('images/red-dots.png') }})">
        <div class="max-w-7xl mx-auto px-6 text-center mb-16">
            <h1 class="mb-10 text-3xl text-red-700 lg:text-5xl font-bold wow animate__animated animate__fadeInDown">Valores</h1>
            <p class="text-2xl italic wow animate__animated animate__fadeInDown"></p>
            <div class="flex justify-center">
                <img class="wow animate__animated animate__fadeInDown h-96" src="{{ asset('images/mb-valores.png') }}" alt="valores">
            </div>
        </div>
    </div>

    <x-frontend.mb.layouts.bottom-banner>
        {{ __('"Transformar vidas a través del evangelio conectados en pequeñas comunidades
        formando una red de iglesias en continua multiplicación,
        procurando el bienestar de cada ciudad."') }}
    </x-frontend.mb.layouts.bottom-banner>

</x-frontend.mb.layouts.app>
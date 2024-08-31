<x-frontend.mb.layouts.app>
    <x-slot name="header">
        {{ __('Red de Iglesias') }}
    </x-slot>

    <section class="container mx-auto max-w-7xl px-6">
        <h1 class="text-lg lg:text-3xl text-red-900 text-justify font-bold mb-6 wow animate__animated animate__fadeInDown">
            El apóstol Pablo utilizó las relaciones familiares (oikos) compuestas por redes de familias extendidas en todo el imperio romano. El genio de este movimiento en red fue la transformación de relaciones (oikos) a través de la predicación del Kerygma.
        </h1>
        <p class="text-base lg:text-lg text-red-700 text-justify wow animate__animated animate__fadeInDown">
            <strong>Las iglesias de los primeros tres siglos del cristianismo encontraron en las casas el lugar perfecto para su desarrollo, establecimiento y expansión. Pablo imaginaba una conexión entre los convertidos de una ciudad, región y provincia.</strong> Esa conexión era de manera natural a nivel de las casas en una ciudad, en una región y aun en todo un país. Las iglesias en casas que Pablo plantó, en otras palabras, eran parte de una unidad más grande. Estas iglesias estaban vinculadas por el liderazgo que ocasionalmente reunía a todas las iglesias en casas de un área.
        </p>
    </section>

    <section>
        <div class="container mx-auto max-w-7xl px-6 grid lg:grid-cols-2 gap-4 py-6 lg:py-32">
            <div class="flex items-center justify-center relative mb-10 md:mb-0">
            <div class="absolute inset-0 w-full h-full flex items-center justify-center">
                <h1 class="absolute text-7xl lg:text-9xl text-red-50 font-bold wow animate__animated animate__fadeInDown">Visión</h1>
            </div>
            <h1 class="relative text-5xl text-red-500 text-center font-bold wow animate__animated animate__fadeInDown">Visión</h1>
            </div>
            <div>
            <h1 class="text-xl font-bold text-justify text-red-900 mb-6 wow animate__animated animate__fadeInDown">
                Transformar vidas a través del evangelio conectados en pequeñas comunidades formando una red de iglesias en continua multiplicación, procurando el bienestar de cada ciudad.
            </h1>
            <p class="text-lg text-red-700 text-justify mb-6 wow animate__animated animate__fadeInDown">
                Como Red Bendición estableceremos iglesias en casas, en una comunidad, ciudad, municipio, provincia, y en toda República Dominicana y de manera global. Creemos que Dios nos ha llamado a formar una Red de redes donde todos podamos estar conectados en diferentes niveles. Desde las iglesias en casas que son los nodos de la red, los hubs o centros estratégicos que vinculan un grupo de iglesias en casas, hasta la red misma que vincula a todos los centros estratégicos.
            </p>
            <p class="text-lg text-red-700 text-justify wow animate__animated animate__fadeInDown">
                Nuestro sueño es ver la Rb desarrollarse hasta alcanzar nuestro país con el evangelio. El siguiente gráfico es un mapa que describe quienes somos y como nos vinculamos.
            </p>
        </div>
    </section>

    <section>
        <x-frontend.mb.layouts.mapa-iglesias />
    </section>
    
    <section class="coantainer mx-auto max-w-7xl px-6 py-12">
        <div class="card card-body shadow border">
            <img src="{{ asset('images/vision-red-bendicion.png') }}" class="h-auto w-full wow animate__animated animate__flipInY">
        </div>
    </section>

    <x-frontend.mb.layouts.bottom-banner>
        {{ __('"Las iglesias de los primeros tres siglos del cristianismo
            encontraron en las casas el lugar perfecto
            para su desarrollo, establecimiento y expansión."') }}
    </x-frontend.mb.layouts.bottom-banner>

</x-frontend.mb.layouts.app>
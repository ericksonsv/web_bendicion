<x-frontend.rb.layouts.app>

    <x-slot name="header">
        {{ __('Equipo Paulino') }}
    </x-slot>

    <section>
        <div class="container mx-auto max-w-7xl px-6">
            <h1 class="text-lg lg:text-3xl text-red-900 text-justify font-bold mb-6 wow animate__animated animate__fadeInDown">
                El equipo Paulino está compuesto por líderes sodales (los líderes sodales tienen un enfoque de ministerio nacional y global pero participan en el ministerio a nivel local). Estos líderes han sido dotados y dados a la iglesia con el propósito de "equipar a los santos para la obra del ministerio" (Efesios 4:11).
            </h1>
            <p class="text-base lg:text-lg text-red-700 text-justify wow animate__animated animate__fadeInDown">
                Su responsabilidad mayor radica en guiar toda la red de iglesias, estableciendo las iglesias existentes y guiando el proceso de plantación de nuevas iglesias en el país y de manera global; son los responsables de que se lleve a cabo el ciclo paulino. Como equipo lideran a los pastores de provincia-municio-ciudad y a los ancianos y líderes de las iglesias en casas en su trabajo de liderazgo modal (los líderes modales tienen un enfoque de ministerio local pero también participan en el ministerio nacional y global más amplio).
            </p>
        </div>
    </section>

    <section class="container mx-auto max-w-7xl px-6 py-32">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div>
                <img src="{{ asset('images/pastores/pastor-felix.jpeg') }}" class="rounded-2xl shadow-lg w-full h-auto wow animate__animated animate__flipInY" alt="Felix Abreu">
            </div>
            <div class="col-span-0 lg:col-span-2">
                <h1 class="text-3xl font-bold text-red-900 mb-6 wow animate__animated animate__fadeInDown wow animate__animated animate__fadeInDown">Félix y Ammerys Abreu</h1>
                <p class="text-justify text-lg text-red-700 mb-6 wow animate__animated animate__fadeInDown">
                    Félix y Amnerys Abreu han servido con Ministerios Bendición y Missions Door desde 1993. Han sido pastores en Las Coabas y actualmente en Evaristo Morales. Han sido instrumento en la plantación de cinco iglesias y el establecimiento de las dos iglesias que han pastoreado. Fundadores del Colegio Cristiano Berea y los sistemas de agua Bendición. Félix es Coordinador de Missions Door para el caribe y es el líder del equipo Paulino de la Red de iglesias Bendición.
                </p>
                <h1 class="text-3xl font-bold text-red-900 mb-6 wow animate__animated animate__fadeInDown wow animate__animated animate__fadeInDown">Historia de Fe y Familia</h1>
                <p class="text-justify text-lg text-red-700 mb-6 wow animate__animated animate__fadeInDown">
                    Félix Abreu nació en La Vega, República Dominicana en una familia cristiana católica. En 1986 inició una relación personal con Dios como cristiano evangélico para luego estudiar en el Seminario Teológico Centro Americano, en la ciudad de Guatemala. Casado con Amenrys Terrero desde 1989. Los Abreu’s tienen tres hijos: Kemuel (30), Estefany (27) y Félix David (25) y un precioso nieto (Thiago Daniel).
                </p>
                <h1 class="text-3xl font-bold text-red-900 mb-6 wow animate__animated animate__fadeInDown wow animate__animated animate__fadeInDown">Educación</h1>
                <ul class="list-disc pl-4 text-red-700 text-lg">
                    <li class="wow animate__animated animate__fadeInDown">Licenciado en Ciencias de la Computación</li>
                    <li class="wow animate__animated animate__fadeInDown">Licenciado en Teología por el Seminario Teológico Centroamericano</li>
                    <li class="wow animate__animated animate__fadeInDown">Maestría en Consejería Cristiana</li>
                    <li class="wow animate__animated animate__fadeInDown">Maestría en Liderazgo Organizacional</li>
                    <li class="wow animate__animated animate__fadeInDown">Doctor en Filosofía</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="py-32 bg-gray-50">
        <section class="container mx-auto max-w-7xl px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div>
                    <img src="{{ asset('images/pastores/pastor-eduardo.jpeg') }}" class="rounded-2xl shadow-lg w-full h-auto wow animate__animated animate__flipInY" alt="Eduardo Burgos">
                </div>
                <div class="col-span-0 lg:col-span-2">
                    <h1 class="text-3xl font-bold text-red-900 mb-6 wow animate__animated animate__fadeInDown">Eduardo y Olga Burgos</h1>
                    <p class="text-justify text-lg text-red-700 mb-6 wow animate__animated animate__fadeInDown">
                        Eduardo y Olga han servido en Ministerios Bendición como pastores en la comunidad de Las Caobas desde julio 2007. Actualmente lideran el equipo de ancianos de ICCB-Las Caobas. Su ministerio principal se ha enfocado en el desarrollo de líderes-servidores de la iglesia local y en la formación discipular. Eduardo lidera la gestión de Agua Bendición y forma parte del Consejo Ejecutivo de la Fundación Educativa Bendición (Colegio Cristiano Berea).
                    </p>
                    <h1 class="text-3xl font-bold text-red-900 mb-6 wow animate__animated animate__fadeInDown">Historia de Fe y Familia</h1>
                    <p class="text-justify text-lg text-red-700 mb-6 wow animate__animated animate__fadeInDown">
                        Eduardo Burgos nació en la ciudad de Santo Domingo. Conoció al Señor en octubre de 1992 en la Iglesia Bautista Redención (hoy ICCB-Ministerios Bendición). Desde su conversión se integró a las labores voluntarias en la iglesia local sirviendo en la adoración, finanzas y como asistente del pastor principal. Está casado con Olga Mercedes desde 1999 y tienen dos hijas: Aidyl y Elizabeth.
                    </p>
                    <h1 class="text-3xl font-bold text-red-900 mb-6 wow animate__animated animate__fadeInDown">Educación</h1>
                    <ul class="list-disc pl-4 text-red-700 text-lg">
                        <li class="wow animate__animated animate__fadeInDown">Licenciado en Economía</li>
                        <li class="wow animate__animated animate__fadeInDown">Estudios de Maestría en Matemáticas Puras</li>
                        <li class="wow animate__animated animate__fadeInDown">Estudiante de Maestría/Doctorado de la Escuela de Antioquía</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <section class="container mx-auto max-w-7xl px-6 py-32">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div>
                <img src="{{ asset('images/pastores/pastor-randy.jpeg') }}" class="rounded-2xl shadow-lg w-full h-auto wow animate__animated animate__flipInY" alt="Jaime Willmores">
            </div>
            <div class="col-span-0 lg:col-span-2">
                <h1 class="text-3xl font-bold text-red-900 mb-6 wow animate__animated animate__fadeInDown">Jaime y Bani Willmores</h1>
                <p class="text-justify text-lg text-red-700 mb-6 wow animate__animated animate__fadeInDown">
                    Jaime y Bani Willmores, participan en el ministerio de la iglesia Centro Cristiano Bendición de Constanza desde el año 2018. Han tenido el privilegio de capacitar a las parejas, el liderazgo, predicación y apoyar con la administración de la iglesia. En el futuro cercano iniciarán una labor de plantación de iglesias en la ciudad de Jarabacoa.
                </p>
                <h1 class="text-3xl font-bold text-red-900 mb-6 wow animate__animated animate__fadeInDown">Historia de Fe y Familia</h1>
                <p class="text-justify text-lg text-red-700 mb-6 wow animate__animated animate__fadeInDown">
                    Jaime Willmores, nació en la ciudad de Constanza, en una familia no cristiana. Depositó su fe en el Señor cerrando sus estudios de secundaria, en el año 2009. Fue enviado por Ministerios Bendición a cursar una Licenciatura en Teología a la Ciudad de Guatemala en el año 2014. En esta ciudad conoció a Bani Sandoval, de nacionalidad mexicana. Cuatro años después se casaron. Tienen una hija de dos años que lleva por nombre Zoe.
                </p>
                <h1 class="text-3xl font-bold text-red-900 mb-6 wow animate__animated animate__fadeInDown">Educación</h1>
                <ul class="list-disc pl-4 text-red-700 text-lg">
                    <li class="wow animate__animated animate__fadeInDown">Licenciatura en Biblia y Teología por el Seminario Teológico Centroamericano y la Universidad San Pablo de Guatemala.</li>
                    <li class="wow animate__animated animate__fadeInDown">Actualmente se encuentra cursando una Maestría en Ministerio de la Escuela de Antioquía</li>
                </ul>
            </div>
        </div>
    </section>

    <x-frontend.rb.layouts.bottom-banner>
        {{ __('"Su responsabilidad mayor radica en guiar toda la red de iglesias,
            estableciendo las iglesias existentes y guiando el proceso
            de plantación de nuevas iglesias en el país y de manera global."') }}
    </x-frontend.rb.layouts.bottom-banner>
    
</x-frontend.rb.layouts.app>
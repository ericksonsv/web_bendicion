<x-frontend.mb.layouts.app>
    
    <x-slot name="header">
        {{ __('Contacto') }}
    </x-slot>

    <section class="container mx-auto max-w-7xl px-6 mb-16">
        <div class="grid grid-col-12 lg:grid-cols-3 gap-4">

            <!-- Dirección -->
            <div class="hero rounded-2xl overflow-hidden wow animate__animated animate__fadeInDown"
                style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
                <div class="hero-overlay bg-yellow-950 bg-opacity-90"></div>
                <div class="hero-content text-neutral-content p-12">
                    <div class="max-w-md text-center flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-12 mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        <h1 class="mb-5 text-2xl font-bold text-center">Dirección</h1>
                        <p class="mb-5 text-center">
                            Calle 6ª #20, esquina Emilie Boyrie de Moya, Evaristo Morales, Santo Domingo,
                            República Dominicana
                        </p>
                    </div>
                </div>
            </div>

            <!-- Teléfono -->
            <div data-wow-delay="1s" class="hero rounded-2xl overflow-hidden wow animate__animated animate__fadeInDown"
                style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
                <div class="hero-overlay bg-yellow-950 bg-opacity-90"></div>
                <div class="hero-content text-neutral-content p-12">
                    <div class="max-w-md text-center flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-12 mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <h1 class="mb-5 text-2xl font-bold text-center">Teléfono</h1>
                        <p class="mb-5 text-center">
                            <a href="tel:809-566-6628">809-566-6628</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Correo -->
            <div data-wow-delay="2s" class="hero rounded-2xl overflow-hidden wow animate__animated animate__fadeInDown"
                style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
                <div class="hero-overlay bg-yellow-950 bg-opacity-90"></div>
                <div class="hero-content text-neutral-content p-12">
                    <div class="max-w-md text-center flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-12 mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <h1 class="mb-5 text-2xl font-bold text-center">Correo</h1>
                        <p class="mb-5 text-center">
                            <a href="mailto:rb@mb-rd.org">rb@mb-rd.org</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Formulario Contacto -->
    <section class="container mx-auto max-w-7xl px-6 mb-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 border rounded-2xl overflow-hidden shadow">
            <figure class="relative">
                <div class="absolute bg-yellow-950/90 inset-0"></div>
                <img src="../images/slideshow-05.jpeg" class="object-cover h-full w-full" alt="Album" />
            </figure>
            <div class="p-6 lg:p-12">
                <form action="" class="mb-6">
                    <!-- Nombre -->
                    <input type="text" class="input input-bordered w-full mb-6" name="nombre" placeholder="Nombre">
                    
                    <!-- Correo -->
                    <input type="email" class="input input-bordered w-full mb-6" name="email" placeholder="Correo">

                    <!-- Teléfono -->
                    <input type="tel" class="input input-bordered w-full mb-6" name="telefono" id="telefono" placeholder="Teléfono">

                    <!-- Mensaje -->
                    <textarea name="mensaje" class="textarea textarea-bordered w-full mb-6" id="mensaje" placeholder="Mensaje"></textarea>
                </form>
                <div class="card-actions justify-end">
                    <button class="btn btn-warning">Enviar Mensaje</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Mapa -->
    <section class="border rounded-2xl shadow">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d236.52822389787076!2d-69.94462394851836!3d18.463193221613558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sdo!4v1723483563105!5m2!1sen!2sdo" class="w-full" height="450" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

</x-frontend.mb.layouts.app>
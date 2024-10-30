<header class="sticky top-0 z-50">
    <nav class="navbar bg-base-100 shadow sticky top-0">
        <div class="flex-1">
            <a href="{{ route('rb.inicio') }}">
                <img src="{{ asset('images/logo-bendicion.svg') }}" class="h-12" alt="MB">
            </a>
            <a href="https://ccb-cloud.net/" target="_blank"
                class="btn btn-outline btn-warning btn-sm ml-4">CCB Cloud</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 hidden lg:flex gap-2">
                <x-frontend.rb.layouts.navigation-link :href="route('rb.inicio')" :active="request()->routeIs('rb.inicio')">
                    {{ __('Inicio') }}
                </x-frontend.rb.layouts.navigation-link>
                <x-frontend.rb.layouts.navigation-link :href="route('rb.sobre-nosotros')" :active="request()->routeIs('rb.sobre-nosotros')">
                    {{ __('Sobre Nosotros') }}
                </x-frontend.rb.layouts.navigation-link>
                <x-frontend.rb.layouts.navigation-link :href="route('rb.equipo-paulino')" :active="request()->routeIs('rb.equipo-paulino')">
                    {{ __('Equipo Paulino') }}
                </x-frontend.rb.layouts.navigation-link>
                <x-frontend.rb.layouts.navigation-link href="#" :active="request()->routeIs('rb.red-iglesias')">
                    {{ __('Proyectos') }}
                </x-frontend.rb.layouts.navigation-link>
                <x-frontend.rb.layouts.navigation-link :href="route('rb.contactos')" :active="request()->routeIs('rb.contactos')">
                    {{ __('Contactos') }}
                </x-frontend.rb.layouts.navigation-link>
            </ul>
            <ul class="menu menu-horizontal px-1 lg:hidden">
                <label for="my-drawer" class="btn btn-square">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block h-5 w-5 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </label>
            </ul>
        </div>
    </nav>
</header>
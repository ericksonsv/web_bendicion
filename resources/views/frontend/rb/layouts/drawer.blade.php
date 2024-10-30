<div class="drawer-side lg:hidden z-50">
    <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="menu bg-base-200 text-base-content min-h-full w-64 p-4 gap-2">
      <a href="{{ route('rb.inicio') }}" class="mb-6">
          <img src="{{ asset('images/logo-bendicion.svg') }}" class="h-12" alt="MB">
      </a>
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
  </div>
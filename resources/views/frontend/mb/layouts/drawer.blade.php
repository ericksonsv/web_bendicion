<div class="drawer-side lg:hidden z-50">
    <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="menu bg-base-200 text-base-content min-h-full w-64 p-4 gap-2">
      <a href="{{ route('mb.inicio') }}" class="mb-6">
          <img src="{{ asset('images/logo-bendicion.svg') }}" class="h-12" alt="MB">
      </a>
      <x-frontend.mb.layouts.navigation-link :href="route('mb.inicio')" :active="request()->routeIs('mb.inicio')">
          {{ __('Inicio') }}
      </x-frontend.mb.layouts.navigation-link>
      <x-frontend.mb.layouts.navigation-link :href="route('mb.sobre-nosotros')" :active="request()->routeIs('mb.sobre-nosotros')">
          {{ __('Sobre Nosotros') }}
      </x-frontend.mb.layouts.navigation-link>
      {{-- <x-frontend.mb.layouts.navigation-link :href="route('mb.equipo-paulino')" :active="request()->routeIs('mb.equipo-paulino')">
          {{ __('Equipo Paulino') }}
      </x-frontend.mb.layouts.navigation-link> --}}
      <x-frontend.mb.layouts.navigation-link href="#" :active="request()->routeIs('mb.equipo-paulino')">
        {{ __('Fundación Educativa Bendición') }}
      </x-frontend.mb.layouts.navigation-link>
      <x-frontend.mb.layouts.navigation-link href="#" :active="request()->routeIs('mb.equipo-paulino')">
        {{ __('Agua Bendición') }}
      </x-frontend.mb.layouts.navigation-link>
      {{-- <x-frontend.mb.layouts.navigation-link :href="route('mb.red-iglesias')" :active="request()->routeIs('mb.red-iglesias')">
          {{ __('Red de Iglesias') }}
      </x-frontend.mb.layouts.navigation-link> --}}
      <x-frontend.mb.layouts.navigation-link :href="route('mb.contactos')" :active="request()->routeIs('mb.contactos')">
          {{ __('Contactos') }}
      </x-frontend.mb.layouts.navigation-link>
    </ul>
  </div>
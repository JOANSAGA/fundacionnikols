<nav class="sticky top-0 z-40 flex-wrap bg-white shadow select-none overflow-ellipsis">
    <div class="container flex items-center justify-center w-4/5 py-2 m-auto">
        <x-pages_componentes.nav-link :href="route('inicio')" :active="request()->routeIs('inicio')">
            {{ __('inicio') }}
        </x-pages_componentes.nav-link>
        <x-pages_componentes.nav-link :href="route('nosotros')" :active="request()->routeIs('nosotros')">
            {{ __('nosotros') }}
        </x-pages_componentes.nav-link>
        <x-pages_componentes.nav-link :href="route('servicios')" :active="request()->routeIs('servicios')">
            {{ __('servicios') }}
        </x-pages_componentes.nav-link>
        <x-pages_componentes.nav-link :href="route('publicaciones')" :active="request()->routeIs('publicaciones')">
            {{ __('PUBLICACIONES') }}
        </x-pages_componentes.nav-link>
        <x-pages_componentes.nav-link :href="route('donaciones')" :active="request()->routeIs('donaciones')">
            {{ __('donaciones') }}
        </x-pages_componentes.nav-link>
        <x-pages_componentes.nav-link :href="route('contacto')" :active="request()->routeIs('contacto')">
            {{ __('contacto') }}
        </x-pages_componentes.nav-link>
    </div>
</nav>

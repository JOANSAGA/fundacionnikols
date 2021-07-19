<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fundación NIKOLS</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/icono.svg') }}" sizes="any">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="flex flex-col h-screen antialiased">
    <header class="select-none bg-primary">
        <div class="container flex flex-wrap items-center justify-center w-full py-2 mx-auto md:flex-nowrap md:justify-between md:w-4/5">
            <div class="w-56">
                <a href="{{ route('inicio') }}" title="inicio">
                    <x-application-logo-oscuro />
                </a>
            </div>
            <div class="">
                <span class="text-lg text-white lg:text-xl">VOCACIÓN, DEDICACIÓN Y SERVICIO</span>
            </div>
            <div class="w-40">
                <div class="flex justify-between w-100">
                    <div>
                        <a href="https://www.facebook.com/fundacionnikols" target="_blank">
                            <img src="{{ asset('\img\logosRedes\facebook.svg') }}" class="w-7" alt="enlace a nuestro facebook">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/fundacionnikols/" target="_blank">
                            <img src="{{ asset('\img\logosRedes\instagram.svg') }}" class="w-7" alt="enlace a nuestro instagram">
                        </a>
                    </div>
                    <div>
                        <a href="https://twitter.com/FundNIKOLS" target="_blank">
                            <img src="{{ asset('\img\logosRedes\twitter.svg') }}" class="w-7" alt="enlace a nuestro twitter">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.tiktok.com/@fundacionnikols" target="_blank">
                            <img src="{{ asset('\img\logosRedes\tiktok.svg') }}" class="w-7" alt="enlace a nuestro tik tok">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/channel/UCu7FJ0U863ARVSdx9zScdRQ" target="_blank">
                            <img src="{{ asset('\img\logosRedes\youtube.svg') }}" class="w-7" alt="enlace a nuestro tik tok">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main id="app" class="flex-grow pb-6">
        <x-pages_componentes.navigation />
        {{ $slot }}
    </main>
    <footer class="bg-primary">
        <x-pages_componentes.footer />
    </footer>
    <div class="container w-full mx-auto md:w-4/5">
        <div class="fixed z-50 flex items-center justify-center bottom-5 animate-bounce">
            <div class="flex items-center justify-center w-16 h-16 overflow-hidden rounded-full">
                <a href="http://" target="_blank">
                    <img src="{{ asset('\img\logosRedes\whatsapp.svg') }}" class="w-16" alt="enlace a nuestro whatsapp">
                </a>
            </div>
            <div class="p-2 ml-3 bg-white text-primary rounded-xl">
                <span>Escribenos!!!</span>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fundación NIKOLS</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="flex flex-col h-screen antialiased">
    <header class="hidden select-none bg-primary">
        <div class="container flex flex-wrap items-center justify-center w-full py-2 mx-auto md:w-4/5">
            <div class="w-56 mx-auto">
                <x-application-logo-oscuro />
            </div>
            <div class="mx-auto">
                <span class="text-white md:text-2xl sm:text-xl">VOCACIÓN, DEDICACIÓN Y SERVICIO</span>
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
</body>

</html>

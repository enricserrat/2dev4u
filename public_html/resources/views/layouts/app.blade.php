<!doctype html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <title>@yield('title')</title>
    <!-- css bootstrap 5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css 2dev4u -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- css 2dev4u pagina contacte -->
    <link rel="stylesheet" href="{{ asset('css/contacte.css') }}">
    <!-- css 2dev4u pagina qui som -->
    <link rel="stylesheet" href="{{ asset('css/qui-som.css') }}">
    <!-- css 2dev4u pagines serveis -->
    <link rel="stylesheet" href="{{ asset('css/serveis.css') }}">
    <!-- vite imports -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <!-- google maps api -->
    <script async
        src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_api_key') }}&callback=console.debug&libraries=maps,marker&v=beta">
    </script>
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/02ae4acaa4.js" crossorigin="anonymous"></script>
</head>


<body>

    {{-- MENÚ NAVBAR ------------------------------------------------------ --}}
    @include('layouts.includes.header')

    <main>

        {{-- solo se mostrará el banner si la cookie no existe o no tiene el valor 'accepted' o 'rejected' --}}
        @if (!request()->cookie('cookie_consent') || (request()->cookie('cookie_consent') !== 'accepted' && request()->cookie('cookie_consent') !== 'rejected'))
            @include('cookie_banner')
        @endif
        

        @yield('content')

    </main>

    <!-- FOOTER -------------------------------------------------------------->
    @include('layouts.includes.footer')

    <!-- JS BOOTSTRAP 5.3.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    @stack('scripts')



</body>

</html>

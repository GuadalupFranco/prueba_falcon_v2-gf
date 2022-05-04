<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="chrome windows fontawesome-i2svg-active fontawesome-i2svg-complete">
    <head>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        @include('assets.components.falcon-styles')
        @laravelPWA
    </head>
    <body class="font-sans antialiased">
        {{ $slot }}
        @include('assets.components.falcon-scripts')
        <script src="/vendors/typed.js/typed.js"></script>
    </body>
</html>
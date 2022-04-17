<!DOCTYPE html>
<html lang="en-US" dir="ltr" class="chrome windows fontawesome-i2svg-active fontawesome-i2svg-complete">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    @include('assets.components.falcon-styles')
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <div class="main" id="top">
        <div class="container" data-layout="container">
            @include('assets.components.side-bar')
            <div class="content">
                @include('assets.components.header')
                <main class="container my-5">
                    {{ $slot }}
                </main>
                @include('assets.components.footer')
            </div>
        </div>
    </div>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    @stack('modals')

    @livewireScripts

    @stack('scripts')
    @include('assets.components.button-configuration')
    @include('assets.components.falcon-scripts')
</body>

</html>

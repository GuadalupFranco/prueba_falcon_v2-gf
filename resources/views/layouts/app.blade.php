<!DOCTYPE html>
<html lang="en-US" dir="ltr" class="chrome windows fontawesome-i2svg-active fontawesome-i2svg-complete">

<head>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>    {{-- Para arreglar problemas dentro de la configuracion, eliminar esta linea --}}

    {{-- PD: No se si sea necesaria xd --}}


    @include('assets.components.falcon-styles')
    @laravelPWA
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

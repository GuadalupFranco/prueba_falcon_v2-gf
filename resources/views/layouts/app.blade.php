<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="chrome windows fontawesome-i2svg-active fontawesome-i2svg-complete" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

        @livewireStyles

        <!-- Scripts -->
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
        
        @include('assets.components.falcon-styles')
        <script defer src="//unpkg.com/alpinejs" defer></script>
    </head>
    <body>
        {{-- <x-jet-banner /> --}}
        {{-- @livewire('navigation-menu') --}}

        {{-- <!-- Page Heading -->
        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main class="container my-5">
            {{ $slot }}
        </main> --}}

        <div class="main" id="top">
            <div class="container" data-layout="container">
              @include('assets.components.side-bar')
              <div class="content">
                @include('assets.components.header')
                <main>
                  {{ $slot }}
                </main>
                @include('assets.components.footer')
              </div>
            </div>
          </div>

          @include('assets.components.button-configuration')

        @stack('modals')

        @livewireScripts

        @stack('scripts')

        @include('assets.components.falcon-scripts')
    </body>
</html>

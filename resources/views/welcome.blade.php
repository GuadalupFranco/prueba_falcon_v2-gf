<!DOCTYPE html>
<html lang="en-US" dir="ltr" class="chrome windows fontawesome-i2svg-active fontawesome-i2svg-complete">
  <head>
    @include('assets.components.falcon-styles')
  </head>

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <div class="main" id="top">
    <div class="container" data-layout="container">
      {{--@include('assets.components.top-bar')--}}
      @include('assets.components.side-bar')
      <div class="content">
        @include('assets.components.header')
        <main>
          @include('assets.components.mensajes')
          @yield('content')
        </main>
        @include('assets.components.footer')
      </div>
    </div>
  </div>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->
  @include('assets.components.button-configuration')
  @include('assets.components.falcon-scripts')
</body>
</html>
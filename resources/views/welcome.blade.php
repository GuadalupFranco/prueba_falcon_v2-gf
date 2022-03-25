<html lang="en-US" dir="ltr" class="chrome windows fontawesome-i2svg-active fontawesome-i2svg-complete">
  <head>
    @include('assets.components.falcon-head')
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
        <main>
          @yield('name')
        </main>
        @include('assets.components.footer')
      </div>
    </div>
  </div>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->
  @include('assets.components.button-configuration')
</body>
</html>
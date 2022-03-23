<html lang="en-US" dir="ltr" class="chrome windows fontawesome-i2svg-active fontawesome-i2svg-complete">
  <head>
    @include('components.falcon-head')
  </head>

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <div class="main" id="top">
    <div class="container" data-layout="container">
      @include('components.side-bar')
      <div class="content">
        @include('components.header')
        <main>
          @yield('name')
        </main>
        @include('components.footer')
      </div>
    </div>
  </div>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->
  @include('components.button-configuration')
</body>
</html>
<html lang="en-US" dir="ltr" class="chrome windows fontawesome-i2svg-active fontawesome-i2svg-complete">

<head>
    @include('assets.components.falcon-styles')
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <div class="main" id="top">
        <div class="container" data-layout="container">
            <div class="content">
                <main>
                    <main class="main" id="top">
                        <div class="container" data-layout="container">
                            <div class="row flex-center min-vh-100 py-6 text-center">
                                <div class="col-sm-10 col-md-8 col-lg-6 col-xxl-5"><a class="d-flex flex-center mb-4"
                                        href="/"><img class="me-2" src="/UPQ-logo.svg" alt="" width="58" /><span
                                            class="font-sans-serif fw-bolder fs-5 d-inline-block">SIIUPQ</span></a>
                                    <div class="card">
                                        <div class="card-body p-4 p-sm-5">
                                            <div class="fw-black lh-1 text-300 fs-error">@yield('code')</div>
                                            <p
                                                class="lead mt-4 text-800 font-sans-serif fw-semi-bold w-md-75 w-xl-100 mx-auto">
                                                @yield('title-error')
                                            </p>
                                            <hr />
                                            <p>@yield('message')<a href="mailto:info@exmaple.com">contáctenos</a>.</p>
                                            <a class="btn btn-primary btn-sm mt-3" href="/">
                                                <span class="fas fa-home me-1"></span>
                                                Ir a inicio
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </main>
                @include('assets.components.footer')
            </div>
        </div>
    </div>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    @include('assets.components.falcon-scripts')
</body>

</html>

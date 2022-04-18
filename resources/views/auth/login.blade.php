<x-guest-layout>
    <div class="container-fluid">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }

        </script>
        <div class="row min-vh-100 bg-100">
            <div class="col-7 d-none d-lg-block position-relative">
                <div class="bg-holder"
                    style="background-image:url(/UPQ-wallpaper.png);background-position: 50% 20%;">
                </div>
                <!--/.bg-holder-->
            </div>
            <div class="col-sm-10 col-md-10 col-lg-5 px-sm-0 align-self-center mx-auto py-5">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-10 col-xl-10 col-xxl-8">
                        <div class="card">
                            <div class="card-header text-center p-2">
                                <div class="d-flex align-items-center justify-content-center">
                                    <x-logo class="me-2" width="75"/>
                                    {{--<a class="font-sans-serif fw-bolder fs-4 z-index-1 position-relative link-light light" href="/">
                                        SIIUPQ
                                    </a>--}}
                                </div>
                                <hr>
                            </div>
                            <div class="card-body p-4 pt-0">
                                <div class="row flex-between-center">
                                    <div class="col-12 text-center">
                                        <h3 class="fw-light overflow-hidden">
                                            <span class="typed-text fw-bold ms-1" data-typed-text='["SIIUPQ","Bienvenido"]'></span></h3>
                                        {{--<h3>Bienvenido</h3>--}}
                                        <p class="small">Ingrese su usuario y contraseña para acceder</p>
                                    </div>
                                </div>
                                <x-jet-validation-errors class="mb-3 rounded-0" />

                                @if (session('status'))
                                <div class="alert alert-success mb-3 rounded-0" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <x-jet-label value="{{ __('Correo electrónico') }}" />

                                        <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            type="email" name="email" :value="old('email')" required />
                                        <x-jet-input-error for="email"></x-jet-input-error>
                                    </div>

                                    <div class="mb-3">
                                        <x-jet-label value="{{ __('Contraseña') }}" />

                                        <x-jet-input
                                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            type="password" name="password" required autocomplete="current-password" />
                                        <x-jet-input-error for="password"></x-jet-input-error>
                                    </div>

                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <x-jet-checkbox id="remember_me" name="remember" />
                                            <label class="custom-control-label" for="remember_me">
                                                {{ __('Recordar') }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-0">
                                        <div class="d-flex justify-content-end align-items-baseline">
                                            @if (Route::has('password.request'))
                                            <a class="text-muted me-3 small" href="{{ route('password.request') }}">
                                                {{ __('¿Olvidó su contraseña?') }}
                                            </a>
                                            @endif
                                            <button type="submit" class="btn btn-primary text-uppercase">
                                                {{ __('Acceder') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-12 fs--1 text-600 text-center mt-2">
                                    <span class="mb-0 fw-semi-bold">¿Nuevo usuario?</span>
                                    <span>
                                        <a href="{{ route('register') }}">
                                            Cree una cuenta
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

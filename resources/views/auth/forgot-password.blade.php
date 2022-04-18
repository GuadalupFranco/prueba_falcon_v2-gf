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
                <div class="bg-holder" style="background-image:url(/UPQ-wallpaper.png);background-position: 50% 20%;">
                </div>
                <!--/.bg-holder-->
            </div>
            <div class="col-sm-10 col-md-10 col-lg-5 align-self-center mx-auto">
                {{-- Primera opción --}}
                <div class="row flex-center min-vh-100 py-6">
                    <div class="col-lg-10 col-xl-10 col-xxl-8">
                        <div class="card">
                            <div class="card-header text-center p-2">
                                <div class="d-flex align-items-center justify-content-center">
                                    <x-logo class="me-2" width="75"/>
                                </div>
                                <hr>
                            </div>
                            <div class="card-body p-4 pt-0">
                                <h4 class="text-center mb-2">Recuperar contraseña</h4>
                                <div class="mb-3">
                                    {{ __('¿Olvidó su contraseña? Ingrese su dirección de correo electrónico y le enviaremos un correo electrónico con un enlace para resetear su contraseña.') }}
                                </div>
                    
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                    
                                <x-jet-validation-errors class="mb-3" />
                    
                                <form method="POST" action="/forgot-password">
                                    @csrf
                    
                                    <div class="mb-3">
                                        {{--<x-jet-label value="Email" />--}}
                                        <x-jet-input type="email" name="email" :value="old('email')" required autofocus placeholder="Correo electrónico"/>
                                    </div>
                    
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-primary text-uppercase">
                                            {{ __('Enviar enlace') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
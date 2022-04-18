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
                                {{--
                                <div class="col-12 text-center">
                                    <h3 class="fw-light overflow-hidden">
                                        <span class="typed-text fw-bold ms-1" data-typed-text='["SIIUPQ","Bienvenido"]'></span>
                                    </h3>
                                </div>
                                --}}
                                <div x-data="{ recovery: false }">
                                    <div class="mb-3" x-show="! recovery">
                                        <h4 class="text-center mb-2">Token de seguridad</h4>
                                        {{ __('Por favor confirme el acceso a su cuenta ingresando el token de autenticación que está en la aplicación de "Autenticador de Google".') }}
                                    </div>

                                    <div class="mb-2" x-show="recovery">
                                        <h4 class="text-center mb-2">Código de emergencia</h4>
                                        {{ __('Por favor confirma el acceso a tu cuenta ingresando uno de los códigos de emergencia.') }}
                                    </div>

                                    <x-jet-validation-errors class="mb-3" />

                                    <form method="POST" action="{{ route('two-factor.login') }}">
                                        @csrf

                                        <div class="mb-3" x-show="! recovery">
                                            {{--<x-jet-label value="{{ __('Token de autenticación') }}" />--}}
                                            <x-jet-input class="{{ $errors->has('code') ? 'is-invalid' : '' }}"
                                                type="text" inputmode="numeric" name="code" autofocus x-ref="code"
                                                autocomplete="one-time-code" placeholder="Token de autenticación" />
                                            <x-jet-input-error for="code"></x-jet-input-error>
                                        </div>

                                        <div class="mb-3" x-show="recovery">
                                            {{--<x-jet-label value="{{ __('Código de emergencia') }}" />--}}
                                            <x-jet-input class="{{ $errors->has('recovery_code') ? 'is-invalid' : '' }}"
                                                type="text" name="recovery_code" x-ref="recovery_code"
                                                autocomplete="one-time-code" placeholder="Código de emergencia" />
                                            <x-jet-input-error for="recovery_code"></x-jet-input-error>
                                        </div>

                                        <div class="d-flex justify-content-end mt-4 align-items-center">
                                            <a type="button" class="text-muted me-3 small" x-show="! recovery"
                                                x-on:click="
                                                    recovery = true;
                                                    $nextTick(() => { $refs.recovery_code.focus() })
                                                ">
                                                {{ __('Usar código de emergencia') }}
                                            </a>

                                            <a type="button" class="text-muted me-3 small" x-show="recovery"
                                                x-on:click="
                                                    recovery = false;
                                                    $nextTick(() => { $refs.code.focus() })
                                                ">
                                                {{ __('Usar token de autenticación') }}
                                            </a>

                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Acceder') }}
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
    </div>
</x-guest-layout>

<x-jet-action-section>
    <x-slot name="title">
        {{ __('Autenticación en dos factores') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Agregue seguridad adicional a su cuenta habilitando la autenticación en dos factores.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="h5 font-weight-bold">
            @if ($this->enabled)
                {{ __('Tiene habilitada la autenticación en dos factores.') }}
            @else
                {{ __('No tiene habilitada la autenticación en dos factores.') }}
            @endif
        </h3>

        <p class="mt-3 fs--1">
            {{ __('Cuando la autenticación en dos factores está habilitada, usted deberá iniciar sesión con su contraseña y un token de seguridad. Deberá obtener este token de su celular desde a aplicación de "Autenticador de Google".') }}
        </p>

        @if ($this->enabled)
            @if ($showingQrCode)
                <p class="mt-3">
                    {{ __('La autenticación en dos factores ahora está habilitada. Escanee el siguiente código QR usando su celular en la aplicación de "Autenticador de Google".') }}
                </p>

                <div class="mt-3">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <p class="mt-3">
                    {{ __('Guarde estos códigos de recuperación en un gestor seguro de contraseñas. Si por alguna razón no puede acceder a la aplicación de "Autenticador de Google" puede usar estos códigos para iniciar sesión.') }}
                </p>

                <div class="bg-light rounded p-3">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-3 float-end">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <button type="button" class="btn btn-outline-success text-uppercase" wire:loading.attr="disabled">
                        {{ __('Habilitar') }}
                    </button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <button type="button" class="me-3 btn btn-outline-primary">
                            <div wire:loading wire:target="regenerateRecoveryCodes" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                            {{ __('Generar nuevos códigos de recuperación') }}
                        </button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="me-3 btn btn-outline-info">
                            <div wire:loading wire:target="showRecoveryCodes" role="status">
                                <span class="visually-hidden">Cargando...</span>
                            </div>

                            {{ __('Mostrar códigos de recuperación') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <button wire:loading.attr="disabled" class="btn btn-outline-danger">
                        <div wire:loading wire:target="disableTwoFactorAuthentication" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>

                        {{ __('Deshabilitar') }}
                    </button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>
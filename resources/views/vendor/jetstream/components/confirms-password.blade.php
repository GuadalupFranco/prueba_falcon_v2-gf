@props(['title' => __('Confirmar contraseña'), 'content' => __('Por su seguridad, por favor confirme su contraseña a continuación.'), 'button' => __('Confirm')])

@php
    $confirmableId = md5($attributes->wire('then'));
@endphp

<span
    {{ $attributes->wire('then') }}
    x-data
    x-ref="span"
    x-on:click="$wire.startConfirmingPassword('{{ $confirmableId }}')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === '{{ $confirmableId }}' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);"
>
    {{ $slot }}
</span>

@once
<x-jet-dialog-modal wire:model="confirmingPassword">
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-slot name="content">
        {{ $content }}

        <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
            <x-jet-input type="password" class="{{ $errors->has('confirmable_password') ? 'is-invalid' : '' }}" placeholder="{{ __('Contraseña') }}"
                         x-ref="confirmable_password"
                         wire:model.defer="confirmablePassword"
                         wire:keydown.enter="confirmPassword" />

            <x-jet-input-error for="confirmable_password" />
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
            {{ __('Cancelar') }}
        </x-jet-secondary-button>

        <button class="ms-2 btn btn-outline-success text-uppercase" wire:click="confirmPassword" wire:loading.attr="disabled">
            <div wire:loading wire:target="confirmPassword" role="status">
                <span class="visually-hidden">Cargando...</span>
            </div>

            {{ __('Confirmar') }}
        </button>
    </x-slot>
</x-jet-dialog-modal>
@endonce

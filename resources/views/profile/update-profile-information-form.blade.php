<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Información del perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Actualiza la información de tu perfil.') }}
    </x-slot>

    <x-slot name="form">

        <x-jet-action-message on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="mb-3" x-data="{photoName: null, photoPreview: null}">
                <!-- Profile Photo File Input -->
                <input type="file" hidden
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Foto') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    @if(Auth::user()->profile_photo_path)
                        <img src="/storage/{{ Auth::user()->profile_photo_path }}" class="rounded-circle" height="100" width="100">
                    @else
                        <img src="{{ Auth::user()->profile_photo_url }}" class="rounded-circle" height="100" width="100">
                    @endif
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <img x-bind:src="photoPreview" class="rounded-circle" width="80px" height="80px">
                </div>

                <button type="submit" class="mt-2 me-2 btn btn-outline-primary text-uppercase" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Nueva foto') }}
				</button type="submit">
				
				@if ($this->user->profile_photo_path)
                    <button type="submit" class="mt-2 btn btn-outline-danger text-uppercase" wire:click="deleteProfilePhoto">
                        <div wire:loading wire:target="deleteProfilePhoto" role="status">
                            <span class="visually-hidden">Cargando...</span>
                        </div>

                        {{ __('Eliminar foto') }}
                    </button type="submit">
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <div class="w-md-75">
            <!-- Name -->
            <div class="mb-3">
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" wire:model.defer="state.name" autocomplete="name" />
                <x-jet-input-error for="name" />
            </div>

            <!-- Email -->
            <div class="mb-3">
                <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
                <x-jet-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" wire:model.defer="state.email" />
                <x-jet-input-error for="email" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
		<div class="d-flex align-items-baseline">
			<button class="btn btn-outline-success text-uppercase">
                <div wire:loading class="" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>

				{{ __('Guardar') }}
			</button>
		</div>
    </x-slot>
</x-jet-form-section>
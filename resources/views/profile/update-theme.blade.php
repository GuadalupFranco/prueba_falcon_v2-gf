<x-jet-form-section submit="">
    <x-slot name="title">
        {{ __('Seleccionar tema') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Seleccione el tema que más le guste para la barra lateral (en caso de que la tenga habilitada).') }}
    </x-slot>

    <x-slot name="form">
        <div class="flex btn-group d-block w-100 btn-group-navbar-style">
            <div class="row gx-2">
                <div class="col-6">
                    <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle"
                        value="transparent" data-theme-control="navbarStyle" checked="true">
                    <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent">
                        <img class="img-fluid img-prototype" src="/assets/img/generic/default.png" alt="">
                        <br>
                        <span class="label-text"> Transparent</span>
                    </label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle"
                        value="inverted" data-theme-control="navbarStyle">
                    <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted">
                        <img class="img-fluid img-prototype" src="/assets/img/generic/inverted.png" alt="">
                        <br>
                        <span class="label-text"> Inverted</span>
                    </label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle"
                        value="card" data-theme-control="navbarStyle">
                    <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card">
                        <img class="img-fluid img-prototype" src="/assets/img/generic/card.png" alt="">
                        <br>
                        <span class="label-text"> Card</span>
                    </label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle"
                        value="vibrant" data-theme-control="navbarStyle">
                    <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant">
                        <img class="img-fluid img-prototype" src="/assets/img/generic/vibrant.png" alt="">
                        <br>
                        <span class="label-text"> Vibrant</span>
                    </label>
                </div>
            </div>
        </div>
    </x-slot>
</x-jet-form-section>

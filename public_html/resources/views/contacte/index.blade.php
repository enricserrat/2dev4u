@extends('layouts.app')

@section('title', 'Contacte amb Nosaltres | 2dev4u')

@section('content')
    <!-- FORMULARI DE CONTACTE ------------------------------------->
    <div class="d-flex justify-content-center align-items-center bg-raisin py-5">
        <form id="contacte" action="{{ route('contacte.store') }}" method="POST">

            @csrf

            {{-- nom --}}
            <div class="mb-3">
                <label class="form-label" for="nom">nom</label>
                <input class="form-control" type="text" id="nom" name="nom" value="{{ old('nom') }}">
                @error('nom')
                    <div class="campos-requeridos bg-danger mb-3" style="margin-top: 8px;">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- email --}}
            <div class="mb-3">
                <label class="form-label" for="email">email</label>
                <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="campos-requeridos bg-danger mb-3" style="margin-top: 8px;">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- missatge --}}
            <div class="mb-3">
                <label class="form-label" for="missatge">el teu missatge...</label><br>
                <textarea id="missatge" name="missatge" rows="10" style="width: 100%;" value="{{ old('missatge') }}"></textarea>
                @error('missatge')
                    <div class="campos-requeridos bg-danger mb-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- form check --}}
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="privacy_policy" id="privacy_policy">
                <label class="form-check-label" for="privacy_policy">
                    Accepto la
                    <a href="{{ url('politica-privacitat') }}" target="_blank">
                        <span style="text-decoration: underline;">Política de Privacitat</span>.
                    </a>
                </label>
                @error('privacy_policy')
                    <div class="campos-requeridos bg-danger mb-3" style="margin-left: -24px; margin-top: 4px;">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- campo oculto para el token de reCAPTCHA -->
            <input type="hidden" id="recaptcha_token" name="recaptcha_token" value="">

            {{-- submit btn --}}
            <div style="position: relative; z-index: 2000;">
                <button class="mb-3 g-recaptcha" type="submit" data-sitekey="{{ config('services.google.recaptcha_site_key') }}"
                    data-callback='onSubmit' data-action='submit'>
                    <span>enviar</span>
                </button>
            </div>


            @if (session('info'))
                <div class="mensaje-enviado">
                    {{ session('info') }}
                </div>
            @endif

            @if ($errors->has('captcha'))
                <div class="alert alert-danger">
                    {{ $errors->first('captcha') }}
                </div>
            @endif
        </form>
    </div>

    <!-- GOOGLE MAP VIC -------------------------------------------------->
    <section id="map" style="height: 540px;">
        <gmp-map center="41.93055725097656,2.2544333934783936" zoom="14" map-id="23d2fbd11fb3bf79">
            <gmp-advanced-marker position="41.93055725097656,2.2544333934783936" title="2dev4u">
            </gmp-advanced-marker>
        </gmp-map>
    </section>
@endsection

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha_site_key') }}"></script>
    <script>
        function onSubmit(token) {
            // asignar token al campo oculto
            document.getElementById('recaptcha_token').value = token;
            // enviar formulario
            document.getElementById("contacte").submit();
        }
    </script>
@endpush

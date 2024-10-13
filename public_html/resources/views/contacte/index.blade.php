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

    <section id="map" style="height: 540px; width: 100%;"></section>

@endsection

@push('scripts')
    {{-- LEAFLET MAP --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-sA+4G5yjL/UXkv0Au+FQ6VIBX6FAi7uoIRxPqm1xOoU=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-oR9VNN7ONa6RyDL1Z0J0Xv1jH+iqOeT73UAX0C1njU4=" crossorigin=""></script>

    <style>
        .leaflet-tile {
            filter: hue-rotate(200deg) saturate(1.5) brightness(1);
        }

        #map {
            height: 540px;
            width: 100%;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([41.930557, 2.254433], 17); // Nivel de zoom inicial más alto

            // Usamos un proveedor de tiles con estilo minimalista
            L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                maxZoom: 22, // Aumentamos el nivel máximo de zoom
                attribution: '&copy; OpenStreetMap contributors &copy; CARTO',
            }).addTo(map);

            // Agregar marcador
            L.marker([41.930557, 2.254433]).addTo(map)
                .bindPopup('2dev4u<br> Ubicació de l\'empresa.')
                .openPopup();
        });
    </script>
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

@extends('layouts.app')

@section('title', 'Qui Som | Innovació i Creativitat en Desenvolupament Web | 2dev4u')

@section('content')
    <!-- QUI SOM --------------------------------------------------->
    <section id="qui-som">

        {{-- HERO IMAGE ----------------------------------------- --}}
        <div id="hero-image"></div>

        {{-- SOBRE NOSALTRES ------------------------------------ --}}
        <div class="items-qui-som padding-section">
            {{-- sobre nosaltres --}}
            <div class="item-qui-som py-5">
                <div class="text-column">
                    <h2>Sobre Nosaltres.</h2>
                    <p>
                        2dev4u és una empresa innovadora de desenvolupament web, creada per dos joves emprenedors
                        apassionats per
                        la tecnologia. El nostre equip, format per un expert en backend i un altre en frontend, es dedica a
                        crear solucions web personalitzades i atractives. Ens enfoquem en desenvolupar llocs web
                        d'e-commerce, aplicacions mòbils, i plataformes que requereixen solucions en temps real.
                    </p>
                </div>
                <div class="image-column">
                    <img src="{{ asset('img/sobre-nosaltres.jpeg') }}" alt="">
                </div>
            </div>

            <hr>

            {{-- el nostre objectiu --}}
            <div class="item-qui-som item-invertido py-5">
                <div class="text-column">
                    <h2>El Nostre Objectiu.</h2>
                    <p>
                        Volem revolucionar el sector del desenvolupament web amb idees fresques i innovadores.
                        El nostre objectiu és fusionar expertesa en backend i creativitat en frontend per crear solucions
                        web extraordinàries. Treballem amb tecnologies avançades com Laravel 10, PHP i
                        JavaScript, enfocant-nos en desenvolupar solucions robustes, dinàmiques i eficients.
                    </p>
                </div>
                <div class="image-column">
                    <img src="{{ asset('img/el-nostre-objectiu.jpg') }}" alt="">
                </div>
            </div>

            <hr>

            {{-- proposta de valor --}}
            <div class="item-qui-som py-5">
                <div class="text-column">
                    <h2>Proposta de valor.</h2>
                    <p>
                        2dev4u ajuda emprenedors, organitzacions i propietaris de productes a desenvolupar el seu negoci o
                        convertir les seves idees en productes oferint diversos models de col·laboració per treballar.

                        Agències Digitals ens contracten per escalar el seu equip de desenvolupament mentre els emprenedors
                        ens trien per al desenvolupament externalitzat de productes, actualització i suport.
                    </p>
                </div>
                <div class="image-column">
                    <img src="{{ asset('img/proposta-de-valor.jpg') }}" alt="">
                </div>
            </div>

        </div>

        @include('layouts.includes.contactSection')

    </section>
@endsection

@push('scripts')
    {{-- script que fa apereixer els items al fer scroll cap abaix (menys el primer item) --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // seleccionar todos los elementos 'item-qui-som' excepto el primero
            const itemsQuiSom = document.querySelectorAll('.item-qui-som:not(:first-child)');

            function isElementInViewport(el) {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function checkVisibility() {
                for (const item of itemsQuiSom) {
                    if (isElementInViewport(item)) {
                        item.classList.add('visible');
                    }
                }
            }

            window.addEventListener('scroll', checkVisibility);
            // ejecutar en la carga inicial por si algún elemento ya está en el viewport.
            checkVisibility();
        });
    </script>
@endpush

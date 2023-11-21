@extends('layouts.app')

@section('title', 'Disseny UI/UX Creatiu i Funcional | 2dev4u')

@section('content')
    <section id="servei-section">
        <!-- HERO CONTENT -->
        <div class="contenidor-hero py-5">
            <div class="serveis row no-gutters d-flex align-items-center">
                <div class="servei-hero col-md-8 text-left">
                    <h2>Disseny UI/UX Creatiu i Funcional</h2>
                    <p>En 2dev4u.es, ens especialitzem en crear solucions de disseny UI/UX que captiven i converteixen. El nostre enfocament estratègic combina creativitat amb usabilitat per desenvolupar interfícies atractives i intuïtives, optimitzades per a una interacció òptima de l'usuari.</p>
                </div>
                <div class="servei-gif col-md-4">
                    <img src="{{ asset('gif/disseny-ui-ux.gif') }}" alt="Disseny UI/UX" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- TARGETES PREU -->
        <div class="d-flex justify-content-center align-items-stretch flex-wrap py-5 targetes">
            {{-- targeta 1 --}}
            <div class="card mx-2" style="background: var(--blue);">
                <div class="header">
                    <span class="title">Paquet Iniciació UI/UX</span>
                    <span class="price">Des de 500€</span>
                </div>
                <p class="desc">Ideal per a startups i petits projectes que busquen un disseny bàsic però impactant.</p>
                <ul class="lists">
                    <li>Anàlisi de necessitats d'usuari</li>
                    <li>Disseny d'interfície bàsic</li>
                    <li>Prototipat ràpid i test d'usabilitat</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 2 --}}
            <div class="card mx-2">
                <div class="header">
                    <span class="title">Disseny UI/UX Professional</span>
                    <span class="price">Des de 1000€</span>
                </div>
                <p class="desc">Per a empreses que requereixen un disseny avançat, enfocat en la millora de la conversió.</p>
                <ul class="lists">
                    <li>Estratègia de disseny centrada en l'usuari</li>
                    <li>Creativitat i innovació en cada projecte</li>
                    <li>Optimització de la interacció i experiència d'usuari</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 3 --}}
            <div class="card mx-2" style="background: var(--blue);">
                <div class="header">
                    <span class="title">Solucions Completes de Disseny UI/UX</span>
                    <span class="price">Des de 1500€</span>
                </div>
                <p class="desc">Servei integral per a negocis que busquen una transformació digital completa.</p>
                <ul class="lists">
                    <li>Anàlisi aprofundida d'usuaris i mercat</li>
                    <li>Disseny innovador i personalitzat</li>
                    <li>Test i optimització contínua</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>
        </div>

        <!-- DESCRIPCIO 1 -->
        <div class="contenidor-item-2 py-5">
            <div class="servei-item-2 d-flex flex-column align-items-start">
                <h2>Disseny UI/UX Centrat en l'Usuari</h2>
                <p>El nostre equip de dissenyadors UI/UX treballa per comprendre a fons les necessitats dels usuaris, creant interfícies que no només són visualment atractives, sinó també fàcils d'utilitzar. Ens centrem en crear una experiència d'usuari que augmenti l'engagement i optimitzi la conversió.</p>
            </div>
        </div>

        <!-- DESCRIPCIO 2 -->
        <div class="contenidor-item py-5">
            <div class="servei-item d-flex flex-column align-items-start">
                <h2>Creativitat i Funcionalitat en Harmonia</h2>
                <p>Entenem que un gran disseny UI/UX és l'equilibri perfecte entre creativitat i funcionalitat. El nostre procés de disseny assegura que cada projecte sigui únic, oferint solucions creatives que també resolen problemes reals d'usabilitat i accessibilitat.</p>
            </div>
        </div>

                <!-- LOGOS TECNOLOGIES -->
                <h4 class="titulo-tecnologias pt-5" style="text-align: center">Tecnologies Clau en el nostre Servei de
                    Disseny UI/UX
                </h4>
                <!-- logos svg x bloques (correcto) -->
                <div class="logos-serveis logos-tecnologies pb-5">

                    <div class="logo-item invisible">
                        <a href="https://figma.com/" target="_blank">
                            <img class="img-fluid" src="/img/logos-tecnologies/serveis/figma.svg" alt="Logo de Figma"
                                title="GitHub">
                        </a>
                    </div>
        
                    <div class="logo-item invisible">
                        <a href="https://ca.wikipedia.org/wiki/JavaScript" target="_blank">
                            <img class="img-fluid" src="/img/logos-tecnologies/serveis/js.svg" alt="Logo de JavaScript"
                                title="JavaScript">
                        </a>
                    </div>
        
                    <div class="logo-item invisible">
                        <a href="https://laravel.com/" target="_blank">
                            <img class="img-fluid" src="/img/logos-tecnologies/serveis/laravel.svg" alt="Logo de Laravel"
                                title="Laravel">
                        </a>
                    </div>
        
                    <div class="logo-item invisible">
                        <a href="https://code.visualstudio.com/" target="_blank">
                            <img class="img-fluid" src="/img/logos-tecnologies/serveis/vscode.svg" alt="Logo de Visual Studio Code"
                                title="Visual Studio Code">
                        </a>
                    </div>
        
                    <div class="logo-item invisible">
                        <a href="https://github.com/" target="_blank">
                            <img class="img-fluid" src="/img/logos-tecnologies/serveis/github.svg" alt="Logo de GitHub"
                                title="GitHub">
                        </a>
                    </div>
        
                </div>

                @include('layouts.includes.contactSection')
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll('.contenidor-item, .contenidor-item-2');

            function checkVisibility() {
                const windowHeight = window.innerHeight;

                elements.forEach(element => {
                    const positionFromTop = element.getBoundingClientRect().top;

                    if (positionFromTop - windowHeight <= 0) {
                        element.classList.add('visible');
                    }
                });
            }

            window.addEventListener('scroll', checkVisibility);
            checkVisibility();
        });
    </script>

        <!-- JS LOGOS TECNOLOGIES -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const elements = document.querySelectorAll('.logo-item');
    
                function checkVisibility() {
                    const windowHeight = window.innerHeight;
    
                    elements.forEach(element => {
                        const positionFromTop = element.getBoundingClientRect().top;
    
                        if (positionFromTop - windowHeight <= 0) {
                            element.classList.remove('invisible');
                            element.classList.add('animate__animated', 'animate__fadeInUp');
                        }
                    });
                }
    
                window.addEventListener('scroll', checkVisibility);
                checkVisibility();
            });
        </script>
@endpush

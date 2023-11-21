@extends('layouts.app')

@section('title', 'Crea la teva App Mòbil amb Nosaltres | 2dev4u')

@section('content')
    <section id="servei-section">
        <!-- HERO CONTENT -->
        <div class="contenidor-hero py-5">
            <div class="serveis row no-gutters d-flex align-items-center">
                <div class="servei-hero col-md-8 text-left">
                    <h2>Desenvolupament d'Aplicacions <br>Mòbils Innovadores</h2>
                    <p>En 2dev4u.es, som especialistes en la creació d'aplicacions mòbils a mida, dissenyades per potenciar
                        el teu negoci. Desenvolupem aplicacions centrades en l'experiència de l'usuari, assegurant
                        funcionalitat, estètica i rendiment òptim en qualsevol dispositiu mòbil.</p>
                </div>
                <div class="servei-gif col-md-4">
                    <img src="{{ asset('gif/aplicacions-mobil.gif') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- TARGETES PREU -->
        <div class="d-flex justify-content-center align-items-stretch flex-wrap py-5 targetes">
            {{-- targeta 1 --}}
            <div class="card mx-2" style="background: var(--blue);">
                <div class="header">
                    <span class="title">Paquet Bàsic d'App Mòbils</span>
                    <span class="price">Des de 500€</span>
                </div>
                <p class="desc">Ideal per a startups i petites empreses, oferint una solució efectiva i accessible.</p>
                <ul class="lists">
                    <li>Disseny adaptat i funcional</li>
                    <li>Optimització SEO per a mòbils</li>
                    <li>Assessorament en usabilitat mòbil</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 2 --}}
            <div class="card mx-2">
                <div class="header">
                    <span class="title">Desenvolupament Avançat d'Apps</span>
                    <span class="price">Des de 1000€</span>
                </div>
                <p class="desc">Per a negocis que requereixen funcionalitats complexes i integracions personalitzades.</p>
                <ul class="lists">
                    <li>Interfícies personalitzades UX/UI</li>
                    <li>Integració amb serveis existents</li>
                    <li>SEO avançat i analítica mòbil</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 3 --}}
            <div class="card mx-2" style="background: var(--blue);">
                <div class="header">
                    <span class="title">Solucions Completes per a E-Commerce Mòbil</span>
                    <span class="price">Des de 1500€</span>
                </div>
                <p class="desc">Maximitza les vendes amb una app d'E-Commerce potent, segura i totalment personalitzada.
                </p>
                <ul class="lists">
                    <li>Integració de passarel·les de pagament</li>
                    <li>Disseny responsiu per a tots els dispositius</li>
                    <li>Estratègies de màrqueting digital mòbil</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta nova --}}
            <div class="card mx-2">
                <div class="header">
                    <span class="title">Solucions Empresarials Avançades</span>
                    <span class="price">Des de 2000€</span>
                </div>
                <p class="desc">Dissenyat per a grans empreses que necessiten funcionalitats i integracions a nivell
                    corporatiu.</p>
                <ul class="lists">
                    <li>Desenvolupament multiplataforma</li>
                    <li>Integració amb bases de dades complexes i sistemes existents</li>
                    <li>Assessorament estratègic i suport tècnic prioritari</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>
        </div>

        <!-- DESCRIPCIO 1 -->
        <div class="contenidor-item-2 py-5">
            <div class="servei-item-2 d-flex flex-column align-items-start">
                <h2>Desenvolupament d'Apps Mòbils a Mida</h2>
                <p>El nostre equip d'experts en desenvolupament d'aplicacions mòbils es dedica a transformar la teva visió
                    en una realitat tangible. Utilitzem les últimes tecnologies per a garantir aplicacions ràpides, segures
                    i intuïtives, proporcionant una experiència d'usuari insuperable i estratègies de posicionament SEO
                    específiques per a mòbils.</p>
            </div>
        </div>

        <!-- DESCRIPCIO 2 -->
        <div class="contenidor-item py-5">
            <div class="servei-item d-flex flex-column align-items-start">
                <h2>Optimització i Manteniment d'Apps</h2>
                <p>Entenem que el desenvolupament d'una app és només el començament. Oferim serveis de manteniment i
                    optimització continuats per assegurar que la teva aplicació segueixi sent competitiva, funcional i
                    segura amb l'evolució constant de la tecnologia mòbil.</p>
            </div>
        </div>

        <!-- LOGOS TECNOLOGIES -->
        <h4 class="titulo-tecnologias pt-5" style="text-align: center">Tecnologies Clau en el nostre Desenvolupament d'Apps
        </h4>
        <!-- logos svg x bloques (correcto) -->
        <div class="logos-serveis logos-tecnologies pb-5">

            <div class="logo-item invisible">
                <a href="https://ca.wikipedia.org/wiki/JavaScript" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/js.svg" alt="Logo de JavaScript"
                        title="JavaScript">
                </a>
            </div>

            <div class="logo-item">
                <a href="https://developer.android.com/studio" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/androidstudio.svg" alt="Logo de Android Studio"
                        title="Android Studio">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://laravel.com/" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/laravel.svg" alt="Logo de Laravel"
                        title="Laravel">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://www.mysql.com/" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/mysql.svg" alt="Logo de MySQL"
                        title="MySQL">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://code.visualstudio.com/" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/vscode.svg"
                        alt="Logo de Visual Studio Code" title="Visual Studio Code">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://getbootstrap.com/" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/bootstrap.svg" alt="Logo de Bootstrap"
                        title="Bootstrap">
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
@endsection

@push('scripts')
    <!-- JS CONTENIDOR ITEM -->
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

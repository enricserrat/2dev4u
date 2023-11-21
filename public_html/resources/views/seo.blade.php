@extends('layouts.app')

@section('title', 'Optimització de Motors de Cerca per a Empreses | 2dev4u')

@section('content')
    <section id="servei-section">
        <!-- HERO CONTENT -->
        <div class="contenidor-hero py-5">
            <div class="serveis row no-gutters d-flex align-items-center" style="margin-top: 27px; margin-bottom: 27px;">
                <div class="servei-hero col-md-8 text-left">
                    <h2>Estratègies SEO Avançades<br>Per a Màxim Impacte en Línia</h2>
                    <p>A 2dev4u.es, oferim serveis especialitzats de SEO per a millorar la visibilitat i el rendiment del
                        teu lloc web als motors de cerca. El nostre enfocament integral assegura que la teva pàgina web no
                        només atregui més trànsit, sinó que també engageu els usuaris correctes.</p>
                </div>
                <div class="servei-gif col-md-4">
                    <img src="{{ asset('gif/seo.gif') }}" alt="Estratègia SEO" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- TARGETES PREU -->
        <div class="d-flex justify-content-center align-items-stretch flex-wrap py-5 targetes">
            {{-- targeta 1 --}}
            <div class="card mx-2" style="background: var(--blue);">
                <div class="header">
                    <span class="title">SEO Bàsic per a Startups</span>
                    <span class="price">Des de 300€</span>
                </div>
                <p class="desc">Ideal per a petites empreses i startups que volen començar a millorar la seva presència en
                    línia.</p>
                <ul class="lists">
                    <li>Anàlisi de paraules clau i optimització on-page</li>
                    <li>Creació de contingut SEO amigable</li>
                    <li>Assessorament en estratègia digital</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 2 --}}
            <div class="card mx-2">
                <div class="header">
                    <span class="title">SEO Avançat per Empreses</span>
                    <span class="price">Des de 700€</span>
                </div>
                <p class="desc">Servei complet per a empreses que busquen una estratègia de SEO més profunda i àmplia.</p>
                <ul class="lists">
                    <li>Optimització avançada on-page i off-page</li>
                    <li>Estratègies de link building i contingut de qualitat</li>
                    <li>Monitorització i anàlisi de rendiment SEO</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 3 --}}
            <div class="card mx-2" style="background: var(--blue);">
                <div class="header">
                    <span class="title">Solucions SEO Personalitzades</span>
                    <span class="price">Des de 1000€</span>
                </div>
                <p class="desc">Per a negocis amb necessitats específiques que requereixen una estratègia SEO a mida.</p>
                <ul class="lists">
                    <li>Estudi i optimització personalitzada de paraules clau</li>
                    <li>Desenvolupament de contingut especialitzat</li>
                    <li>Anàlisi competitiva i estratègia de posicionament</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>
        </div>

        <!-- DESCRIPCIO 1 -->
        <div class="contenidor-item-2 py-5">
            <div class="servei-item-2 d-flex flex-column align-items-start">
                <h2>Maximitza la Teva Visibilitat en Línia</h2>
                <p>El nostre servei de SEO se centra en millorar la visibilitat del teu lloc web a través de tècniques
                    avançades i estratègies personalitzades. Treballem per entendre el teu públic objectiu i ajustar el
                    nostre enfocament per a atreure més trànsit de qualitat al teu lloc web.</p>
            </div>
        </div>

        <!-- DESCRIPCIO 2 -->
        <div class="contenidor-item py-5">
            <div class="servei-item d-flex flex-column align-items-start">
                <h2>Resultats Sostenibles a Llarg Termini</h2>
                <p>Entenem que el SEO és una estratègia a llarg termini i ens centrem en obtenir resultats sostenibles. A
                    través d'un treball constant i metòdic, assegurem que el teu lloc web no només millori el seu ranking,
                    sinó que també mantingui un rendiment excel·lent de forma continuada.</p>
            </div>
        </div>

        <!-- LOGOS TECNOLOGIES -->
        <h4 class="titulo-tecnologias pt-5" style="text-align: center">Tecnologies Clau en el nostre Servei SEO</h4>
        <!-- logos svg x bloques (correcto) -->
        <div class="logos-serveis logos-tecnologies pb-5">

            <div class="logo-item invisible">
                <a href="https://adsense.google.com/intl/es-419/start/" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/adsense.svg" alt="Logo de AdSense"
                        title="AdSense">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://marketingplatform.google.com/about/analytics/" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/google-analytics.svg" alt="Logo de Google Analytics"
                        title="Analytics">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://search.google.com/search-console/about" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/search-console.svg" alt="Logo de Google Search Console"
                        title="Search Console">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://es.semrush.com/" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/semrush.svg" alt="Logo de Google Semrush"
                        title="Semrush">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://ca.wikipedia.org/wiki/Hyper_Text_Markup_Language" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/html-5.svg" alt="Logo de HTML5"
                        title="HTML 5">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://code.visualstudio.com/" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/vscode.svg"
                        alt="Logo de Visual Studio Code" title="Visual Studio Code">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://wordpress.org/" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/wordpress.svg" alt="Logo de WordPress"
                        title="WordPress">
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

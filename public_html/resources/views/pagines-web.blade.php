@extends('layouts.app')

@section('title', 'Desenvolupament i Disseny de Pàgines Web | 2dev4u')

@section('content')
    <section id="servei-section">
        <!-- HERO CONTENT -->
        <div class="contenidor-hero py-5">
            <div class="serveis row no-gutters d-flex align-items-center">
                <div class="servei-hero col-md-8 text-left">
                    <h2>Desenvolupament Web a Mida<br>per a Negocis Innovadors</h2>
                    <p>A 2dev4u.es, oferim solucions personalitzades de desenvolupament web, adaptades específicament a les
                        necessitats del teu negoci. Amb un enfocament centrat en l'usuari, creem llocs web que no solament
                        són atractius visualment, sinó que també proporcionen una experiència d'usuari fluida i intuïtiva.
                    </p>
                </div>
                <div class="servei-gif col-md-4">
                    <img src="{{ asset('gif/pagines-webs.gif') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- TARGETES PREU -->
        <div class="d-flex justify-content-center align-items-stretch flex-wrap py-5 targetes">
            {{-- targeta 1 --}}
            <div class="card mx-2" style="background: var(--blue);">
                <div class="header">
                    <span class="title">Paquet WordPress Petites Empreses</span>
                    <span class="price">Des de 300€</span>
                </div>
                <p class="desc">Desenvolupament professional de llocs web amb WordPress, adaptat a les teves necessitats.
                </p>
                <ul class="lists">
                    <li>Disseny personalitzat i responsive</li>
                    <li>SEO inicial i optimització de velocitat</li>
                    <li>Formació bàsica per a gestió autònoma</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 2 --}}
            <div class="card mx-2">
                <div class="header">
                    <span class="title">Desenvolupament Personalitzat</span>
                    <span class="price">Des de 500€</span>
                </div>
                <p class="desc">Crea la teva web amb solucions a mida per un rendiment i disseny únics.</p>
                <ul class="lists">
                    <li>Arquitectura web exclusiva</li>
                    <li>Integració avançada de funcionalitats</li>
                    <li>SEO avançat i anàlisi de rendiment</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 3 --}}
            <div class="card mx-2" style="background: var(--blue);">
                <div class="header">
                    <span class="title">Solucions d'E-Commerce Professional</span>
                    <span class="price">Des de 700€</span>
                </div>
                <p class="desc">Impulsa el teu negoci en línia amb una botiga virtual robusta i atractiva.</p>
                <ul class="lists">
                    <li>Solucions de pagament segur</li>
                    <li>Optimització per a mòbils i SEO</li>
                    <li>Assessorament en màrqueting digital</li>
                    <li>Suport tècnic continu i actualitzacions de seguretat</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 4 --}}
            <div class="card mx-2">
                <div class="header">
                    <span class="title">Web Corporatiu Integral Premium</span>
                    <span class="price">Des de 1200€</span>
                </div>
                <p class="desc">Solucions integrals per a empreses que busquen excel·lir en el món digital.</p>
                <ul class="lists">
                    <li>Disseny web personalitzat amb enfocament UX/UI</li>
                    <li>Integració amb sistemes CRM i ERP</li>
                    <li>Suport i manteniment continuats</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>
        </div>

        <!-- DESCRIPCIO 1 -->
        <div class="contenidor-item-2 py-5">
            <div class="servei-item-2 d-flex flex-column align-items-start">
                <h2>Desenvolupament Web Professional</h2>
                <p>El nostre servei de desenvolupament web s'enfoca en crear solucions a mida per a petites empreses,
                    oferint plataformes robustes i eficaces amb WordPress. Entenem la importància d'un lloc web que no només
                    sigui visualment atractiu, sinó també funcional i fàcil de gestionar. Amb la nostra expertesa,
                    proporcionem dissenys personalitzats, optimitzats per a SEO, i oferim formació per a una gestió
                    autònoma, assegurant-te el control total del teu lloc web.</p>
            </div>
        </div>

        <!-- DESCRIPCIO 2 -->
        <div class="contenidor-item py-5">
            <div class="servei-item d-flex flex-column align-items-start">
                <h2>Seguretat i Manteniment</h2>
                <p>Apostem per l'excel·lència digital amb solucions E-Commerce avançades i webs corporatives integrals.
                    Entenem que cada negoci necessita una solució única per destacar en el món digital. El nostre equip
                    especialitzat en E-Commerce proporciona plataformes de venda en línia segures, optimitzades per a mòbils
                    i amb estratègies de màrqueting digital personalitzades. Per a empreses que busquen una presència
                    digital més àmplia.</p>
            </div>
        </div>

        <!-- LOGOS TECNOLOGIES -->
        <h4 class="titulo-tecnologias pt-5" style="text-align: center">Tecnologies Clau en el nostre Desenvolupament Web</h4>
        <!-- logos svg x bloques (correcto) -->
        <div class="logos-serveis logos-tecnologies pb-5">
            <div class="logo-item invisible">
                <a href="https://ca.wikipedia.org/wiki/Hyper_Text_Markup_Language" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/html-5.svg" alt="Logo de HTML5"
                        title="HTML 5">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://ca.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/css-3.svg" alt="Logo de CSS3" title="CSS 3">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://ca.wikipedia.org/wiki/JavaScript" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/js.svg" alt="Logo de JavaScript"
                        title="JavaScript">
                </a>
            </div>

            <div class="logo-item invisible">
                <a href="https://www.php.net/" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/php.svg" alt="Logo de PHP" title="PHP">
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
                <a href="https://wordpress.org/" target="_blank">
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/wordpress.svg" alt="Logo de WordPress"
                        title="WordPress">
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

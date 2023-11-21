@extends('layouts.app')

@section('title', 'Solucions CRM Personalitzades per a la Gestió Empresarial | 2dev4u')

@section('content')
    <section id="servei-section">
        <!-- HERO CONTENT -->
        <div class="contenidor-hero py-5">
            <div class="serveis row no-gutters d-flex align-items-center" style="margin-top: 38px; margin-bottom: 38px;">
                <div class="servei-hero col-md-8 text-left">
                    <h2>Creació de CRM Personalitzats<br>per a Gestió Empresarial</h2>
                    <p>A 2dev4u.es, desenvolupem solucions CRM a mida, adaptades a les necessitats úniques del teu negoci. El nostre enfocament és proporcionar eines potents i fàcils d'utilitzar que millorin la relació amb els clients i optimitzin els processos interns.</p>
                </div>
                <div class="servei-gif col-md-4">
                    <img src="{{ asset('gif/crm.gif') }}" alt="CRM Personalitzat" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- TARGETES PREU -->
        <div class="d-flex justify-content-center align-items-stretch flex-wrap py-5 targetes">
            {{-- targeta 1 --}}
            <div class="card mx-2" style="background: var(--blue);">
                <div class="header">
                    <span class="title">Paquet Bàsic CRM</span>
                    <span class="price">Des de 600€</span>
                </div>
                <p class="desc">Ideal per a petites empreses que volen començar a gestionar millor les seves relacions amb clients.</p>
                <ul class="lists">
                    <li>Funcionalitats bàsiques de CRM</li>
                    <li>Gestió de contactes i vendes</li>
                    <li>Integració amb eines existents</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 2 --}}
            <div class="card mx-2">
                <div class="header">
                    <span class="title">CRM Avançat Personalitzat</span>
                    <span class="price">Des de 1200€</span>
                </div>
                <p class="desc">Per a empreses que necessiten funcionalitats més complexes i una integració personalitzada.</p>
                <ul class="lists">
                    <li>Automatització de màrqueting i vendes</li>
                    <li>Anàlisi de dades i informes avançats</li>
                    <li>Personalització segons requisits específics</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 3 --}}
            <div class="card mx-2" style="background: var(--blue);">
                <div class="header">
                    <span class="title">Solució Integral de CRM</span>
                    <span class="price">Des de 2000€</span>
                </div>
                <p class="desc">Solucions completes de CRM per a empreses grans amb necessitats sofisticades i integració a gran escala.</p>
                <ul class="lists">
                    <li>CRM multimòdul personalitzat</li>
                    <li>Integració amb sistemes empresarials</li>
                    <li>Assistència tècnica i suport continu</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>
        </div>

        <!-- DESCRIPCIO 1 -->
        <div class="contenidor-item-2 py-5">
            <div class="servei-item-2 d-flex flex-column align-items-start">
                <h2>CRM Personalitzat per a Màxima Eficiència</h2>
                <p>Entenem que cada negoci és únic, i per això, els nostres CRM estan dissenyats per adaptar-se a les teves necessitats específiques. Ens centrem en crear una solució que no només millori la gestió de clients, sinó que també optimitzi tots els aspectes de la teva activitat comercial.</p>
            </div>
        </div>

        <!-- DESCRIPCIO 2 -->
        <div class="contenidor-item py-5">
            <div class="servei-item d-flex flex-column align-items-start">
                <h2>Tecnologia Avançada per a la Gestió de Relacions</h2>
                <p>El nostre equip utilitza les últimes tecnologies en el desenvolupament de CRM per a oferir solucions que no només són potents, sinó també fàcils d'utilitzar. Ens assegurem que cada CRM que creem sigui una eina valuosa per a la presa de decisions basada en dades i la millora de l'eficiència operativa.</p>
            </div>
        </div>

        <!-- LOGOS TECNOLOGIES -->
        <h4 class="titulo-tecnologias pt-5" style="text-align: center">Tecnologies Clau en el nostre Desenvolupament de CRMs</h4>
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

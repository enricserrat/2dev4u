@extends('layouts.app')

@section('title', 'Solucions Avançades de Ciberseguretat | 2dev4u')

@section('content')
    <section id="servei-section">
        <!-- HERO CONTENT -->
        <div class="contenidor-hero py-5">
            <div class="serveis row no-gutters d-flex align-items-center">
                <div class="servei-hero col-md-8 text-left">
                    <h2>Solucions Avançades de <br>Ciberseguretat</h2>
                    <p>En 2dev4u.es, oferim serveis especialitzats de ciberseguretat, dissenyats per protegir les teves
                        dades i operacions digitals. La nostra expertesa en seguretat informàtica garanteix solucions
                        completes per salvaguardar el teu negoci contra amenaces cibernètiques.</p>
                </div>
                <div class="servei-gif col-md-4">
                    <img src="{{ asset('gif/ciberseguretat.gif') }}" alt="Ciberseguretat" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- TARGETES PREU -->
        <div class="d-flex justify-content-center align-items-stretch flex-wrap py-5 targetes">
            {{-- targeta 1 --}}
            <div class="card mx-2" style="background: var(--blue);">
                <div class="header">
                    <span class="title">Paquet Bàsic de Seguretat</span>
                    <span class="price">Des de 400€</span>
                </div>
                <p class="desc">Serveis fonamentals per a la protecció de llocs web i dades empresarials.</p>
                <ul class="lists">
                    <li>Auditoria de seguretat inicial</li>
                    <li>Implementació de mesures preventives bàsiques</li>
                    <li>Assessorament en millors pràctiques de seguretat</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 2 --}}
            <div class="card mx-2">
                <div class="header">
                    <span class="title">Seguretat Empresarial</span>
                    <span class="price">Des de 800€</span>
                </div>
                <p class="desc">Protecció integral i personalitzada per a empreses amb necessitats complexes.</p>
                <ul class="lists">
                    <li>Monitorització i resposta a incidents</li>
                    <li>Solucions de xifrat avançades</li>
                    <li>Formació en conscienciació de seguretat</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>

            {{-- targeta 3 --}}
            <div class="card mx-2" style="background: var(--blue);">
                <div class="header">
                    <span class="title">Gestió Completa de Riscos</span>
                    <span class="price">Des de 1200€</span>
                </div>
                <p class="desc">Gestió de riscos i seguretat per a empreses que necessiten el màxim nivell de protecció.
                </p>
                <ul class="lists">
                    <li>Avaluació i gestió de riscos personalitzada</li>
                    <li>Plans de recuperació davant desastres</li>
                    <li>Serveis de resposta a incidents i suport continu</li>
                </ul>
                <a href="{{ url('contacte') }}" class="action button" role="button">Comença Ara</a>
            </div>
        </div>

        <!-- DESCRIPCIO 1 -->
        <div class="contenidor-item-2 py-5">
            <div class="servei-item-2 d-flex flex-column align-items-start">
                <h2>Estratègies Personalitzades de Ciberseguretat</h2>
                <p>Els nostres serveis de ciberseguretat s'enfoquen en comprendre i adaptar-se a les necessitats
                    específiques del teu negoci. Oferim una gamma completa de solucions, des d'auditories inicials fins a
                    estratègies de defensa en profunditat, per assegurar que les teves operacions digitals estiguin
                    protegides contra qualsevol tipus d'atac cibernètic.</p>
            </div>
        </div>

        <!-- DESCRIPCIO 2 -->
        <div class="contenidor-item py-5">
            <div class="servei-item d-flex flex-column align-items-start">
                <h2>Compromís amb la Seguretat i la Privacitat</h2>
                <p>Entenem la importància de la privacitat i la seguretat en el món digital actual. El nostre equip
                    d'experts en ciberseguretat treballa incansablement per mantenir-se al dia amb les últimes tendències i
                    tecnologies, per oferir-te les millors solucions per a la protecció de les teves dades i operacions en
                    línia.</p>
            </div>
        </div>

        <!-- LOGOS TECNOLOGIES -->
        <h4 class="titulo-tecnologias pt-5" style="text-align: center">Tecnologies Clau en el nostre Servei de
            Ciberseguretat
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
                    <img class="img-fluid" src="/img/logos-tecnologies/serveis/androidstudio.svg"
                        alt="Logo de Android Studio" title="Android Studio">
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

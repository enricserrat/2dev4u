@extends('layouts.app')

@section('title', 'Desenvolupament i Disseny Web & App a Vic, Barcelona')

@section('content')
    <!-- CAROUSEL HTML HERO CONTENT -------------------------------------->
    <section>
        <div class="carousel-container">
            <div class="carousel_items">
                <div class="carousel_item item1">
                    <p class="carousel_text">El teu equip de Desenvolupament Web & App a Vic.</p>
                </div>
                <div class="carousel_item item2">
                    <p class="carousel_text">Solucions Digitals de Primera Qualitat.</p>
                </div>
                <div class="carousel_item item3">
                    <p class="carousel_text">Tenim molt en compte la teva Ciberseguretat.</p>
                </div>
                <div class="carousel_item item4">
                    <p class="carousel_text">Disseny Web 100% Responsive.</p>
                </div>
                <div class="carousel_item item5">
                    <p class="carousel_text">Gràcies al SEO destacaràs més a Internet.</p>
                </div>
                <div class="carousel_item item1">
                    <p class="carousel_text">El teu equip de Desenvolupament Web & App a Vic.</p>
                </div>
                <div class="carousel_item item2">
                    <p class="carousel_text">Solucions Digitals de Primera Qualitat.</p>
                </div>
                <div class="carousel_item item3">
                    <p class="carousel_text">Tenim molt en compte la teva Ciberseguretat.</p>
                </div>
                <div class="carousel_item item4">
                    <p class="carousel_text">Disseny Web 100% Responsive.</p>
                </div>
                <div class="carousel_item item5">
                    <p class="carousel_text">Gràcies al SEO destacaràs més a Internet.</p>
                </div>
                <div class="carousel_item item1">
                    <p class="carousel_text">El teu equip de Desenvolupament Web & App a Vic.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- DESCRIPCIO DEL QUE FEM ------------------------------------------>
    <section class="bg-raisin padding-section" id="contenedor-raisin">
        <div class="container text-center">

            <div class="row justify-content-center">
                <!-- primera columna -->
                <div class="text-start mt-5 col-lg-4 col-12">
                    <h2 class="text-white">
                        Fem créixer el teu negoci
                    </h2>
                    <p class="text-white">
                        Al nostre equip, som especialistes en crear solucions web i d'aplicacions mòbils adaptades a
                        les teves necessitats. Entenem la importància d'una presència digital sòlida i estem
                        compromesos a dissenyar estratègies innovadores que impulsen el teu negoci en l'era digital.
                        <br><br>
                        Amb anys d'experiència i un equip de professionals dedicats, la teva satisfacció és la
                        nostra prioritat.
                    </p>
                </div>
                <!-- ilustracio fulles -->
                <div class="my-5 col-lg-4">
                    <img src="/img/illustrations/leaves.svg" alt="" draggable="false"
                        class="desc-img w-100 imagen-flotante pt-4">
                </div>
            </div>

            <p class="dominem">Dominem:</p>
            <!-- logos svg x bloques (correcto) -->
            <div class="logos-tecnologies pb-5">
                <div class="logo-item">
                    <a href="https://ca.wikipedia.org/wiki/Hyper_Text_Markup_Language" target="_blank">
                        <img class="img-fluid" src="/img/logos-tecnologies/html-5.svg" alt="Logo de HTML5" title="HTML 5">
                    </a>
                </div>

                <div class="logo-item">
                    <a href="https://ca.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank">
                        <img class="img-fluid" src="/img/logos-tecnologies/css-3.svg" alt="Logo de CSS3" title="CSS 3">
                    </a>
                </div>

                <div class="logo-item">
                    <a href="https://ca.wikipedia.org/wiki/JavaScript" target="_blank">
                        <img class="img-fluid" src="/img/logos-tecnologies/js.svg" alt="Logo de JavaScript"
                            title="JavaScript">
                    </a>
                </div>

                <div class="logo-item">
                    <a href="https://www.php.net/" target="_blank">
                        <img class="img-fluid" src="/img/logos-tecnologies/php.svg" alt="Logo de PHP" title="PHP">
                    </a>
                </div>

                <div class="logo-item">
                    <a href="https://laravel.com/" target="_blank">
                        <img class="img-fluid" src="/img/logos-tecnologies/laravel.svg" alt="Logo de Laravel"
                            title="Laravel">
                    </a>
                </div>

                <div class="logo-item">
                    <a href="https://www.mysql.com/" target="_blank">
                        <img class="img-fluid" src="/img/logos-tecnologies/mysql.svg" alt="Logo de MySQL" title="MySQL">
                    </a>
                </div>

                <div class="logo-item">
                    <a href="https://code.visualstudio.com/" target="_blank">
                        <img class="img-fluid" src="/img/logos-tecnologies/vscode.svg" alt="Logo de Visual Studio Code"
                            title="Visual Studio Code">
                    </a>
                </div>

                <div class="logo-item">
                    <a href="https://developer.android.com/studio" target="_blank">
                        <img class="img-fluid" src="/img/logos-tecnologies/androidstudio.svg" alt="Logo de Android Studio"
                            title="Android Studio">
                    </a>
                </div>

                <div class="logo-item">
                    <a href="https://getbootstrap.com/" target="_blank">
                        <img class="img-fluid" src="/img/logos-tecnologies/bootstrap.svg" alt="Logo de Bootstrap"
                            title="Bootstrap">
                    </a>
                </div>

                <div class="logo-item">
                    <a href="https://wordpress.org/" target="_blank">
                        <img class="img-fluid" src="/img/logos-tecnologies/wordpress.svg" alt="Logo de WordPress"
                            title="WordPress">
                    </a>
                </div>

                <div class="logo-item">
                    <a href="https://github.com/" target="_blank">
                        <img class="img-fluid" src="/img/logos-tecnologies/github.svg" alt="Logo de GitHub"
                            title="GitHub">
                    </a>
                </div>

                <div class="logo-item">
                    <a href="https://www.figma.com/" target="_blank">
                        <img class="img-fluid" src="/img/logos-tecnologies/figma.svg" alt="Logo de Figma"
                            title="Figma">
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ELS NOSTRES SERVEIS --------------------------------------------->
    <section class="padding-section">
        <div class="container text-center">
            <div class="row justify-content-center mb-3">
                <div class="text-start mt-5 col-lg-4 col-12">
                    <h2 class="h2-raisin">
                        Els nostres Serveis
                    </h2>
                </div>
                <div class="my-5 col-lg-4 d-none d-lg-block">
                    {{-- <img src="/img/illustrations/leaves.svg" alt="" class="desc-img w-100"> --}}
                </div>
            </div>

            <div class="ag-format-container">
                <div class="ag-courses_box pb-4">
                    <div class="ag-courses_item">
                        <a href="{{ url('pagines-web') }}" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                Pàgines Web
                            </div>
                        </a>
                    </div>

                    <div class="ag-courses_item">
                        <a href="{{ url('aplicacions') }}" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                Aplicacions
                            </div>
                        </a>
                    </div>

                    <div class="ag-courses_item">
                        <a href="{{ url('ciberseguretat') }}" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                Ciberseguretat
                            </div>
                        </a>
                    </div>

                    <div class="ag-courses_item">
                        <a href="{{ url('disseny-ui-ux') }}" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                Disseny UI/UX
                            </div>
                        </a>
                    </div>

                    <div class="ag-courses_item">
                        <a href="{{ url('crm') }}" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                CRMs
                            </div>
                        </a>
                    </div>

                    <div class="ag-courses_item">
                        <a href="{{ url('seo') }}" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                SEO
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- EL NOSTRE PROCES ------------------------------------------------>
    <section class="bg-raisin padding-section" id="contenedor-raisin">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="text-start mt-5 col-lg-4 col-12">
                    <h2>
                        El nostre Procés
                    </h2>
                </div>
                <div class="my-5 col-lg-4 d-none d-lg-block">
                    {{-- <img src="/img/illustrations/leaves.svg" alt="" class="desc-img w-100"> --}}
                </div>
            </div>

            <!-- pasos del nostre proces -->
            <div class="row pb-5">
                <div class="col-lg-2 col-md-4 col-sm-6" style="text-align: left;">
                    <div class="numeros-pasos">01</div>
                    <hr class="divisor-pasos">
                    <h5>Conversa</h5>
                    <div>
                        <span>
                            Comencem amb una anàlisi detallat per entendre els teus objectius i abast.
                        </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6" style="text-align: left;">
                    <div class="numeros-pasos con-margin">02</div>
                    <hr class="divisor-pasos">
                    <h5>Planificació</h5>
                    <div>
                        <span>
                            Elaborem un pla amb passos posteriors i establim un temps per crear un producte de
                            qualitat.
                        </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6" style="text-align: left;">
                    <div class="numeros-pasos con-margin">03</div>
                    <hr class="divisor-pasos">
                    <h5>Disseny</h5>
                    <div>
                        <span>
                            L'aplicació pren forma i es prepara un esquema per comprendre l'estètica del producte.
                        </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6" style="text-align: left;">
                    <div class="numeros-pasos con-margin">04</div>
                    <hr class="divisor-pasos">
                    <h5>Creació</h5>
                    <div>
                        <span>
                            Aquí és on donem vida al disseny, convertint-lo en codi i posant en marxa l'aplicació.
                        </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6" style="text-align: left;">
                    <div class="numeros-pasos con-margin">05</div>
                    <hr class="divisor-pasos">
                    <h5>QA & Testing</h5>
                    <div>
                        <span>
                            Realitzem proves exhaustives per assegurar-nos que tot funcioni sense errors i amb alta
                            qualitat.
                        </span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6" style="text-align: left;">
                    <div class="numeros-pasos con-margin">06</div>
                    <hr class="divisor-pasos">
                    <h5>Desplegament</h5>
                    <div>
                        <span>
                            Enviem el codi per a la seva posada en marxa en un servidor ràpid i segur.
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- FAQS ------------------------------------------------------------>
    <section class="padding-section">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="text-start mt-5 col-lg-4 col-12">
                    <h2 class="h2-raisin">
                        FAQs
                    </h2>
                </div>
                <div class="my-5 col-lg-4 d-none d-lg-block">
                    {{-- <img src="/img/illustrations/leaves.svg" alt="" class="desc-img w-100"> --}}
                </div>
            </div>

            <div class="accordion">
                <div class="question">
                    <h3>Només tinc una idea per al projecte, em podeu ajudar a tirar-lo endavant?</h3>
                </div>
                <div class="answer">
                    <p>
                        No et preocupis, som aquí per ajudar-te. Començant per una anàlisi detallat de la teva idea
                        fins a transformar-la en producte.
                    </p>
                </div>
            </div>

            <div class="accordion mt-2">
                <div class="question">
                    <h3>El meu projecte necessitarà millores i canvis continus?</h3>
                </div>
                <div class="answer">
                    <p>
                        Disposem de models de col·laboració personalitzats, ja sigui de desenvolupament, millora o
                        manteniment. Estàs cobert.
                    </p>
                </div>
            </div>

            <div class="accordion mt-2">
                <div class="question">
                    <h3>Com selecciona el vostre equip la tecnologia ideal per al meu projecte?</h3>
                </div>
                <div class="answer">
                    <p>
                        Segons els requisits de la vostra aplicació web, com quines funcionalitats es necessiten i
                        què s'adapta millor al seu model de negoci. Ja saps què vols? Encara millor!
                    </p>
                </div>
            </div>

            <div class="accordion mt-2 mb-5">
                <div class="question">
                    <h3>Com es gestiona el codi?</h3>
                </div>
                <div class="answer">
                    <p>
                        Utilitzem Github.
                    </p>
                </div>
            </div>

        </div>
    </section>

    @include('layouts.includes.contactSection')
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

    {{-- JS CAROUSEL --}}
    <script>
        const carouselItems = document.querySelectorAll(".carousel_item");
        let i = 1;
        const transitionTime = 0.5; // Tiempo de transición en segundos
        const intervalTime = 6000; // Tiempo entre iteraciones en milisegundos

        function transitionCarousel() {
            Array.from(carouselItems).forEach((item, index) => {
                if (i < carouselItems.length) {
                    item.style.transition = `transform ${transitionTime}s`; // Establece la transición
                    item.style.transform = `translateX(-${i * 100}%)`;
                } else {
                    // Cuando llegas al último elemento, restablece la transición y muestra el primer elemento sin transición
                    item.style.transition = 'none';
                    item.style.transform = `translateX(0)`;
                }
            });

            if (i < carouselItems.length) {
                i++;
            } else {
                i = 1; // Reinicia el índice para mostrar el primer elemento después del último
            }
            // Establece el tiempo para la próxima iteración
            setTimeout(transitionCarousel, intervalTime);
        }

        // Inicia la transición inicial
        setTimeout(transitionCarousel, intervalTime);
    </script>

    {{-- JS FAQS --}}
    <script>
        'use strict';

        const accordion = document.querySelectorAll('.accordion h3');
        let mainParent;
        let height;
        let answer;
        accordion.forEach(item => {
            item.addEventListener('click', () => {
                height = item.parentElement.nextElementSibling.firstElementChild.offsetHeight;
                answer = item.parentElement.nextElementSibling;
                mainParent = item.parentElement.parentElement;
                if (mainParent.classList.contains('active')) {
                    mainParent.classList.remove('active');
                    answer.style.height = `0px`;
                } else {
                    mainParent.classList.add('active');
                    answer.style.height = `${height}px`;
                }
            });
        });
    </script>
@endpush

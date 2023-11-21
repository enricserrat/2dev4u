    <nav class="navbar sticky-top navbar-expand-lg bg-white" style="z-index: 9999;">
        <div class="container-fluid justify-content-center">

            {{-- logo barra navegacio --}}
            <a class="logo-navbar" href="/"><img src="img/24u-logos/logo-2dev4u.svg" alt="" draggable="false"
                    height="62px"></a>

            {{-- btn toggle menu responsive --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- div amb links del menu --}}
            <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Serveis
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('pagines-web') }}">Pàgines Web</a></li>
                            <li><a class="dropdown-item" href="{{ url('aplicacions') }}">Aplicacions</a></li>
                            <li><a class="dropdown-item" href="{{ url('ciberseguretat') }}">Ciberseguretat</a></li>
                            <li><a class="dropdown-item" href="{{ url('disseny-ui-ux') }}">Disseny UI/UX</a></li>
                            <li><a class="dropdown-item" href="{{ url('crm') }}">CRMs</a></li>
                            <li><a class="dropdown-item" href="{{ url('seo') }}">SEO</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Projectes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">(properament)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('qui-som') }}">Qui som</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contacte') }}" class="{{request()->routeIs('contacte.index')}}">Contacte</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


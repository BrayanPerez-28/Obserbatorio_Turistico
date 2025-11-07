<nav class="navbar custom-navbar navbar-expand-md fixed-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('image/huaquechulaLogo.png') }}" alt="Logo" style="height: 70px; width: auto;">
            </a>

            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú offcanvas -->
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="mobileMenuLabel">Menú</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/mapa') }}">Mapa</a></li>
                        <ul class="submenu">
                            <li><a class="nav-link submenu-item" href="{{ url('/login') }}">Iniciar sesión</a></li>
                            <li><a class="nav-link submenu-item" href="{{ url('/encuesta') }}">Encuesta</a></li>
                        </ul>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/repositorio') }}">Repositorio</a></li>
                    </ul>
                </div>
            </div>

            <!-- Menú horizontal -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex justify-content-around w-75">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/mapa') }}">Mapa</a></li>
                    <!-- Encuesta con submenú personalizado para escritorio -->
                    <li class="nav-item has-submenu">
                        <a class="nav-link submenu-toggle" href="#">
                            Encuesta <span class="submenu-arrow">▼</span>
                        </a>
                        <ul class="submenu">
                            <li><a class="nav-link submenu-item" href="{{ url('/encuesta') }}">Encuesta</a></li>
                            <li><a class="nav-link submenu-item" href="{{ url('/login') }}">Iniciar sesión</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/repositorio') }}">Repositorio</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pueblo Huaquechula, Puebla</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <link rel="stylesheet" href="{{ asset('css/base.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mapa.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="{% static 'myapp/JAV/java.js' %}" defer></script>
</head>
<body>
    
    @include('partials.navbar')


    <!-- CONTENIDO PRINCIPAL -->
    <div class="container" style="margin-top: 100px;">
        <header>
            <h1>Pueblo Huaquechula</h1>
            <p class="subtitle">Municipio de Puebla, México</p>
        </header>
        
        <div class="content">
            <div class="map-container">
                <div id="map"></div>
            </div>
            
            <div class="info-panel">
                <h2 class="info-title">Sobre Huaquechula</h2>
                <p class="info-text">Huaquechula es un municipio del estado de Puebla, México. Se localiza al suroeste de la ciudad de Puebla y es conocido por su rica historia, arquitectura colonial y tradiciones únicas como las ofrendas monumentales del Día de Muertos.</p>
                
                <div class="highlight">
                    <p>El pueblo se encuentra a una altitud de 1,620 metros sobre el nivel del mar y su nombre proviene del náhuatl "Huaquechollan", que significa "Lugar de hermosos plumajes".</p>
                </div>
                
                <div class="features">
                    <div class="feature">
                        <div class="feature-icon">🏛️</div>
                        <h3>Arquitectura</h3>
                        <p>Destaca el Ex-Convento de San Martín de Tours, construido en el siglo XVI.</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">🎭</div>
                        <h3>Tradiciones</h3>
                        <p>Famoso por sus ofrendas monumentales durante el Día de Muertos.</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">🌄</div>
                        <h3>Paisaje</h3>
                        <p>Rodeado de cerros y con vistas panorámicas del valle de Atlixco.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Mapa interactivo de Huaquechula, Puebla | © OpenStreetMap contributors</p>
    </footer>

    <script src="{{ asset('js/java.js') }}"></script>
</body>
</html>
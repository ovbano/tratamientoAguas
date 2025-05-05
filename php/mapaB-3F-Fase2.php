<?php
// Este archivo ahora contendrá el código JavaScript para Leaflet
?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
// Constantes para los iconos
const image1 = "../img/marcadores/mm_20_gray.png";
const image2 = "../img/marcadores/mm_20_green.png";
const image5 = "../img/marcadores/mm_20_red.png";

const lInf = <?php echo $lInf; ?>;
const lSup = <?php echo $lSup; ?>;

// Función para determinar el color del marcador (igual que antes)
function colorMarcador(valor){
    if("<?php echo $nameMapa; ?>" == "Coliformes Fecales, NMP/100ml_1"){
        if (valor == "Ausencia ") {
            return image2;
        }else {
            return image5;
        }
    } else {
        if (isNaN(valor) || valor === "") {
            return image1;
        }
        
        if (valor >= lInf && valor <= lSup) {
            return image2;
        } else {
            return image5;
        }
    }
}

// Función para inicializar el mapa con Leaflet
function initLeafletMap() {
    // Verificar que el elemento del mapa exista
    var mapElement = document.getElementById('mapa');
    if (!mapElement) {
        console.error('Elemento del mapa no encontrado');
        return;
    }

    // Crear iconos personalizados para Leaflet
    var grayIcon = L.icon({
        iconUrl: image1,
        iconSize: [20, 20],
        iconAnchor: [10, 10]
    });
    
    var greenIcon = L.icon({
        iconUrl: image2,
        iconSize: [20, 20],
        iconAnchor: [10, 10]
    });
    
    var redIcon = L.icon({
        iconUrl: image5,
        iconSize: [20, 20],
        iconAnchor: [10, 10]
    });

    // Inicializar el mapa centrado en una ubicación por defecto
    var map = L.map('mapa').setView([-0.3864, -79.3687], 12);

    // Añadir capa base de OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Crear múltiples marcadores desde la Base de Datos 
    var marcadores = [
        <?php include(__DIR__.'/marcadores-3FM-Fase2.php'); ?>
    ];

    // Crear un grupo de capas para los marcadores
    var markers = L.layerGroup().addTo(map);
    var bounds = L.latLngBounds();

    for (var i = 0; i < marcadores.length; i++) {
        var lat = marcadores[i][1];
        var lng = marcadores[i][0];
        var position = [lat, lng];
        bounds.extend(position);

        // Determinar el icono según el valor
        var icono;
        if(colorMarcador(marcadores[i][3]) === image1) {
            icono = grayIcon;
        } else if(colorMarcador(marcadores[i][3]) === image2) {
            icono = greenIcon;
        } else {
            icono = redIcon;
        }

        // Crear marcador
        var marker = L.marker(position, {
            icon: icono,
            title: marcadores[i][2]
        }).addTo(markers);

        // Añadir evento click (similar al original)
        marker.on('click', function(e) {
            var mapForm = document.createElement("form");
            mapForm.target = "_self";
            mapForm.method = "POST";
            mapForm.action = "../leer-final.php";

            var mapInput = document.createElement("input");
            mapInput.type = "hidden";
            mapInput.name = "id";
            mapInput.value = this.options.title;
            mapForm.appendChild(mapInput);

            document.body.appendChild(mapForm);
            mapForm.submit();
        });
    }

    // Ajustar el zoom para mostrar todos los marcadores
    if (marcadores.length > 0) {
        map.fitBounds(bounds, {maxZoom: 15});
    }
}

// Inicializar el mapa cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    initLeafletMap();
});
</script>
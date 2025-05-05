<?php 
/*include('./php/conexion.php');
if (!isset($_POST['buscar'])){$_POST['buscar'] = '';} 
if (!isset($_POST['contador'])){$_POST['contador'] = '';} 
$consulta = "SELECT * FROM encuesta_final";
$result = $con ->query($consulta);*/
?>


<!doctype html>
<html lang="es">
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>


    

    <script type="text/javascript">
    function initMap() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };

        map = new google.maps.Map(document.getElementById('mapa'), {
            mapOptions
        });

        map.setTilt(50);

        // Crear múltiples marcadores desde la Base de Datos 
        var marcadores = [
            <?php include('./php/marcadores.php'); ?>
        ];

        // Creamos la ventana de información con los marcadores 
        var mostrarMarcadores = new google.maps.InfoWindow(),
        marcadores, i;
        const image1 ="./img/marcadores/mm_20_gray.png";
        const image2 ="./img/marcadores/mm_20_green.png";
        const image3 ="./img/marcadores/mm_20_orange.png";
        const image4 ="./img/marcadores/mm_20_purple.png";
        const image5 ="./img/marcadores/mm_20_red.png";
        const image6 ="./img/marcadores/mm_20_lila.png";
        const image7 ="./img/marcadores/mm_20_skyblue.png";
        const image8 ="./img/marcadores/mm_20_white.png";
        const image9 ="./img/marcadores/mm_20_yellow.png";
        const image10 ="./img/marcadores/mm_20_blue.png";
        const image11 ="./img/marcadores/mm_20_brown.png";
        // Colocamos los marcadores en el Mapa de Google 
        
        for (i = 0; i < marcadores.length; i++) {
            var position = new google.maps.LatLng(marcadores[i][1], marcadores[i][2]);
            //console.log(marcadores[i][3]);
            
            if(marcadores[i][3]=="Gkdela"){
                //console.log(marcadores[i][3]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: marcadores[i][0],
                    icon: image1
                });
            }
            
            if(marcadores[i][3]=="aksosa"){
                //console.log(marcadores[i][3]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: marcadores[i][0],
                    icon: image2
                });
            }

            if(marcadores[i][3]=="msbermeo1"){
                //console.log(marcadores[i][3]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: marcadores[i][0],
                    icon: image3
                });
            }

            if(marcadores[i][3]=="mmnarvaez3"){
                //console.log(marcadores[i][3]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: marcadores[i][0],
                    icon: image4
                });
            }
            
            if(marcadores[i][3]=="kngiler"){
                //console.log(marcadores[i][3]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: marcadores[i][0],
                    icon: image5
                });
            }

            if(marcadores[i][3]=="aeabarca1"){
                //console.log(marcadores[i][3]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: marcadores[i][0],
                    icon: image6
                });
            }

            if(marcadores[i][3]=="jlmontoya"){
                //console.log(marcadores[i][3]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: marcadores[i][0],
                    icon: image7
                });
            }

            if(marcadores[i][3]=="jalapo1"){
                //console.log(marcadores[i][3]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: marcadores[i][0],
                    icon: image8
                });
            }

            if(marcadores[i][3]=="12345"){
                //console.log(marcadores[i][3]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: marcadores[i][0],
                    icon: image9
                });
            }

            if(marcadores[i][3]=="acverduga"){
                //console.log(marcadores[i][3]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: marcadores[i][0],
                    icon: image10
                });
            }

            if(marcadores[i][3]=="jsalvear1"){
                //console.log(marcadores[i][3]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: marcadores[i][0],
                    icon: image11
                });
            }

            // Colocamos la ventana de información a cada Marcador del Mapa de Google 
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    //mostrarMarcadores.setContent(ventanaInfo[i][0]);
                    //mostrarMarcadores.open(map, marker);
                }
            })(marker, i));

            // Centramos el Mapa de Google para que todos los marcadores se puedan ver 
            map.fitBounds(bounds);
        }

        // Aplicamos el evento 'bounds_changed' que detecta cambios en la ventana del Mapa de Google, también le configramos un zoom de 14 
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(10);
            google.maps.event.removeListener(boundsListener);
        });

    }

    // Lanzamos la función 'initMap' para que muestre el Mapa con Los Marcadores y toda la configuración realizada 
    google.maps.event.addDomListener(window, 'load', initMap);
    </script>

<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvZX0GoEzqfo90MKNidUzliqGHk_L0brc&callback=initMap">
    </script>
</body>
</html>
<?php

  // Archivo de Conexión a la Base de Datos 
  include('conexion.php');

  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $result = mysqli_query($con, "SELECT * FROM encuesta_final WHERE latitud_pers != 'Longitud'");

  // Seleccionamos los datos para crear los marcadores en el Mapa de Google serian nombre,direccion, lat, lng
  while ($row = mysqli_fetch_array($result)) {
    echo '["' . $row['nombre_pers'] . ', ' . $row['direccion_pers'] . '", '. $row['longitud_pers'] . ', ' . $row['latitud_pers'] . ','.'"'. $row['id_encuestador'] . '"'.'],';
  }
?>

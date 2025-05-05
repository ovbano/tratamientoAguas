<?php

  // Archivo de Conexión a la Base de Datos 
  include('conexion.php');

  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $result = mysqli_query($con, "SELECT * FROM appexactas.encuesta2");

  // Seleccionamos los datos para crear los marcadores en el Mapa de Google serian nombre,direccion, lat, lng
  //    echo '["' . $row['nombrePersona_enc2'] . ', ' . $row['id_encuestador'] . '", '. $row['longitud'] . ', ' . $row['latitud'] . ','.'"'. $row['analisiMicrobiologico48'] . '"'.'],';
  
  while ($row = mysqli_fetch_array($result)) {
    
    if(is_null($row[$nameMapa])){
      $row[$nameMapa]='0';
    }
    
    echo '["'. $row[$nameMapa] . '", '. $row['longitud'] . ', ' . $row['latitud'] . ', ' . $row['id_enc2'] .'],';
  }
?>


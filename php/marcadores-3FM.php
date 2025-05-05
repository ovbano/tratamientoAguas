<?php
// Desactivar visualización de errores y warnings
error_reporting(0);

// Archivo de Conexión a la Base de Datos 
require_once('../php/conexionMF.php');

$coleccion = $client->appexacta->encuesta2f;
$datos = $coleccion->find();

$marcadores = [];
foreach($datos as $row) {
    // Verificar si existe el campo $nameMapa en el documento
    $valor = isset($row[$nameMapa]) ? $row[$nameMapa] : '';
    
    // Agregar marcador solo si tiene coordenadas
    if(isset($row['longitud']) && isset($row['latitud'])) {
        $marcadores[] = '['. $row['longitud'] . ', '. $row['latitud']. ', "'.$row['codigo_encuesta'].'", "'.$valor.'"]';
    }
}

// Imprimir todos los marcadores en formato JSON válido
echo implode(',', $marcadores);
?>
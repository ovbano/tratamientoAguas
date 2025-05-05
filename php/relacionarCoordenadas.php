<?php
require_once 'conexionMF.php';

// Obtener todas las coordenadas de Fase 1
$fase1 = $client->appexacta->encuesta2f->find();

$coordenadasMap = [];

foreach ($fase1 as $doc) {
    $key = $doc['comunidad'] . '|' . $doc['barrio'];
    $coordenadasMap[$key] = [
        'longitud' => $doc['longitud'],
        'latitud' => $doc['latitud']
    ];
}

// Obtener datos de Fase 2 y relacionar con coordenadas
$fase2 = $client->appexacta->Fase2final->find();

$marcadores = [];
foreach ($fase2 as $doc) {
    $key = $doc['Comunidad1'] . '|' . $doc['Barrio1'];
    
    if (isset($coordenadasMap[$key])) {
        $marcadores[] = [
            'longitud' => $coordenadasMap[$key]['longitud'],
            'latitud' => $coordenadasMap[$key]['latitud'],
            'codigo' => $doc['Código de muestra'],
            'valor' => $doc['Coliformes Fecales, NMP/100ml_1'] // Cambiar por el campo necesario
        ];
    }
}

// Función para convertir a formato JavaScript
function generarMarcadores($datos) {
    $output = [];
    foreach ($datos as $m) {
        $output[] = "[{$m['longitud']}, {$m['latitud']}, \"{$m['codigo']}\", \"{$m['valor']}\"]";
    }
    return implode(',', $output);
}

echo generarMarcadores($marcadores);
?>
<?php
error_reporting(E_ALL);
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors', 1);

require_once "./php/conexionM.php";

if(isset($_POST['id']) && !empty(trim($_POST["id"]))){
    // Cambiar a la colección Fase2final
    $coleccion = $client->appexacta->Fase2final;
    
    // Buscar por "Código de muestra"
    $documento = $coleccion->findOne(["Código de muestra" => $_POST['id']]);

    if ($documento) {
        // Datos generales
        $nombre_persona = $documento['Nombre1'] ?? 'N/A';
        $codigo_encuesta = $documento['Código de muestra'] ?? 'N/A';
        $fecha = $documento['Fecha'] ?? 'N/A';
        $horaInicio = $documento['Hora de toma de muestra'] ?? 'N/A';
        $tipo_muestra = $documento['TIPO DE MUESTRA'] ?? 'N/A';
        $tipo_muestra_general = $documento['TIPO DE MUESTRA GENERAL'] ?? 'N/A';
        $latitud = $documento['latitud'] ?? 'N/A';
        $longitud = $documento['longitud'] ?? 'N/A';
        $barrio = $documento['Barrio1'] ?? 'N/A';
        $comunidad = $documento['Comunidad1'] ?? 'N/A';
        $caracteristica_casa = $documento['Caracteristica Casa1'] ?? 'N/A';
        $observaciones = $documento['Observacion'] ?? 'Sin observaciones';
        $lugar = $documento['TIPO DE MUESTRA GENERAL'];

        // Parámetros microbiológicos
        $coliformes_fecales_texto = $documento['Coliformes Fecales, NMP/100ml_1'] ?? 'No medido';
        $coliformes_fecales = $documento['Coliformes Fecales, NMP/100ml'] ?? 'No medido';

        // Parámetros fisicoquímicos
        $pH = $documento['pH'] ?? 'No medido';
        $cloro_libre = $documento['Cloro Libre Residual, mg/L'] ?? 'No medido';
        $monocloroaminas = $documento['Monocloroaminas, mg/L'] ?? 'No medido';
        $turbidez = $documento['Turbidez, NTU'] ?? 'No medido';
        $color = $documento['Color, Unidades de color Cobalto Platino'] ?? 'No medido';
        $nitratos = $documento['Nitratos, mg/L'] ?? 'No medido';
        $nitritos = $documento['Nitritos, mg/L'] ?? 'No medido';
        $fluoruros = $documento['Fluoruros, mg/L'] ?? 'No medido';
        $hierro = $documento['Hierro, mg/L'] ?? 'No medido';
        $dureza = $documento['Dureza Total'] ?? 'No medido';
        $tds = $documento['TDS,mg/L'] ?? 'No medido';
        $conductividad = $documento['Conductividad, uS/cm'] ?? 'No medido';
        $temperatura = $documento['T, ºC'] ?? 'No medido';

    } else {
        echo "Muestra no encontrada.";
        exit();
    }
} else {
    echo "Error! Código de muestra no válido.";
    exit();
}
?>
<?php
require_once '../php/conexionMF.php'; // Asegúrate de incluir tu archivo de conexión

function contarMarcadores($coleccion, $campo, $limiteInf, $limiteSup) {
    $contadores = [
        'no_medido' => 0,
        'cumple' => 0,
        'no_cumple' => 0
    ];

    $cursor = $coleccion->find();
    
    foreach ($cursor as $doc) {
        $valor = $doc[$campo] ?? null;
        
        if ($valor === null || $valor === '') {
            $contadores['no_medido']++;
            continue;
        }

        if ($campo === 'coliformesFecales' || $campo === 'Coliformes Fecales, NMP/100ml_1') {
            // Lógica para coliformes fecales (textual)
            if ($valor === 'Ausencia' || $valor === 'Ausencia ') {
                $contadores['cumple']++;
            } else {
                $contadores['no_cumple']++;
            }
        } else {
            // Lógica para valores numéricos
            $valorNumerico = is_numeric($valor) ? $valor : floatval($valor);
            
            if ($valorNumerico >= $limiteInf && $valorNumerico <= $limiteSup) {
                $contadores['cumple']++;
            } else {
                $contadores['no_cumple']++;
            }
        }
    }
    
    return $contadores;
}

?>
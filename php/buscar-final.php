<?php
require_once "./php/conexionM.php";

$coleccion = $client->appexacta->Fase2final;
$datos = $coleccion->find();

function imprimirTablaFase2($resultado){
    $numero = sizeof($resultado);
    echo '<div class="results-container">';
    echo '<div class="d-flex justify-content-between align-items-center mb-3">';
    echo '<a class="btn btn-outline-primary" href="registros.php?mostrar_todo=ok"><i class="fas fa-list"></i> Mostrar todos los registros</a>';
    echo '<span class="badge bg-info text-dark"><i class="fas fa-search"></i> Resultados encontrados: '.$numero.'</span>';
    echo '</div>';
    
    echo '<div class="table-container">';
    echo '<table class="table table-hover table-striped">';
    echo '<thead class="thead-primary">';
    echo '<tr>';
    echo '<th scope="col" class="text-nowrap"><i class="fas fa-barcode"></i> Código de muestra</th>';
    echo '<th scope="col"><i class="fas fa-map-marker-alt"></i> Barrio</th>';
    echo '<th scope="col"><i class="fas fa-home"></i> Referencia</th>';
    echo '<th scope="col" class="text-center"><i class="fas fa-eye"></i> Visualizar</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach($resultado as $row){
        echo '<tr class="align-middle">';
        echo '<td class="fw-bold" style="color: black;">'.(isset($row['Código de muestra']) ? $row['Código de muestra'] : 'N/A').'</td>';
        echo '<td style="color: black;">'.(isset($row['Barrio1']) ? $row['Barrio1'] : 'N/A').'</td>';
        echo '<td style="color: black;">'.(isset($row['Caracteristica Casa1']) ? $row['Caracteristica Casa1'] : 'N/A').'</td>';
        echo '<td class="text-center">';
        echo '<form action="leer-final.php" method="post" target="_blank">';
        echo '<input type="hidden" name="id" value="'.(isset($row['Código de muestra']) ? $row['Código de muestra'] : '').'">';
        echo '<button type="submit" name="submit" class="btn btn-sm btn-action ">';
        echo '<i class="fas fa-external-link-alt"></i> Abrir';
        echo '</button>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }
    
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
}

function buscarCodigoMuestra($aKeyword, $coleccion) {
    $mongoRegex = new MongoDB\BSON\Regex("$aKeyword", "i");
    $resultado = $coleccion->find([
        '$or' => [
            ["Código de muestra" => $mongoRegex],
            ["Barrio1" => $mongoRegex],
            ["Caracteristica Casa1" => $mongoRegex]
        ]
    ]);
    $docs = [];
    foreach ($resultado as $doc) {
        $docs[] = $doc;
    }
    return $docs;
}

if (!isset($_POST['buscar'])) {
    $_POST['buscar'] = '';
}

if (!empty($_POST)) {
    if ($_POST['buscar'] != '') {
        $aKeyword = $_POST['buscar'];
        $respuesta = buscarCodigoMuestra($aKeyword, $coleccion);
        imprimirTablaFase2($respuesta);
    } else {
        $respuesta = [];
        foreach ($datos as $doc) {
            $respuesta[] = $doc;
        }
        imprimirTablaFase2($respuesta);
    }
}


echo '<style>
    .results-container {
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        margin-bottom: 30px;
    }
    
    .table-container {
        max-height: 500px;
        overflow-y: auto;
        border-radius: 8px;
        border: 1px solid #eee;
    }
    
    .thead-primary {
        background-color: #4e73df;
        color: white;
        position: sticky;
        top: 0;
    }
    
    .table-hover tbody tr:hover {
        background-color: rgba(78, 115, 223, 0.1);
    }
    
    .btn-action {
        background: #4e73df;
        color: white;
        transition: all 0.3s;
        padding: 5px 15px;
        border-radius: 20px;
    }
    
    .btn-action:hover {
        background: #2e59d9;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .badge {
        font-size: 0.9rem;
        padding: 8px 12px;
    }
</style>';



?>

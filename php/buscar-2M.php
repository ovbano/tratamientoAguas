<?php
require_once "./php/conexionM.php";

$coleccion = $client->appexacta->encuesta2f;
$datos = $coleccion->find();

function imprimirTabla($resultado){
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
    echo '<th scope="col" class="text-center"><i class="fas fa-eye"></i> Visualizar</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach($resultado as $row){
        echo '<tr class="align-middle">';
        echo '<td class="fw-bold" style="color: black;">'.$row['codigo_encuesta'].'</td>';
        echo '<td style="color: black;">'.$row['barrio'].'</td>';
        echo '<td class="text-center">';
        echo '<form action="leer-2F.php" method="post" target="_blank">';
        echo '<input type="hidden" name="id" value="'.$row['codigo_encuesta'].'" >';
        echo '<button type="submit" name="submit" class="btn btn-sm btn-action">';
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

function buscarIdEn($aKeyword,$coleccion){
  $resultado =  $coleccion->find(
    ["codigo_encuesta"=>$aKeyword]
  );
  $docs = [];
  foreach($resultado as $doc){
    unset($doc['foto']);
    $docs[] = $doc;
  }
  
  return $docs;
}


function buscarBarrio($aKeyword,$coleccion,$respuesta){
  $resultado =  $coleccion->find(
    ["barrio"=>$aKeyword]
  );
  foreach($resultado as $doc){
    unset($doc['foto']);
    $respuesta[] = $doc;
  }
  return $respuesta;
  
}


if (!isset($_POST['buscar'])){
  $_POST['buscar'] = '';
}

if(!empty($_POST)){

  if($_POST['buscar'] != '') {

    //tomo lo mandado a buscar
    $aKeyword =$_POST['buscar'];

    $mongoRegex = new MongoDB\BSON\Regex("$aKeyword", "i");

    $respuesta = buscarIdEn($mongoRegex,$coleccion);

    $respuesta = buscarBarrio($mongoRegex,$coleccion,$respuesta);

    imprimirTabla($respuesta);

  }else{
    $respuesta=[];
    foreach($datos as $doc){
      unset($doc['foto']);
      $respuesta[] = $doc;
    }

    imprimirTabla($respuesta);
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

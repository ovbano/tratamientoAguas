<?php
require_once "./php/conexionM.php";

$coleccion = $client -> appexacta -> encuesta1;
$datos = $coleccion->find();


function imprimirTabla($resultado){
  $numero=sizeof($resultado);
  echo "<a class='btn btn-primary mt-2' href='mapa.php?mostrar_todo=ok'>Mostrar todos los registros</a>";
  echo "<br>";
  echo "<br>";
  echo "<big style='color: white'>Resultados encontrados:</big><b> ".$numero."</b>";
  echo "<br><br><br>";
  echo "<div class='table-responsive' style='  height: 470px;'>";
  echo "<table class='table'>";
  echo "<thead class='thead-dark'>";
  echo "<tr>";
  echo "<th scope='col'>ID Encuesta</th>";
  echo "<th scope='col'>Encuestador</th>";
  echo "<th scope='col'>Encuestado</th>";
  echo "<th scope='col'>Barrio</th>";
  echo "<th scope='col'>Visualizar</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody border='2'>";
  

  //if($resultado -> num_rows > 0){
      foreach($resultado as $row){
          echo '<tr>';
          echo '<td>'.$row['codigo_encuesta'].'</td>';
          echo '<td>'.$row['codigo_encuestador'].'</td>';
          echo '<td>'.$row['nombre_persona'].'</td>';
          echo '<td>'.$row['dir_persona'].'</td>';
          echo '<td>';
          //Envio del id mediante POST
          echo '<form action="leer.php" method="post">
          ';
          echo '<input type="hidden" name="id" value='.$row['codigo_encuesta'].'>';
          echo '<input type="submit" name="submit" class="btn btn-success acciones" value="Abrir"></a>';
          echo '</form>';

          //echo '<a class="btn btn-success acciones" href="leer.php?id='.$row['id_enc1'].'">Abrir</a>';
      }

      //$resultado -> free();
  /*}else{
      echo '<p><em>No existen datos registrados</em></p>';
  }  */
  echo "</tbody>
  </table>
  </div>";
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

function buscarEncuestador($aKeyword,$coleccion,$respuesta){
  $resultado =  $coleccion->find(
    ["codigo_encuestador"=>$aKeyword]
  );
  foreach($resultado as $doc){
    unset($doc['foto']);
    $respuesta[] = $doc;
  }
  return $respuesta;
}

function buscarEncuestado($aKeyword,$coleccion,$respuesta){
  $resultado =  $coleccion->find(
    ["nombre_persona"=>$aKeyword]
  );
  foreach($resultado as $doc){
    unset($doc['foto']);
    $respuesta[] = $doc;
  }
  return $respuesta;
}

function buscarBarrio($aKeyword,$coleccion,$respuesta){
  $resultado =  $coleccion->find(
    ["dir_persona"=>$aKeyword]
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
    
    $respuesta = buscarEncuestador($mongoRegex,$coleccion,$respuesta); 

    $respuesta = buscarEncuestado($mongoRegex,$coleccion,$respuesta);

    $respuesta = buscarBarrio($mongoRegex,$coleccion,$respuesta);

    imprimirTabla($respuesta);

    }else {
        //mostramos todos los resultados
        //if( $_REQUEST["mostrar_todo"] == 'ok') {
          //$row_count=0;
          $respuesta=[];
          foreach($datos as $doc){
            unset($doc['foto']);
            $respuesta[] = $doc;
          }

          imprimirTabla($respuesta);

/*
          $datos = $coleccion->find();
          echo "<br>Resultados encontrados:<b> ".$numero."</b>";
          echo "<br><br><br>";
          echo "<div class='table-responsive' style='  height: 470px;'>";
          echo "<table class='table'>";
          echo "<thead class='thead-dark'>";
          echo "<tr>";
          echo "<th scope='col'>ID Encuesta</th>";
          echo "<th scope='col'>Encuestador</th>";
          echo "<th scope='col'>Encuestado</th>";
          echo "<th scope='col'>Barrio</th>";
          echo "<th scope='col'>Visualizar</th>";
          echo "</tr>";
          echo "</thead>";
          echo "<tbody border='2'>";
          //while($row = $resultado->fetch_assoc()) {   
              //$row_count++;   
              
              foreach($datos as $row){
                    echo '<tr>';
                    echo '<td>'.$row['codigo_encuesta'].'</td>';
                    echo '<td>'.$row['codigo_encuestador'].'</td>';
                    echo '<td>'.$row['nombre_persona'].'</td>';
                    echo '<td>'.$row['dir_persona'].'</td>';
                    echo '<td>';
                    //Envio del id mediante POST
                    echo '<form action="leer.php" method="post">
                    ';
                    echo '<input type="hidden" name="id" value='.$row['codigo_encuesta'].'>';
                    echo '<input type="submit" name="submit" class="btn btn-success acciones" value="Abrir"></a>';
                    echo '</form>';
                }
               // $resultado -> free();
          
            //}  
            echo "</tbody>
            </table>
            </div>"; 
          //}

          echo "</table>";*/
      
      }
}
?>
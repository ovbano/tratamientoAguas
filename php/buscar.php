<?php
// Archivo de Conexión a la Base de Datos 
include('conexion.php');

//seteo para mostrar todos los datos, si mando a buscar vacio me retorna todo
if (!isset($_POST['buscar'])){
    $_POST['buscar'] = '';
} 

if(!empty($_POST)){
    //tomo lo mandado a buscar
    $aKeyword =$_POST['buscar'];
    
    //$filtro = "WHERE nombre_pers LIKE LOWER('%".$aKeyword."%') OR direccion_pers LIKE LOWER('%".$aKeyword."%') OR longitud_pers LIKE LOWER('%".$aKeyword."%') OR latitud_pers LIKE LOWER('%".$aKeyword."%') OR sexo_pers LIKE LOWER('%".$aKeyword."%')";
    $query ="SELECT * FROM encuesta_final WHERE nombre_pers LIKE LOWER('%".$aKeyword."%') OR direccion_pers LIKE LOWER('%".$aKeyword."%') OR id_enc1 LIKE LOWER('%".$aKeyword."%') OR nombre_encuestador LIKE LOWER('%".$aKeyword."%')";
    $resultado = mysqli_query($con, $query);
    //contar el numero de registros
    $total_registros = mysqli_num_rows($resultado);
    $resultado = $con->query($query);
    $numero = mysqli_num_rows($resultado);


    
    if (!isset($_POST['buscar'])){
        echo "Has buscado la palabra:<b> ". $_POST['buscar']."</b>";
    }

    if( mysqli_num_rows($resultado) > 0 AND $_POST['buscar'] != '') {
        echo "<a class='btn btn-primary mt-2' href='mapa.php?mostrar_todo=ok'>Mostrar todos los registros</a>";
        echo "<br>";
        echo "<br>";
        echo "<big style='color: white>Resultados encontrados:</big><b> ".$numero."</b>";
        echo "<br><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table'>";
        echo "<thead class='thead-dark'>";
        echo "<tr>";
        echo "<th scope='col'>ID Encuesta</th>";
        echo "<th scope='col'>Encuestador</th>";
        echo "<th scope='col'>Encuestado</th>";
        echo "<th scope='col'>Dirección Encuestado</th>";
        echo "<th scope='col'>Visualizar</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody border='2'>";
   
        if($resultado -> num_rows > 0){
            while ($row = $resultado -> fetch_assoc()){
                echo '<tr>';
                echo '<td>'.$row['id_enc1'].'</td>';
                echo '<td>'.$row['nombre_encuestador'].'</td>';
                echo '<td>'.$row['nombre_pers'].'</td>';
                echo '<td>'.$row['direccion_pers'].'</td>';
                echo '<td>';
                //Envio del id mediante POST
                echo '<form action="leer.php" method="post">
                ';
                echo '<input type="hidden" name="id" value='.$row['id_enc1'].'>';
                echo '<input type="submit" name="submit" class="btn btn-success acciones" value="Abrir"></a>';
                echo '</form>';

                //echo '<a class="btn btn-success acciones" href="leer.php?id='.$row['id_enc1'].'">Abrir</a>';
            }
            $resultado -> free();
        }else{
            echo '<p><em>No existen datos registrados</em></p>';
        }  
        echo "</tbody>
        </table>
        </div>";
    }else {
        //mostramos todos los resultados
        if( $_REQUEST["mostrar_todo"] == 'ok') {
          $row_count=0;
          echo "<br>Resultados encontrados:<b> ".$numero."</b>";
          echo "<br><br><br>";
          echo "<div class='table-responsive' style='  height: 470px;'>";
          echo "<table class='table'>";
          echo "<thead class='thead-dark'>";
          echo "<tr>";
          echo "<th scope='col'>ID Encuesta</th>";
          echo "<th scope='col'>Encuestador</th>";
          echo "<th scope='col'>Encuestado</th>";
          echo "<th scope='col'>Dirección Encuestado</th>";
          echo "<th scope='col'>Visualizar</th>";
          echo "</tr>";
          echo "</thead>";
          echo "<tbody border='2'>";
          //while($row = $resultado->fetch_assoc()) {   
              $row_count++;   
              
                while ($row = $resultado -> fetch_assoc()){
                    echo '<tr>';
                    echo '<td>'.$row['id_enc1'].'</td>';
                    echo '<td>'.$row['nombre_encuestador'].'</td>';
                    echo '<td>'.$row['nombre_pers'].'</td>';
                    echo '<td>'.$row['direccion_pers'].'</td>';
                    echo '<td>';
                    //Envio del id mediante POST
                    echo '<form action="leer.php" method="post">
                    ';
                    echo '<input type="hidden" name="id" value='.$row['id_enc1'].'>';
                    echo '<input type="submit" name="submit" class="btn btn-success acciones" value="Abrir"></a>';
                    echo '</form>';
                }
               // $resultado -> free();
          

            //}  
            echo "</tbody>
            </table>
            </div>"; 
          }

          echo "</table>";
      
      }
}
?>
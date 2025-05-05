<?php
//conexion
require_once "conexion.php";
//control del parametro enviado
if(isset($_POST['id']) && !empty(trim($_POST["id"]))){
    $consulta = "SELECT * FROM appexactas.encuesta2 WHERE id_enc2=?";
    if($stmt = $con -> prepare($consulta)){
        $stmt -> bind_param('i', $_POST["id"]);
        if($stmt -> execute()){
            $result=$stmt->get_result();
            if($result->num_rows==1){
                
                $row=$result->fetch_array(MYSQLI_ASSOC);

                foreach($row as $index => $value){
                    if(is_null($value)){
                        $row[$index] = "No medido";
                    }
                }
                /*function write_to_console($data) {
                    $console = $data;
                    if (is_array($console))
                    $console = implode(',', $console);
                    echo "<script>console.log('Console: " . $console . "' );</script>";
                   }
                
                write_to_console($row);
                */
                $id_enc2 = $row['id_enc2'];///
                $nombrePersona_enc2 = $row['nombrePersona_enc2'];///
                $id_encuestador = $row['id_encuestador'];///
                $lugar_enc2 = $row['lugar_enc2'];///
                $fecha_enc2 = $row['fecha_enc2'];///
                $horaInicio_enc2 = $row['horaInicio_enc2'];///
                $horaFin_enc2 = $row['horaFin_enc2'];///
                $horaMuestra_enc2 = $row['horaMuestra_enc2'];
                $longitud = $row['longitud'];///
                $latitud = $row['latitud'];///
                $direccionPersona_enc2 = $row['direccionPersona_enc2'];///

                $foto_enc2 = $row['foto_enc2'];


                $cloroLibreResidual = $row['cloroLibreResidual'];
                $pH = $row['pH'];///
                $monocloroaminas = $row['monocloroaminas'];              
                $conductividad = $row['conductividad'];

                $analsisMicrobiologico = $row['analsisMicrobiologico'];
                $analsisPh = $row['analsisPh'];
                $analisisTurbNTU = $row['analisisTurbNTU'];///
                $analisisColor = $row['analisisColor'];///
                $analisisCloroResidual = $row['analisisCloroResidual'];///
                $analisisDureza = $row['analisisDureza'];///
                $analisisConductividad = $row['analisisConductividad'];///
                $analisisMonocloroaminas = $row['analisisMonocloroaminas'];///
                $analisisNitratos = $row['analisisNitratos'];///
                $analisisNitritos = $row['analisisNitritos'];///
                $analisisTemperatura = $row['analisisTemperatura'];///
                $analisiMicrobiologico48 = $row['analisiMicrobiologico48'];    
                $observaciones_enc2 = $row['observaciones_enc2'];//
                $aspecto_enc2 = $row['aspecto_enc2'];   
                $barrio = $row['barrio'];

            }else{
                echo 'Error! No existen resultados.';
                exit();
            }
        }
    }
    $stmt -> close();
    $con -> close();
}else{
    echo "Error! Intente mas tarde.";
    exit();
}
?>
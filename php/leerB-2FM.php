<?php
require_once "./php/conexionM.php";
if(isset($_POST['id']) && !empty(trim($_POST["id"]))){
    $coleccion = $client -> appexacta -> encuesta2f;
    $datos = $coleccion->find(
        ["codigo_encuesta"=>$_POST['id']]
    );

    foreach($datos as $row => $value){
        if($value['cloroLibreResidual']==''){
            $value['cloroLibreResidual']='No medido';
        }
        if($value['pH']==''){
            $value['pH']='No medido';
        }
        if($value['monocloroaminas']==''){
            $value['monocloroaminas']='No medido';
        }
        if($value['conductividad']==''){
            $value['conductividad']='No medido';
        }

        //$value['longitud'] = round($value['longitud'], 2);

        $codigo_encuesta = $value['codigo_encuesta'];
        $nombre_persona = $value['nombre_persona'];
        $id_encuestador = $value['id_encuestador'];
        $lugar = $value['tipoMuestra'];
        $fecha = $value['fecha'];
        $horaInicio = $value['horaMuestra'];
        //$horaFin = $value['horaFin'];
        //$horaMuestra = $value['horaMuestra'];
        $longitud = $value['longitud'];
        $latitud = $value['latitud'];
        $direccion_persona= $value['direccion_persona'];
        $barrio = $value['barrio'];

        $pH = $value['pH'];
        $cloroLibreResidual = $value['cloroLibreResidual'];
        $conductividad = $value['conductividad'];
        $monocloroaminas = $value['monocloroaminas'];              
        
        $observaciones = $value['observacionN'];//


                $analsisMicrobiologico = $value['coliformesFecales'];/*
                $analsisPh = $row['analsisPh'];*/
                $analisisTurbNTU = $value['turbidezNTU'];
                $analisisColor = $value['color_UnidadesColorCobaltoPlatino'];
                $analisisDureza = $value['durezaTotal'];/*
                $analisisConductividad = $row['analisisConductividad'];
                $analisisMonocloroaminas = $row['analisisMonocloroaminas'];*/
                $analisisNitratos = $value['nitratosN'];
                $analisisNitritos = $value['nitritosN'];
                $analisisTemperatura = $value['temperaturaCentigrados'];/*
                $analisiMicrobiologico48 = $row['analisiMicrobiologico48'];    
                
                $aspecto_enc2 = $row['aspecto_enc2'];   
                */

    }

} else{
    echo "Error! Intente mas tarde.";
    exit();
}
?>
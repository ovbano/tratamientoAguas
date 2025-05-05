<?php
require_once "./php/conexionM.php";

if(isset($_POST['id']) && !empty(trim($_POST["id"]))){
    $coleccion = $client -> appexacta -> encuesta1;
    $datos = $coleccion->find(
        ["codigo_encuesta"=>$_POST['id']]
    );

    foreach($datos as $row){
                
                $longitud_pers = $row['longitud_persona'];
                $latitud_pers = $row['latitud_persona'];
                
                $nombre_encuestador = $row['codigo_encuestador'];
                $id_encuestador = $row['codigo_encuestador'];
                $fecha_enc1 = $row['fecha'];
                $horainicio_enc1 = $row['horaInicio'];
                $horafin_enc1 = $row['horaFin'];
                $id_enc1 = $row['codigo_encuesta'];  
/*
                $a_agua_lluvia = $row['a_agua_lluvia'];
                $a_agua_tanquero = $row['a_agua_tanquero'];
                $a_agua_embotellada = $row['a_agua_embotellada'];
                $a_agua_otros = $row['a_agua_otros'];

   */
                $vivienda = $row['tipoVivienda'];
                $vivienda_otros = $row['otroTipoVivienda'];
                $numero_pisos_enc1 = $row['numeroPisos'];
                $techo = $row['techo'];
                $paredes= $row['paredes'];
                $piso = $row['piso'];
                $nombre_pers = $row['nombre_persona'];
                $direccion_pers = $row['dir_persona'];
                $edad_pers = $row['edad_persona'];
                $sexo_pers = $row['sexo_persona'];
                $vivienda_enc1 = $row['vivienda'];
                $numeropersonas_enc1 = $row['numeroPersonas'];
                $p_estomacales = $row['problemasEstomacales'];
                //$p_estomacales_tratamiento = $row['p_estomacales_tratamiento'];
                $p_estomacales_tipo = $row['tipoProblemasEstomacales'];
                $p_estomacales_otros = $row['otroProblemasEstomacales'];
                $p_piel = $row['enfermedadPiel'];
                //$p_piel_tratamiento = $row['p_piel_tratamiento'];
                $p_piel_tipo = $row['tipoEnfermedadPiel'];
                $p_piel_otros = $row['otraEnfermedadPiel'];
                $a_agua = $row['abastecimientoAgua'];
                $a_agua_otros = $row['otroAbastecimientoAgua'];
                $nombre_rio = $row['nombreRio'];
                $tanque_cisterna = $row['sisternaTanque'];
                $capacidadsisterna_sistan = $row['capacidadSisterna'];
                $capacidadtanque_sistan = $row['capacidadTanque'];
                $frecuencialimpieza = $row['frecuenciaLimpieza'];
                $frecuenciacloracion = $row['frecuenciaCloracion']; 
                $otrofrecuenciacloracion_clolimp = $row['otroFrecuenciaCloracion'];
                $dosiscloracion = $row['dosisCloracion'];
                $otrodosiscloracion_clolimp = $row['otroDosisCloracion'];
                $o_agua = $row['origenAguaBeber'];
                $tratamientoorigenagua_enc1 = $row['tratamientoOrigenAgua'];
                $u_agua = $row['usoAgua'];

                $mascotas_animal = $row['mascotas_animal'];                
                $consumo_animal = $row['consumo_animal'];                
                $venta_animal = $row['venta_animal'];

                $ornamentales_riego = $row['ornamentales_riego'];
                $venta_riego = $row['venta_riego'];
                $consumo_riego = $row['consumo_riego']; 
    }

} else{
    echo "Error! Intente mas tarde.";
    exit();
}
?>
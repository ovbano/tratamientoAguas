<?php
//conexion
require_once "conexion.php";
//control del parametro enviado
if(isset($_POST['id']) && !empty(trim($_POST["id"]))){
    $consulta = "SELECT * FROM encuesta_final WHERE id_enc1=?";
    if($stmt = $con -> prepare($consulta)){
        $stmt -> bind_param('i', $_POST["id"]);
        if($stmt -> execute()){
            $result=$stmt->get_result();
            if($result->num_rows==1){
                $row=$result->fetch_array(MYSQLI_ASSOC);
                




                $nombre_pers = $row['nombre_pers'];
                $direccion_pers = $row['direccion_pers'];
                $longitud_pers = $row['longitud_pers'];
                $latitud_pers = $row['latitud_pers'];
                $sexo_pers = $row['sexo_pers'];
                $nombre_encuestador = $row['nombre_encuestador'];
                $id_encuestador = $row['id_encuestador'];
                $fecha_enc1 = $row['fecha_enc1'];
                $horainicio_enc1 = $row['horainicio_enc1'];
                $horafin_enc1 = $row['horafin_enc1'];
                $id_enc1 = $row['id_enc1'];
                $vivienda_otros = $row['vivienda_otros'];
                $numero_pisos_enc1 = $row['numero_pisos_enc1'];
                $techo_cinc = $row['techo_cinc'];
                $techo_teja = $row['techo_teja'];
                $techo_loseta = $row['techo_loseta'];
                $techo_loza = $row['techo_loza'];
                $paredes_madera = $row['paredes_madera'];
                $paredes_bloque = $row['paredes_bloque'];
                $paredes_hormigon = $row['paredes_hormigon'];
                $paredes_loza = $row['paredes_loza'];
                $piso_madera = $row['piso_madera'];
                $piso_hormigon = $row['piso_hormigon'];
                $piso_porcelanato = $row['piso_porcelanato'];
                $piso_tierra = $row['piso_tierra'];
                $edad_pers = $row['edad_pers'];
                $vivienda_enc1 = $row['vivienda_enc1'];
                $numeropersonas_enc1 = $row['numeropersonas_enc1'];
                $p_estomacales = $row['p_estomacales'];
                $cisterna = $row['cisterna'];
                $p_estomacales_tratamiento = $row['p_estomacales_tratamiento'];
                $p_estomacales_diarrea = $row['p_estomacales_diarrea'];
                $p_estomacales_gastroenteritis = $row['p_estomacales_gastroenteritis'];
                $p_estomacales_amebiasis = $row['p_estomacales_amebiasis'];
                $p_estomacales_echericha_coli = $row['p_estomacales_echericha_coli'];
                $p_estomacales_colera = $row['p_estomacales_colera'];
                $p_estomacales = $row['p_estomacales'];
                $p_estomacales_otros = $row['p_estomacales_otros'];
                $p_piel = $row['p_piel'];
                $venta_animal = $row['venta_animal'];
                $venta_riego = $row['venta_riego'];
                $p_piel_tratamiento = $row['p_piel_tratamiento'];
                $p_piel_hongos = $row['p_piel_hongos'];
                $p_piel_escabiosis = $row['p_piel_escabiosis'];
                $p_piel_alergia = $row['p_piel_alergia'];
                $p_piel_otros = $row['p_piel_otros'];
                $a_agua_potable = $row['a_agua_potable'];
                $a_agua_pozo = $row['a_agua_pozo'];
                $a_agua_rio = $row['a_agua_rio'];
                $a_agua_lluvia = $row['a_agua_lluvia'];
                $a_agua_tanquero = $row['a_agua_tanquero'];
                $a_agua_embotellada = $row['a_agua_embotellada'];
                $a_agua_otros = $row['a_agua_otros'];
                $nombre_rio = $row['nombre_rio'];
                $a_agua_lluvia = $row['a_agua_lluvia'];
                $a_agua_tanquero = $row['a_agua_tanquero'];
                $a_agua_embotellada = $row['a_agua_embotellada'];
                $a_agua_otros = $row['a_agua_otros'];
                $tanque_elevado = $row['tanque_elevado'];
                $ninguno = $row['ninguno'];
                $cisterna = $row['cisterna'];
                $capacidadsisterna_sistan = $row['capacidadsisterna_sistan'];
                $capacidadtanque_sistan = $row['capacidadtanque_sistan'];
                $frecuencialimpieza_semanal = $row['frecuencialimpieza_semanal'];
                $frecuencialimpieza_mensual = $row['frecuencialimpieza_mensual'];
                $frecuencialimpieza_semestral = $row['frecuencialimpieza_semestral'];
                $frecuencialimpieza_cadadosaños = $row['frecuencialimpieza_cadadosaños'];
                $frecuencialimpieza_quincenal = $row['frecuencialimpieza_quincenal'];
                $frecuencialimpieza_trimestral = $row['frecuencialimpieza_trimestral'];
                $frecuencialimpieza_anual = $row['frecuencialimpieza_anual'];
                $frecuencialimpieza_nunca = $row['frecuencialimpieza_nunca'];
                $frecuenciacloracion_semanal = $row['frecuenciacloracion_semanal'];
                $frecuenciacloracion_quincenal = $row['frecuenciacloracion_quincenal'];
                $frecuenciacloracion_mensual = $row['frecuenciacloracion_mensual'];
                $frecuenciacloracion_bimensual = $row['frecuenciacloracion_bimensual'];
                $frecuenciacloracion_trimestral = $row['frecuenciacloracion_trimestral'];
                $frecuenciacloracion_cuatrimestral = $row['frecuenciacloracion_cuatrimestral'];
                $frecuenciacloracion_semestral = $row['frecuenciacloracion_semestral'];
                $frecuenciacloracion_anual = $row['frecuenciacloracion_anual'];              
                $otrofrecuenciacloracion_clolimp = $row['otrofrecuenciacloracion_clolimp'];
                $frecuenciacloracion_13gotas = $row['frecuenciacloracion_13gotas'];
                $frecuenciacloracion_36gotas = $row['frecuenciacloracion_36gotas'];
                $frecuenciacloracion_610gotas = $row['frecuenciacloracion_610gotas'];
                $frecuenciacloracion_101000gotas = $row['frecuenciacloracion_101000gotas'];
                $frecuenciacloracion_1000gotas = $row['frecuenciacloracion_1000gotas'];
                $frecuenciacloracion_1412gotas = $row['frecuenciacloracion_1412gotas'];
                $frecuenciacloracion_1234gotas = $row['frecuenciacloracion_1234gotas'];
                $frecuenciacloracion_34a1gotas = $row['frecuenciacloracion_34a1gotas'];
                $otrodosiscloracion_clolimp = $row['otrodosiscloracion_clolimp'];
                $o_agua_llave = $row['o_agua_llave'];
                $o_agua_hervida = $row['o_agua_hervida'];
                $o_agua_filtrada = $row['o_agua_filtrada'];
                $o_agua_embotellada = $row['o_agua_embotellada'];
                
                $tratamientoorigenagua_enc1 = $row['tratamientoorigenagua_enc1'];
                $u_agua_cocina = $row['u_agua_cocina'];
                $u_agua_asea_personal = $row['u_agua_asea_personal'];
                $u_agua_lavado_ropa = $row['u_agua_lavado_ropa'];
                $u_agua_animales = $row['u_agua_animales'];
                $u_agua_riego = $row['u_agua_riego']; 
                            
                $mascotas_animal = $row['mascotas_animal'];                
                $consumo_animal = $row['consumo_animal'];                
                $venta_animal = $row['venta_animal']; 
                
                
                $ornamentales_riego = $row['ornamentales_riego'];                
                $consumo_riego = $row['consumo_riego'];                
                $vivienda_casa = $row['vivienda_casa'];  
                $vivienda_departamento = $row['vivienda_departamento'];
                $vivienda_cuarto = $row['vivienda_cuarto'];                
              


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
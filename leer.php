<?php
require_once("./php/leerBM.php")
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Encuesta</title>
    <style type="text/css">
        .btn {
  /* Color del texo */
  display:block;
  margin-left: auto;
  margin-right: auto;
  color: black;

  /* Eliminar color de fondo */
  background: transparent;
  /* Grosor del borde, estilo de línea y color */
  border: 2px solid black;
  /* Añadir esquinas curvadas */
  border-radius: 6px;
  
  width: 20%;
}
        .auto-style9 {
            width: 488px;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .Texto_center{
            text-align:center;
        }
        .Texto_izq{
            text-align:left;
        }
        .auto-style12 {
            height: 8px;
            font-weight: bold;
        }
        .auto-style13 {
            width: 488px;
            height: 25px;
        }
        .auto-style14 {
            width: 193px;
        }
        .auto-style15 {
            width: 50px;
        }
        .auto-style17 {
            width: 128px;
        }
        .Maxi {
            width: 95%;
        }
        .auto-style18 {
            width: 136px;
        }
        .auto-style19 {
            height: 23px;
        }
        .auto-style20 {
            height: 23px;
            width: 313px;
        }
        .auto-style21 {
            width: 178px;
        }
        .auto-style22 {
            width: 182px;
        }
        .global{
            padding-left: 30px;
        }
        .auto-style27 {
            width: 92px;
        }
        .auto-style31 {
            width: 100%;
            padding-bottom: 10px;
            height: 127px;
            margin-top: 10px;
            padding-left: 20px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
           
        }
        .auto-style45 {
            width: 158px;
        }
        .auto-style46 {
            width: 158px;
            height: 34px;
        }
        .auto-style50 {
            width: 422px;
        }
        .auto-style51 {
            width: 217px;
        }
        .auto-style54 {
            width: 422px;
            height: 29px;
            padding-right: 20px;
        }
        .auto-style59 {
            width: 158px;
            height: 28px;
            padding-right: 10px;
        }
        .linea1{
            border-top-style: inset;
            padding-top: 20px;
        }
        .auto-style63 {
            width: 207px;
            height: 29px;
        }
        .auto-style65 {
            width: 422px;
            height: 34px;
        
            
        }
        .auto-style66 {
            width: 217px;
            height: 34px;
        }
        .auto-style68 {
            width: 422px;
            height: 28px;
            padding-right:10px;
            border-block-color: black;
           
        }
        .auto-style69 {
            width: 217px;
            height: 28px;
        }
        
            @media print {
            body * {
                visibility:visible;
                   
            }
            .print-container, .print-container{
                visibility:visible;
                width: initial;
               
            }
        }
        .auto-style73 {
            margin-left: 0px;
        }
        .auto-style74 {
            width: 207px;
            height: 28px;
        }
        .auto-style75 {
            width: 207px;
            height: 34px;
        }
        .auto-style76 {
            width: 207px;
        }
        .auto-style77 {
            width: 393px;
            height: 76px;
        }
        .auto-style78 {
            width: 662px;
            height: 56px;
        }
      
        .auto-style79 {
            width: 100%;
            padding-top: 1px;
            padding-bottom: 1px;
            height: 17px;
        }
        .subtitulos{
            background-color: black;
            color:white;
        }
      
        .auto-style80 {
            width: 1627px;
        }
      
        .auto-style81 {
            width: 309px;
        }
        .auto-style82 {
            width: 369px;
        }
      
        </style>
</head>
<body class="print-container">
 <div class='table-responsive'>
    <form  id="form1">
        <div class="global">  
          <br>
          <img src="./img/pdf.png">
          <input id="Button1" onclick="window.print()" type="button" value="Descargar" class="auto-style27" style="border-style: none; background-color: #FFFFFF; font-size: 17px; font-weight: bold;" />
          <br>
          <br>
            <table>
                <tr>
                    <td class="auto-style77">
                        <img src="./img/espe.png " height="72px" width="315px" class="img-fluid" alt="Responsive image">
                    <td class="auto-style78" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: xx-large">
                        <center>Encuesta al Habitante </center></td>
                </tr>
                
            </table>
            <br><br>

            <td class="col" >
                <div >
                    <br><br>
                    <button class="btn" style='width:auto; height:auto; padding: 0;border: none;background: none;' disabled><center><b>PROYECTO DE VINCULACIÓN</b><br> Diagnóstico de la calidad de agua para el consumo de la parroquia de puerto limon, Santo Domingo de los Tsachilas, Ecuador.</center></button>
                </div>
            </td>

            <table>
                
                
            </table>
&nbsp;<table width ="100%" class='table-responsive' class="auto-style31" style="border-style: solid; padding-top: 10px; border-collapse:separate">
                <tr class="linea1">
        
                    <td class="auto-style74"><b>Nombre del encuestador: </b> </td>
                    <td class="auto-style68">
                        <?php echo $nombre_encuestador ?>
                    </td>
                    <td class="auto-style69"><b>Codigo del Encuestador: </b> </td>
                    <td class="auto-style59">
                        <?php echo $id_encuestador ?>
                    </td>
                </tr>
                <tr>
                    <td class="auto-style75"><b>Fecha de encuesta: </b> </td>
                    <td class="auto-style65">
                        <?php echo $fecha_enc1 ?>
                    </td>
                    <td class="auto-style66"><b>Nro. de encuesta: </b> </td>
                    <td class="auto-style46">
                        <?php echo $id_enc1 ?>
                    </td>

                </tr>
                <tr>
                    <td class="auto-style76"><b>Hora Inicio: </b> </td>
                    <td class="auto-style50">
                        <?php echo $horainicio_enc1 ?>
                    </td>
                    <td class="auto-style51"><b>Hora Finalizacion: </b> </td>
                    <td class="auto-style45">
                        <?php echo $horafin_enc1 ?>
                    </td>
                </tr>
                 <tr>
                    <td class="auto-style63"><b>Coordenadas UTM: </b> </td>
                    
                    <td class="auto-style54">
                        <?php echo $latitud_pers ?>&nbsp;&nbsp;&nbsp;
                        <?php echo $longitud_pers ?>
                     </td>
                </tr>
            </table>
             <meta charset="utf-8" />
            <b id="docs-internal-guid-984d0d86-7fff-e265-96b3-6fa705254cb8" style="font-weight:normal;">
            <br>
            <p dir="ltr" class="auto-style12">
                <span>CARACTERÍSTICAS DE LA VIVIENDA</span></p>
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt;">
                <table class="Maxi"><br>
                        <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';

                        if ($vivienda == "Casa") {
                            $checked1='checked';
                        };
                        if ($vivienda == "Departamento") {
                            $checked2='checked';
                        };
                        if ($vivienda == "Cuarto") {
                            $checked3='checked';
                        };
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Casa</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Departamento</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked3,' disabled> Cuarto</label>';
                        
                        ?>
                        
                        <td class="auto-style9"><b>Otros: </b> 
                            <?php echo $vivienda_otros ?>
                        </td>
                        
                      
                    <tr>
                        <td class="auto-style13" style="font-weight: normal"><b>Nro. de Pisos: </b> &nbsp;
                            <?php
                            $checked1='unchecked';
                            $checked2='unchecked';
                            $checked3='unchecked';
                            $checked4='unchecked';
                        if ($numero_pisos_enc1 == 1) {
                            $checked1='checked';
                        };
                        if ($numero_pisos_enc1 == 2) {
                            $checked2='checked';
                        };
                        if ($numero_pisos_enc1 == 3) {
                            $checked3='checked';
                        };
                        if ($numero_pisos_enc1 == 4) {
                            $checked4='checked';
                        };
                        echo '<label><input type="checkbox" ', $checked1,' disabled> 1</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> 2</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked3,' disabled> 3</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked4,' disabled> 4</label>';
                        
                        ?>



                        </td>
                      <br>
                       
                    </tr>
                    <tr>
                        <td class="auto-style13"><b>Techo: </b>
                        <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';
                        if (($techo == "Cinc")) {
                            $checked1='checked';
                        };
                        if (str_contains($techo, "Teja")) {
                            $checked2='checked';
                        };
                        if (str_contains($techo, "Loseta")) {
                            $checked3='checked';
                        };
                        if (str_contains($techo, "Loza")) {
                            $checked4='checked';
                        };
                        echo '&nbsp;&nbsp;<label><input type="checkbox" ', $checked1,' disabled> Cinc</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Teja</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked3,' disabled> Loseta</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked4,' disabled> Loza</label>';
                        
                        ?>
                            

                        </td>
                       
                       
                    </tr>
                    <tr>
                        <td class="auto-style13"><b>Paredes: </b>
                        <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';
                        if (str_contains($paredes, "Madera")) {
                            $checked1='checked';
                        };
                        if (str_contains($paredes, "Bloque")) {
                            $checked2='checked';
                        };
                        if (str_contains($paredes, "Hormigón")) {
                            $checked3='checked';
                        };
                        if (str_contains($paredes, "Loza")) {
                            $checked4='checked';
                        };
                        echo '&nbsp;&nbsp;<label><input type="checkbox" ', $checked1,' disabled> Madera</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Bloque</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked3,' disabled> Hormigón</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked4,' disabled> Loza</label>';
                        
                        ?>
                        </td>
                       
                       
                    </tr>
                    <tr>
                        <td class="auto-style13"><b>Piso: </b>
                        <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';
                        if (str_contains($piso, "Madera")) {
                            $checked1='checked';
                        };
                        if (str_contains($piso,"Hormigón")) {
                            $checked2='checked';
                        };
                        if (str_contains($piso,"Porcelanato")) {
                            $checked3='checked';
                        };
                        if (str_contains($piso, "Tierra")) {
                            $checked4='checked';
                        };
                        echo '&nbsp;&nbsp;<label><input type="checkbox" ', $checked1,' disabled> Madera</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Hormigon</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked3,' disabled> Porcelanato</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked4,' disabled> Tierra</label>';
                        
                        ?>
                           
                        </td>
                    </tr>
                </table>
            </p>
            
                <label style="font-weight: bold">PERFIL DEL ENCUESTADO</label>
            <br>
            <br>
            <b>Nombre del encuestado: </b>
            <?php echo $nombre_pers ?>
            <br>
            <br>
            <b>Direccion del encuestado: </b>
            <?php echo $direccion_pers ?>
            <br>
            </b> <br class="Apple-interchange-newline" />
             <table style="width:100%;">
                <tr>
                    <td class="auto-style14"><b>Edad: </b>
                        <?php echo $edad_pers ?>

                        <asp:TextBox ID="EDAD_E" Height="23px" Width="125px" Enabled="False"></asp:TextBox>
                    </td>
                    <td class="auto-style15"><b>Sexo: </b></td>
                    <td>

                    <?php
                        $checked1='unchecked';
                        $checked2='unchecked';

                        if ($sexo_pers == 'Hombre') {
                            $checked1='checked';
                        };
                        if ($sexo_pers == 'Mujer') {
                            $checked2='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Masculino</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Femenino</label>';
                        
                        ?>
                    </td>
                </tr>
              
              
            </table>
            <br>
           
            <meta charset="utf-8" />
            <b id="docs-internal-guid-bfa2592c-7fff-0e81-56dc-4acd11971035" style="font-weight:normal;"><span style="font-size:11pt;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">LA VIVIENDA QUE HABITA ES:
            </span></b>
            <table style="width:100%;">
                <tr>
                    <td class="auto-style18">

                        <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';

                        if (str_contains($vivienda_enc1,'Propia')) {
                            $checked1='checked';
                        };
                        if (str_contains($vivienda_enc1, 'Prestada')) {
                            $checked2='checked';
                        };
                        if (str_contains($vivienda_enc1, 'Rentada')) {
                            $checked3='checked';
                        };
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Propia</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Prestada</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked3,' disabled> Rentada</label>';
                        
                        ?>
                    </td>
                </tr>
                
            </table>
            <br>
            <meta charset="utf-8" />
            <b id="docs-internal-guid-072bfdce-7fff-10a0-6e6f-bcd184e5536a" style="font-weight:bold; font-size:15px">¿CUÁNTAS PERSONAS HABITAN LA VIVIENDA?&nbsp;&nbsp;&nbsp;&nbsp;
            </span>
            
            </b>
            <?php echo $numeropersonas_enc1 ?>
            <br><br>
         
             <meta charset="utf-8" />
            <b id="docs-internal-guid-a666597a-7fff-9746-a1fa-4ead69e1b9aa" style="font-weight:normal;"><span style="font-size:11pt;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">ALGÚN INTEGRANTE DE LA FAMILIA ¿HA TENIDO PROBLEMAS ESTOMACALES O INTESTINALES EN ESTE AÑO?&nbsp;&nbsp;&nbsp;&nbsp; </span> </br>           
                <?php
                        $checked1='unchecked';
                        $checked2='unchecked';

                        if ($p_estomacales) {
                            $checked1='checked';
                        };
                        if (!$p_estomacales) {
                            $checked2='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Si</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> No</label>';
                        
                        ?>



            <b id="docs-internal-guid-ca3f761a-7fff-70c1-9999-db3875f5e5b1" style="font-weight:normal;">
            <br>
            <br>
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt;" class="auto-style80">
                <span style="font-size:12pt;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">¿Tuvo tratamiento médico?&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <b id="docs-internal-guid-ca3f761a-7fff-70c1-9999-db3875f5e5b1" style="font-weight:normal;"><asp:CheckBox ID="TRATAMIENTO_E_SI" Text="Si" Enabled="False"/>  
                
                <?php
                        $checked1='unchecked';
                        $checked2='unchecked';

                        if ($p_estomacales_tipo!='' || $p_estomacales_otros!='') {
                            $checked1='checked';
                        };
                        if ($p_estomacales_tipo=='' && $p_estomacales_otros=='') {
                            $checked2='checked';
                        };
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Si</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> No</label>';
                        
                        ?>
             
            </b>
            </p>
            </b>
            </br>
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt;font-weight:bold">
                ¿Cual fue el diagnostico?</p>
                <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';
                        $checked5='unchecked';

                        if (str_contains($p_estomacales_tipo,'Diarrea')) {
                            $checked1='checked';
                        };
                        if (str_contains($p_estomacales_tipo, 'Gastroenteritis')) {
                            $checked2='checked';
                        };
                        if (str_contains($p_estomacales_tipo, 'Amebiasis')) {
                            $checked3='checked';
                        };
                        if (str_contains($p_estomacales_tipo, 'Echericha coli')) {
                            $checked4='checked';
                        };
                        if (str_contains($p_estomacales_tipo, 'Colera')) {
                            $checked5='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Diarrea</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Gastroenteritis</label><br>';
                        echo '<label><input type="checkbox" ', $checked3,' disabled> Amebiasis</label><br>';
                        echo '<label><input type="checkbox" ', $checked4,' disabled> Echericha coli</label><br>';
                        echo '<label><input type="checkbox" ', $checked5,' disabled> Cólera</label><br>';
                        ?>
                        <b>Otras: </b>       <?php echo $p_estomacales_otros ?>
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt;">
                <br>
            </p>
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt; font-weight:bold">
                ¿Algun integrante de la familia a tenido enfermedades de la piel?&nbsp;&nbsp;&nbsp;
                
                <?php
                        $checked1='unchecked';
                        $checked2='unchecked';

                        if ($p_piel) {
                            $checked1='checked';
                        };
                        if (!$p_piel) {
                            $checked2='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Si</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> No</label>';
                        
                        ?>
                        </p>
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt;">
                &nbsp;</p>
            <b id="docs-internal-guid-ca3f761a-7fff-70c1-9999-db3875f5e5b2" style="font-weight: normal;">
              <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt; font-weight:bold">
                    ¿Tuvo tratamiento médico?&nbsp;&nbsp;&nbsp;

                    <?php
                        $checked1='unchecked';
                        $checked2='unchecked';

                        if ($p_piel_tipo!='' || $p_piel_otros!='') {
                            $checked1='checked';
                        };
                        if ($p_piel_tipo=='' && $p_piel_otros=='') {
                            $checked2='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Si</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> No</label>';
                        
                        ?>
             </p>   
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt; font-weight:bold">
                    &nbsp;</p>
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt;font-weight:bold">
                ¿Cual fue el diagnostico?</p>

                <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';

                        if (str_contains($p_piel_tipo, 'Hongos')) {
                            $checked1='checked';
                        };
                        if (str_contains($p_piel_tipo, 'Escabiosis')) {
                            $checked2='checked';
                        };
                        if (str_contains($p_piel_tipo, 'Alergias')) {
                            $checked3='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Hongos</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Escabiosis</label><br>';
                        echo '<label><input type="checkbox" ', $checked3,' disabled> Alergias</label>';
                        ?>
            <br><b>Otras: </b>&nbsp;&nbsp;
            <?php echo $p_piel_otros ?>
            </p>
            
            </b>
            
            
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt; font-weight:bold">¿De donde se abastece para el agua de consumo? </p>
            <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';
                        $checked5='unchecked';
                        $checked6='unchecked';

                        if (str_contains($a_agua, 'Red agua potable')) {
                            $checked1='checked';
                        };
                        if (str_contains($a_agua, 'Pozo')) {
                            $checked2='checked';
                        };
                        if (str_contains($a_agua, 'Agua rio')) {
                            $checked3='checked';
                        };
                        if (str_contains($a_agua, 'Agua lluvia')) {
                            $checked4='checked';
                        }
                        if (str_contains($a_agua, 'Agua de tanquero')) {
                            $checked5='checked';
                        };
                        if (str_contains($a_agua, 'Agua embotellada')) {
                            $checked6='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Red agua potable</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Pozo</label><br>';
                        echo '<label><input type="checkbox" ', $checked3,' disabled>  Agua de río</label>&nbsp;&nbsp;&nbsp;Nombre del rio o cuerpo de agua: &nbsp;'; echo $nombre_rio;  
                        echo '<br><label><input type="checkbox" ', $checked4,' disabled> Agua lluvia</label><br>';
                        echo '<label><input type="checkbox" ', $checked5,' disabled> Agua de tanquero</label><br>';
                        echo '<label><input type="checkbox" ', $checked6,' disabled> Agua embotellada</label><br>';
                        ?>

<b>Otro: </b>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $a_agua_otros ?>
            <br>
            <br>
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt; font-weight:bold">
            ¿Tiene cisterna o tanque elevado?<br></p>
            <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';

                        if (str_contains($tanque_cisterna, 'Cisterna')) {
                            $checked1='checked';
                        };
                        if (str_contains($tanque_cisterna, 'Tanque Elevado')) {
                            $checked2='checked';
                        };
                        if (str_contains($tanque_cisterna, 'Ninguno')) {
                            $checked3='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Cisterna</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Tanque Elevado</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked3,' disabled> Ninguno</label>';
                        ?>
            <br><br>
            
            <table style="width:100%;">
                <tr>
                    <td class="auto-style20" style="font-weight:bold">Capacidad de cisterna (m<meta charset="utf-8" /><b id="docs-internal-guid-84503bf5-7fff-7f31-b157-f0c61aa009aa" style="font-weight:bold;">
                        <span style="font-size:0.6em;vertical-align:super;">3</span></b>)</td>
                    <td class="auto-style19" style="font-weight:bold">Capacidad de tanque (litros)</td>
                </tr>
                <tr>
                    <td class="auto-style20">
                        
                    <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';
                        $checked5='unchecked';
                        $checked6='unchecked';
                        $checked7='unchecked';

                        if ($capacidadsisterna_sistan == 1) {
                            $checked1='checked';
                        };
                        if ($capacidadsisterna_sistan == 2) {
                            $checked2='checked';
                        };
                        if ($capacidadsisterna_sistan == 3) {
                            $checked3='checked';
                        };
                        if ($capacidadsisterna_sistan == 4) {
                            $checked4='checked';
                        }
                        if ($capacidadsisterna_sistan == 5) {
                            $checked5='checked';
                        };
                        if ($capacidadsisterna_sistan == 6) {
                            $checked6='checked';
                        };
                        if ($capacidadsisterna_sistan == 7) {
                            $checked7='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> 1</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> 2</label><br>';
                        echo '<label><input type="checkbox" ', $checked3,' disabled>  3</label>';
                        echo '<br><label><input type="checkbox" ', $checked4,' disabled> 4</label><br>';
                        echo '<label><input type="checkbox" ', $checked5,' disabled> 5</label><br>';
                        echo '<label><input type="checkbox" ', $checked6,' disabled> 6</label><br>';
                        echo '<label><input type="checkbox" ', $checked6,' disabled> 7</label><br>';
                        ?>
                    </td>
                    <td class="auto-style19">
                    <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';
                        $checked5='unchecked';
                        $checked6='unchecked';
                        $checked7='unchecked';

                        if ($capacidadtanque_sistan == 250) {
                            $checked1='checked';
                        };
                        if ($capacidadtanque_sistan == 500) {
                            $checked2='checked';
                        };
                        if ($capacidadtanque_sistan == 600) {
                            $checked3='checked';
                        };
                        if ($capacidadtanque_sistan == 1000) {
                            $checked4='checked';
                        }
                        if ($capacidadtanque_sistan == 1100) {
                            $checked5='checked';
                        };
                        if ($capacidadtanque_sistan == 2000) {
                            $checked6='checked';
                        };
                        if ($capacidadtanque_sistan == 2500) {
                            $checked7='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> 250</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> 500</label><br>';
                        echo '<label><input type="checkbox" ', $checked3,' disabled>  600</label>';
                        echo '<br><label><input type="checkbox" ', $checked4,' disabled> 1000</label><br>';
                        echo '<label><input type="checkbox" ', $checked5,' disabled> 1100</label><br>';
                        echo '<label><input type="checkbox" ', $checked6,' disabled> 2000</label><br>';
                        echo '<label><input type="checkbox" ', $checked6,' disabled> 2500</label><br>';
                        ?>
                    </td>
                </tr>
              
            </table>
            <br>
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt; font-weight:bold">
            En caso de tener cisterna o tanque elevado indique con que frecuencia realiza la limpieza o lavado</p>
            <table style="width:100%;">
                <tr>
                    <td class="auto-style81">
                    <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';

                        if (str_contains($frecuencialimpieza, 'Semanal')) {
                            $checked1='checked';
                        }
                        if (str_contains($frecuencialimpieza, 'Mensual')) {
                            $checked2='checked';
                        };
                        if (str_contains($frecuencialimpieza, 'Semestral')) {
                            $checked3='checked';
                        };
                        if (str_contains($frecuencialimpieza, 'Cada dos años')) {
                            $checked4='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Semanal</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Mensual</label><br>';
                        echo '<label><input type="checkbox" ', $checked3,' disabled>  Semestral</label>';
                        echo '<br><label><input type="checkbox" ', $checked4,' disabled> Cada dos años</label><br>';
                        ?>
                        
                    </td>
                    <td>
                    <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';

                        if (str_contains($frecuencialimpieza, 'Quincenal')) {
                            $checked1='checked';
                        }
                        if (str_contains($frecuencialimpieza, 'Trimestral')) {
                            $checked2='checked';
                        };
                        if (str_contains($frecuencialimpieza, 'Semestral')) {
                            $checked3='checked';
                        };
                        if (str_contains($frecuencialimpieza, 'Nunca')) {
                            $checked4='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Quincenal</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Trimestral</label><br>';
                        echo '<label><input type="checkbox" ', $checked3,' disabled>  Semestral</label>';
                        echo '<br><label><input type="checkbox" ', $checked4,' disabled> Nunca</label><br>';
                        ?>
                    </td>
                  
                </tr>
              
               
            </table>
            <br>
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt; font-weight:bold">
            En caso de tener cisterna o tanque elevado indique si realiza cloracion al agua de estos almacenamientos<br></p>
            <b id="docs-internal-guid-ca3f761a-7fff-70c1-9999-db3875f5e5b3" style="font-weight: normal;">
            <?php
                        $checked1='unchecked';
                        $checked2='unchecked';

                        if ($frecuenciacloracion != '') {
                            $checked1='checked';
                        }
                        if ($frecuenciacloracion == '') {
                            $checked2='checked';
                        }
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Si</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> No</label>';                        
                        ?>                
            <br>
            </span>
            </b>
            <br>
            <table style="width:100%;">
                <tr>
                    <td class="auto-style82" style="font-weight:bold">Con qué frecuencia clora el tanque?</td>
                    <td style="font-weight:bold">Cuál es la dosificacion utilizada?</td>
                 
                </tr>
                <tr>
                    <td class="auto-style82">

                    <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';
                        $checked5='unchecked';
                        $checked6='unchecked';
                        $checked7='unchecked';
                        $checked8='unchecked';

                        if (str_contains($frecuenciacloracion, 'Semanal')) {
                            $checked1='checked';
                        };
                        if (str_contains($frecuenciacloracion, 'Quincenal')) {
                            $checked2='checked';
                        };
                        if (str_contains($frecuenciacloracion, 'Mensual')) {
                            $checked3='checked';
                        };
                        if (str_contains($frecuenciacloracion, 'Bimensual')) {
                            $checked4='checked';
                        }
                        if (str_contains($frecuenciacloracion, 'Trimestral')) {
                            $checked5='checked';
                        };
                        if (str_contains($frecuenciacloracion, 'Cuatrimestral')) {
                            $checked6='checked';
                        };
                        if (str_contains($frecuenciacloracion, 'Semestral')) {
                            $checked7='checked';
                        };
                        if (str_contains($frecuenciacloracion, 'Anual')) {
                            $checked8='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Semanal</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Quincenal</label><br>';
                        echo '<label><input type="checkbox" ', $checked3,' disabled>  Mensual</label>';
                        echo '<br><label><input type="checkbox" ', $checked4,' disabled> Bimensual</label><br>';
                        echo '<label><input type="checkbox" ', $checked5,' disabled> Trimestral</label><br>';
                        echo '<label><input type="checkbox" ', $checked6,' disabled> Cuatrimestral</label><br>';
                        echo '<label><input type="checkbox" ', $checked7,' disabled> Semestral</label><br>';
                        echo '<label><input type="checkbox" ', $checked8,' disabled> Anual</label><br>';
                        ?>
                        
                        <b>Otros: </b>&nbsp; <?php echo $otrofrecuenciacloracion_clolimp ?>
                    </td>
                    <td>

                    <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';
                        $checked5='unchecked';
                        $checked6='unchecked';
                        $checked7='unchecked';
                        $checked8='unchecked';

                        if (str_contains($dosiscloracion, '1 - 3 gotas por litro')) {
                            $checked1='checked';
                        };
                        if (str_contains($dosiscloracion, '3 - 6 gotas por litro')) {
                            $checked2='checked';
                        };
                        if (str_contains($dosiscloracion, '6 - 10 gotas por litro')) {
                            $checked3='checked';
                        };
                        if (str_contains($dosiscloracion, '10 - 1000 gotas por litro')) {
                            $checked4='checked';
                        }
                        if (str_contains($dosiscloracion, '1000 gotas - 1/4 taza por litro')) {
                            $checked5='checked';
                        };
                        if (str_contains($dosiscloracion, '1/4 - 1/2 taza por litro')) {
                            $checked6='checked';
                        };
                        if (str_contains($dosiscloracion, '1/2 - 3/4 taza por litro')) {
                            $checked7='checked';
                        };
                        if (str_contains($dosiscloracion, '3/4 a 1 taza por litro')) {
                            $checked8='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> 1 - 3 gotas por litro</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> 3 - 6 gotas por litro</label><br>';
                        echo '<label><input type="checkbox" ', $checked3,' disabled>  6 - 10 gotas por litro</label>';
                        echo '<br><label><input type="checkbox" ', $checked4,' disabled> 10 - 1000 gotas por litro</label><br>';
                        echo '<label><input type="checkbox" ', $checked5,' disabled> 1000 gotas - 1/4 taza por litro</label><br>';
                        echo '<label><input type="checkbox" ', $checked6,' disabled> 1/4 - 1/2 taza por litro</label><br>';
                        echo '<label><input type="checkbox" ', $checked7,' disabled> 1/2 - 3/4 taza por litro</label><br>';
                        echo '<label><input type="checkbox" ', $checked8,' disabled> 3/4 a 1 taza por litro</label><br>';
                        ?>
                        
                        <b>Otros: </b>
                        <?php echo $otrodosiscloracion_clolimp ?>
                    </td>
                  
                </tr>
                
            </table>
            <br><p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt; font-weight:bold">
             El agua que usted utiliza para beber es:
            </p>
            <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';

                        if (str_contains($o_agua, 'Directo de la Llave')) {
                            $checked1='checked';
                        };
                        if (str_contains($o_agua, 'Hervida')) {
                            $checked2='checked';
                        };
                        if (str_contains($o_agua, 'Filtrada')) {
                            $checked3='checked';
                        };
                        if (str_contains($o_agua, 'Agua Embotellada')) {
                            $checked4='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Directo de la llave</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Hervida</label><br>';
                        echo '<label><input type="checkbox" ', $checked3,' disabled> Filtrada</label><br>';
                        echo '<label><input type="checkbox" ', $checked4,' disabled> Agua embotellada</label>';
                        ?>
            <br> <br>

            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt; font-weight:bold">
            Realiza algun tipo de tratamiento al agua que utiliza para beber:<b id="docs-internal-guid-ca3f761a-7fff-70c1-9999-db3875f5e5b4" style="font-weight: normal;">&nbsp;&nbsp;&nbsp;
            <?php
                        $checked1='unchecked';
                        $checked2='unchecked';

                        if ($tratamientoorigenagua_enc1 != '') {
                            $checked1='checked';
                        };
                        if ($tratamientoorigenagua_enc1 == '') {
                            $checked2='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Si</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> No</label>';
                        
                        ?>   
           <br><br> Indique el Tramiento:&nbsp;&nbsp;&nbsp; <?php echo $tratamientoorigenagua_enc1 ?>
            </b>
                <br></p>
            
            <br>
            <p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt; font-weight:bold">
            ¿Que uso le da al agua?</p> 
            <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';
                        $checked4='unchecked';
                        $checked5='unchecked';

                        if (str_contains($u_agua, 'Cocina')) {
                            $checked1='checked';
                        }
                        if (str_contains($u_agua, 'Aseo Personal')) {
                            $checked2='checked';
                        };
                        if (str_contains($u_agua, 'Lavado de ropa')) {
                            $checked3='checked';
                        };
                        if (str_contains($u_agua, 'Animales')) {
                            $checked4='checked';
                        };
                        if (str_contains($u_agua, 'Riego')) {
                            $checked5='checked';
                        };
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Cocina</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled> Aseo Personal</label><br>';
                        echo '<label><input type="checkbox" ', $checked3,' disabled>  Lavado de Ropa</label><br>';
                        echo '<label><input type="checkbox" ', $checked4,' disabled>  Animales</label>';
                        echo '<br><label><input type="checkbox" ', $checked5,' disabled> Riego</label><br>';
                        ?>
                        <br>
<p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt; font-weight:bold">
En caso de tener animales que consumen agua indicar, si estos son:</p> 
            <?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';

                        if ($mascotas_animal) {
                            $checked1='checked';
                        }
                        if ($consumo_animal != '') {
                            $checked2='checked';
                        };
                        if ($venta_animal != '') {
                            $checked3='checked';
                        };
                        
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Mascotas</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled>  Para consumo Familiar: &nbsp;&nbsp;&nbsp;Indique que animales: &nbsp;&nbsp;</label>'; echo $consumo_animal; 
                        echo '<br><label><input type="checkbox" ', $checked3,' disabled> Para venta: &nbsp;&nbsp;&nbsp;Indique que animales: &nbsp;&nbsp;</label>'; echo $venta_animal;
                        ?>
<br>
<p dir="ltr" style="line-height:1.2;margin-top:0pt;margin-bottom:0pt; font-weight:bold">
En caso de tener sembrios, jardin , que requieran aguan, idicar si estos son:</p> 
<?php
                        $checked1='unchecked';
                        $checked2='unchecked';
                        $checked3='unchecked';

                        if ($ornamentales_riego) {
                            $checked1='checked';
                        }
                        if ($consumo_riego != '') {
                            $checked2='checked';
                        };
                        if ($venta_riego != '') {
                            $checked3='checked';
                        };
                        
                        
                        echo '<label><input type="checkbox" ', $checked1,' disabled> Ornamentales</label><br>';
                        echo '<label><input type="checkbox" ', $checked2,' disabled>  Para consumo Familiar: &nbsp;&nbsp;&nbsp;Indique que productos: &nbsp;&nbsp;</label>'; echo $consumo_riego; 
                        echo '<br><label><input type="checkbox" ', $checked3,' disabled> Para venta: &nbsp;&nbsp;&nbsp;Indique que productos: &nbsp;&nbsp;</label>'; echo $venta_riego;
                        ?>          


                </table>
            
        </div>
        <td class="col" ><div ><br><br>
            <a  class="btn btn-success" href="mapa.php?mostrar_todo=ok">Atrás</a></td>
        </div>
    </form>
    <br>
</div>
 
</body>

</html>
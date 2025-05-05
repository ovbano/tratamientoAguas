<?php
require_once("./php/leerB-2.php")

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
                        <center>Resultados de Análisis </center></td>
                </tr>
            </table>
            <br><br>
            <table>
                
                <tr>
                    <label class="intro"><center><b>PROYECTO DE VINCULACIÓN</b><br> Caracterización fisicoquímica y microbiológica del 
                        agua que se consume en la parroquia Luz de América, Santo Domingo de los Tsáchilas, Ecuador</center></label>
                </tr>
            </table>
&nbsp;<table width ="100%" class='table-responsive' class="auto-style31" style="border-style: solid; padding-top: 10px; border-collapse:separate">
                <tr class="linea1">
        
                    <td class="auto-style74"><b>Usuario del servicio: </b> </td>
                    <td class="auto-style68">
                        <?php echo $nombrePersona_enc2?>
                    </td>
                    <td class="auto-style69"><b>Codigo del Encuestador: </b> </td>
                    <td class="auto-style59">
                        <?php echo $id_encuestador ?>
                    </td>
                </tr>
                <tr>
                    <td class="auto-style75"><b>Fecha de toma de muestra: </b> </td>
                    <td class="auto-style65">
                        <?php echo $fecha_enc2 ?>
                    </td>
                    <td class="auto-style66"><b>Nro. de muestra: </b> </td>
                    <td class="auto-style46">
                        <?php echo $id_enc2 ?>
                    </td>

                </tr>
                <tr>
                    <td class="auto-style76"><b>Hora toma de muestra: </b> </td>
                    <td class="auto-style50">
                        <?php echo $horaInicio_enc2 ?>
                    </td>
                    <td class="auto-style51"><b>Punto toma de muestra: </b> </td>
                    <td class="auto-style45">
                        <?php echo $lugar_enc2 ?>
                    </td>
                </tr>
                 <tr>
                    <td class="auto-style63"><b>Coordenadas UTM: </b> </td>
                    <td class="auto-style54">
                        <?php echo $latitud ?>&nbsp;&nbsp;&nbsp;
                        <?php echo $longitud ?>
                     </td>
                    <td class="auto-style51"><b>Direcion de muestra: </b> </td>
                    <td class="auto-style45">
                        <?php echo $direccionPersona_enc2 ?>
                    </td>
                </tr>
                <tr>
                    <td class="auto-style63"><b>Barrio: </b> </td>
                    <td class="auto-style54">
                        <?php echo $barrio ?>
                     </td>
                </tr>
            </table>
             <meta charset="utf-8" />
            <b id="docs-internal-guid-984d0d86-7fff-e265-96b3-6fa705254cb8" style="font-weight:normal;">
            <br>
            
            <b class="m-0 row justify-content-center">RESULTADOS DE LA MUESTRA</b>
            <br>
            <?php
            include "tabla.php";
            ?>

    
        </div>

        <!--
        <td class="col" >
            <div >
                <br><br>
                <a  class="btn btn-success" href="registros.php?mostrar_todo=ok">Atrás</a>
            </div>
        </td>
        -->

        </div>
    </form>
    <br>
 </div>
</body>

</html>
<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3.2.0/es5/tex-chtml.js"></script>

    <style>


:root {
    --bg-table-stripe: #f6f6f5;
    --b-table: #e3e3e2;
    --caption: #242423;
}

table {
    background-color: transparent;
    border-collapse:collapse;
  	font-family: Arial, Helvetica, sans-serif
}

th {
    text-align:left
}

.dcf-txt-center {
      text-align: center!important
    }

    .dcf-txt-left {
      text-align: left!important
    }

    .dcf-txt-right {
      text-align: right!important
    }
    
.dcf-table caption {
      color: var(--caption);
      font-size: 1.13em;
      font-weight: 700;
      padding-bottom: .56rem
    }

    .dcf-table thead {
      font-size: .84em
    }

    .dcf-table tbody {
      border-bottom: 1px solid var(--b-table);
      border-top: 1px solid var(--b-table);
      font-size: .84em
    }

    .dcf-table tfoot {
      font-size: .84em
    }

    .dcf-table td, .dcf-table th {
      padding-right: 1.78em
    }

    .dcf-table-bordered, .dcf-table-bordered td, .dcf-table-bordered th {
      border: 1px solid var(--b-table)
    }

    .dcf-table-bordered td, .dcf-table-bordered th, .dcf-table-striped td, .dcf-table-striped th {
      padding-left: 1em;
      padding-right: 1em
    }

    .dcf-table-bordered tr:not(:last-child), .dcf-table-striped tr:not(:last-child) {
      border-bottom: 1px solid var(--b-table)
    }

    .dcf-table-striped tbody tr:nth-of-type(2n) {
      background-color: var(--bg-table-stripe)
    }

    .dcf-table thead td, .dcf-table thead th {
      padding-bottom: .75em;
      vertical-align: bottom
    }

    .dcf-table tbody td, .dcf-table tbody th, .dcf-table tfoot td, .dcf-table tfoot th {
      padding-top: .75em;
      vertical-align: top
    }

    .dcf-table tbody td, .dcf-table tbody th {
      padding-bottom: .75em
    }

    .dcf-table-bordered thead th {
      padding-top: 1.33em
    }

    .dcf-wrapper-table-scroll {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      left: 50%;
      margin-left: -50vw;
      margin-right: -50vw;
      padding-bottom: 1em;
      position: relative;
      right: 50%;
      width: 100vw
    }

    @media only screen and (max-width:42.09em) {
      .dcf-table-responsive thead {
        clip: rect(0 0 0 0);
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        height: 1px;
        overflow: hidden;
        position: absolute;
        width: 1px;
        white-space: nowrap
      }
      .dcf-table-responsive tr {
        display: block
      }
      .dcf-table-responsive td {
        -webkit-column-gap: 3.16vw;
        -moz-column-gap: 3.16vw;
        column-gap: 3.16vw;
        display: grid;
        grid-template-columns: 1fr 2fr;
        text-align: left!important
      }
      .dcf-table-responsive.dcf-table-bordered, .dcf-table-responsive.dcf-table-bordered thead th {
        border-width: 0
      }
      .dcf-table-responsive.dcf-table-bordered tbody td {
        border-top-width: 0
      }
      .dcf-table-responsive:not(.dcf-table-bordered) tbody tr {
        padding-bottom: .75em
      }
      .dcf-table-responsive:not(.dcf-table-bordered) tbody td {
        padding-bottom: 0
      }
      .dcf-table-responsive:not(.dcf-table-bordered):not(.dcf-table-striped) tbody td {
        padding-right: 0
      }
      .dcf-table-responsive.dcf-table-bordered tbody tr:last-child td:last-child {
        border-bottom-width: 0
      }
      .dcf-table-responsive tbody td:before {
        content: attr(data-label);
        float: left;
        font-weight: 700;
        padding-right: 1.78em
      }
    }

.dcf-overflow-x-auto {
      overflow-x: auto!important;
      -webkit-overflow-scrolling: touch
    }
    
.dcf-w-100\% {
  width: 100%!important;
		}
    
</style>

</head>
<body>

<b class="m-0 row justify-content-center">Análisis Microbiológico</b>
<div class="table-responsive">
  <table class="dcf-table dcf-table-responsive dcf-table-bordered dcf-table-striped dcf-w-100%">
    <thead>
      <tr>
        <th width="500px" scope="col">Coliformes totales, NMP/100ml</th>
        <th width="500px" scope="col">Límite máximo permitido</th>
        <th width="500px" scope="col">Muestra</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td>24 horas</td>
      <td>&lt; 1.1</td>
      <td><?php echo $analsisMicrobiologico ?></td>
      </tr>
    </tbody>
  </table>
  
</div>

<b class="m-0 row justify-content-center">Análisis Fisicoquímico</b>
    
<table class="dcf-table dcf-table-responsive dcf-table-bordered dcf-table-striped dcf-w-100%">
	
	<thead>
		<tr>
			<th width="500px" scope="col">Parámetros</th>
			<th width="500px" scope="col">Límite máximo permitido</th>
			<th width="500px" scope="col">Muestra</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">pH</th>
			<td data-label="LÍMITE MÁXIMO PERMITIDO">6.5 a 8.0</td>
			<td data-label="MUESTRA"><?php echo $pH ?></td>
		</tr>
		<tr>
			<th scope="row">Color (Upt-Co)</th>
			<td data-label="LÍMITE MÁXIMO PERMITIDO">0.0 a 15.0</td>
			<td data-label="MUESTRA"><?php echo $analisisColor ?></td>
		</tr>
		<tr>
			<th scope="row">Cloro Libre Residual (mg/L)</th>
			<td data-label="LÍMITE MÁXIMO PERMITIDO">0.3 a 1.5</td>
			<td data-label="MUESTRA"><?php echo $cloroLibreResidual ?></td>
		</tr>
		<tr>
			<th scope="row">Dureza Ca (mg/L)</th>
			<td data-label="LÍMITE MÁXIMO PERMITIDO">300</td>
			<td data-label="MUESTRA"><?php echo $analisisDureza ?></td>
		</tr>
		<tr>
			<th scope="row">Conductividad (µS/cm) </th>
			<td data-label="LÍMITE MÁXIMO PERMITIDO">-</td>
			<td data-label="MUESTRA"><?php echo $conductividad ?></td>
		</tr>
		<tr>
			<th scope="row">Monocloroaminas (mg/L)</th>
			<td data-label="LÍMITE MÁXIMO PERMITIDO">0.0 a 3.0</td>
			<td data-label="MUESTRA"><?php echo $monocloroaminas ?></td>
		</tr>
		<tr>
			<th scope="row">Nitratos \(NO^{^-}_{3}\) (mg/L)</th>
			<td data-label="LÍMITE MÁXIMO PERMITIDO">0.0 a 50.0</td>
			<td data-label="MUESTRA"><?php echo $analisisNitratos ?></td>
		</tr>
    <tr>
			<th scope="row">Nitritos \(NO^{^-}_{2}\)(mg/L)</th>
			<td data-label="LÍMITE MÁXIMO PERMITIDO">0.2</td>
			<td data-label="MUESTRA"><?php echo $analisisNitritos ?></td>
		</tr>
		<tr>
			<th scope="row">Turbiedad (NTU)</th>
			<td data-label="LÍMITE MÁXIMO PERMITIDO">0.0 a 5.0</td>
			<td data-label="MUESTRA"><?php echo $analisisTurbNTU ?></td>
		</tr>
		<tr>
			<th scope="row">Temperatura (°C)</th>
			<td data-label="LÍMITE MÁXIMO PERMITIDO"></td>
			<td data-label="MUESTRA"><?php echo $analisisTemperatura ?></td>
		</tr>
    <tr>
			<th class="text-center" colspan="3" scope="row">Observaciones</th>
		</tr>
    <tr>
			<td class="text-center" colspan="3"><?php echo $observaciones ?></td>
		</tr>
	</tbody>
</table>

    
</body>
</html>
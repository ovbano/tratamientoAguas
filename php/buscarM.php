<?php

function imprimirTabla($resultado)
{
  $numero = sizeof($resultado);
  echo "<a class='btn btn-primary mt-2' href='mapa.php?mostrar_todo=ok'>Mostrar todos los registros</a>";
  echo "<br><br>";
  echo "<big style='color: white'>Resultados encontrados:</big><b> " . $numero . "</b>";
  echo "<br><br><br>";
  echo "<div class='table-responsive' style='height: 470px;'>";
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
  echo "<tbody>";

  foreach ($resultado as $row) {
    echo '<tr>';
    echo '<td>' . $row['codigo_encuesta'] . '</td>';
    echo '<td>' . $row['codigo_encuestador'] . '</td>';
    echo '<td>' . $row['nombre_persona'] . '</td>';
    echo '<td>' . $row['dir_persona'] . '</td>';
    echo '<td>';
    echo '<form action="leer.php" method="post">';
    echo '<input type="hidden" name="id" value="' . $row['codigo_encuesta'] . '">';
    echo '<input type="submit" name="submit" class="btn btn-success acciones" value="Abrir">';
    echo '</form>';
    echo '</td>';
    echo '</tr>';
  }

  echo "</tbody></table></div>";
}

// Ruta al archivo JSON (usa / mejor que \ por compatibilidad multiplataforma)
$jsonPath = __DIR__ . '\encuesta1.json';

$datos = [];

if (file_exists($jsonPath)) {
  $jsonData = file_get_contents($jsonPath);
  $datos = json_decode($jsonData, true);

  if (!is_array($datos)) {
    echo "<p style='color: red;'>Error: El archivo JSON no tiene el formato esperado.</p>";
    exit;
  }
} else {
  echo "<p style='color: red;'>No se encontró el archivo JSON en la ruta especificada: $jsonPath</p>";
  exit;
}

// Búsqueda en array con expresiones regulares
function buscarPorCampo($datos, $campo, $keyword, $acumulador)
{
  foreach ($datos as $doc) {
    if (isset($doc[$campo]) && preg_match("/" . preg_quote($keyword, "/") . "/i", $doc[$campo])) {
      unset($doc['foto']);
      $acumulador[] = $doc;
    }
  }
  return $acumulador;
}

// Elimina duplicados por ID de encuesta
function quitarDuplicados($array)
{
  $unique = [];
  $ids = [];
  foreach ($array as $item) {
    if (!in_array($item['codigo_encuesta'], $ids)) {
      $unique[] = $item;
      $ids[] = $item['codigo_encuesta'];
    }
  }
  return $unique;
}

// Procesamiento de búsqueda
if (!isset($_POST['buscar'])) {
  $_POST['buscar'] = '';
}

if (!empty($_POST)) {
  $aKeyword = trim($_POST['buscar']);

  if ($aKeyword !== '') {
    $respuesta = [];
    $respuesta = buscarPorCampo($datos, 'codigo_encuesta', $aKeyword, $respuesta);
    $respuesta = buscarPorCampo($datos, 'codigo_encuestador', $aKeyword, $respuesta);
    $respuesta = buscarPorCampo($datos, 'nombre_persona', $aKeyword, $respuesta);
    $respuesta = buscarPorCampo($datos, 'dir_persona', $aKeyword, $respuesta);

    $respuesta = quitarDuplicados($respuesta);
    imprimirTabla($respuesta);
  } else {
    // Mostrar todos los resultados si no hay palabra clave
    foreach ($datos as &$doc) {
      unset($doc['foto']);
    }
    imprimirTabla($datos);
  }
}
?>

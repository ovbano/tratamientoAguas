<?php
$nameMapa = 'coliformesFecales';
$lSup = 8;
$lInf = 6.5;
require_once "./../php/mapaB-3F.php";
require_once './contar-marcadores.php';
$contadores = contarMarcadores($client->appexacta->encuesta2f, $nameMapa, $lInf, $lSup);
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/logo.png" />
    <meta name="theme-color" content="#000000" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>

    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="stylesheet" href="../css/equipo.css">

    <style type="text/css">
        #mapa {
            height: 50.5vh;
        }

        .h2s {
            font-size: 3vh;
        }

        .centrado {
            text-align: center;
        }

        .contact {
            position: relative;
            width: 100%;
            color: #FFF;
            text-align: center;
            bottom: 0px;
            margin-bottom: 0px;
        }

        .navbar-nav li:hover>ul.dropdown-menu {
            display: block;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: -95%;
            margin-top: 3px;
        }

        .navbar-nav li:hover > .dropdown-menu {
            display: block;
        }
        
        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }

        /*girar el símbolo de intercalación al pasar el mouse*/
        .dropdown-menu>li>a:hover:after {
            text-decoration: underline;
            transform: rotate(-90deg);
        }

        .image-container {
            display: flex;
            justify-content: space-between;
            padding-left: 10%;
            padding-right: 1%;
        }

        @media (max-width: 767px) {
            .image-container {
                display: none;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid" style="margin-left: 10px;">
                <a class="navbar-brand" href="https://santodomingo.espe.edu.ec/ingenieria-en-biotecnologia/">
                    <img src="../img/SantoDomingo1.png" class="img-fluid" width="350">
                    <img style="padding-left: 20px;" src="../img/logo2sinfondo.png" class="img-fluid" width="115">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                    aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07" style="flex-grow: 0; padding-right: 10px;">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item ">
                            <a class="nav-link" href="../index.html">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../mapa.php?mostrar_todo=ok">Censo</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Resultados
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="../norma.html">Norma INEN 1108</a>
                                </li>
                                <li><a class="dropdown-item" href="../registros.php?mostrar_todo=ok">Registros</a></li>

                                <!-- Fase 1 -->
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Fase 1</a>
                                    <ul class="dropdown-menu">
                                        <!-- Microbiológico (Fase 1) -->
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Microbiológico</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="./mapa-2.php">Coliformes totales</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- Fisico Químico (Fase 1) -->
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Fisico Químico</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="./mapa-3.php">pH</a></li>
                                                <li><a class="dropdown-item" href="./mapa-4.php">Turbiedad</a></li>
                                                <li><a class="dropdown-item" href="./mapa-5.php">Color</a></li>
                                                <li><a class="dropdown-item" href="./mapa-6.php">Cloro libre
                                                        residual</a></li>
                                                <li><a class="dropdown-item" href="./mapa-9.php">Nitratos</a></li>
                                                <li><a class="dropdown-item" href="./mapa-10.php">Nitritos</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Fase 2 -->
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Fase 2</a>
                                    <ul class="dropdown-menu">
                                        <!-- Microbiológico (Fase 2) -->
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Microbiológico</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="./mapa-2-fase2.php">Coliformes totales</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- Fisico Químico (Fase 2) -->
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Fisico Químico</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="./mapa-3-fase2.php">pH</a></li>
                                                <li><a class="dropdown-item"
                                                        href="./mapa-4-fase2.php">Turbiedad</a></li>
                                                <li><a class="dropdown-item"
                                                        href="./mapa-5-fase2.php">Color</a></li>
                                                <li><a class="dropdown-item" href="./mapa-6-fase2.php">Cloro
                                                        libre residual</a></li>
                                                <li><a class="dropdown-item"
                                                        href="./mapa-9-fase2.php">Nitratos</a></li>
                                                <li><a class="dropdown-item"
                                                        href="./mapa-10-fase2.php">Nitritos</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="../equipo.html">Equipo</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../contacto.html">Contacto</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

    </header>

    <main role="main">
        <div class="titulo"><br>
            <center>
                <h1 class="bio ">Análisis Microbiológico </h1>
            </center>
        </div>
        <div class="container text-center mt-5">
            <div class="row">
                <div class="col-md-12">
                    <!-- Contenedor del Mapa de Google -->
                    <div id="mapa">
                    </div>
                    <br>
                    <div style="color:white;">
                        No medido <img src="../img/marcadores/mm_20_gray.png" alt=""> (<?= $contadores['no_medido'] ?>) |
                        Cumple <img src="../img/marcadores/mm_20_green.png" alt=""> (<?= $contadores['cumple'] ?>) |
                        No cumple <img src="../img/marcadores/mm_20_red.png" alt=""> (<?= $contadores['no_cumple'] ?>)
                    </div>
                    <br>

                </div>

            </div>
            </br>
        </div>
    </main>

    <br>
    <br>
    <br>
    <br>

    <div id="footer"></div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
        </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

    <script>
        $(function () {
            $("#footer").load("./../footer2.html");
        });
    </script>

</body>



</html>
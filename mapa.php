<?php 
//require_once "./php/mapaB.php";
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/equipo.css">
    <style>
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

        @media (max-width: 767px) {
            .image-container {
            display: none;
            }
        }

        .image-container {
        display: flex;
        justify-content: space-between;
        padding-left: 10%;
        padding-right: 1%;
        }
       
    </style>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid" style="margin-left: 10px;">
                <a class="navbar-brand" href="https://santodomingo.espe.edu.ec/ingenieria-en-biotecnologia/">
                    <img
                        src="./img/SantoDomingo1.png" class="img-fluid" width="350">
                    <img style="padding-left: 20px;"
                        src="./img/logo2sinfondo.png" class="img-fluid" width="115">

                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                    aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07" style="flex-grow: 0; padding-right: 10px;">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item ">
                            <a class="nav-link" href="./index.php">Inicio<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="./mapa.php?mostrar_todo=ok">Censo</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Resultados
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="./norma.html">Norma INEN 1108</a>
                                </li>
                                <li><a class="dropdown-item" href="./registros.php?mostrar_todo=ok">Registros</a></li>
                        
                                <!-- Fase 1 -->
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">Fase 1</a>
                                    <ul class="dropdown-menu">
                                        <!-- Microbiológico (Fase 1) -->
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Microbiológico</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="./mapas/mapa-2.php">Coliformes totales</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fisico Químico (Fase 1) -->
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Fisico Químico</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="./mapas/mapa-3.php">pH</a></li>
                                                <li><a class="dropdown-item" href="./mapas/mapa-4.php">Turbiedad</a></li>
                                                <li><a class="dropdown-item" href="./mapas/mapa-5.php">Color</a></li>
                                                <li><a class="dropdown-item" href="./mapas/mapa-6.php">Cloro libre residual</a></li>
                                                <li><a class="dropdown-item" href="./mapas/mapa-9.php">Nitratos</a></li>
                                                <li><a class="dropdown-item" href="./mapas/mapa-10.php">Nitritos</a></li>
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
                                                <li><a class="dropdown-item" href="./mapas/mapa-2-fase2.php">Coliformes totales</a></li>
                                            </ul>
                                        </li>
                                        <!-- Fisico Químico (Fase 2) -->
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Fisico Químico</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="./mapas/mapa-3-fase2.php">pH</a></li>
                                                <li><a class="dropdown-item" href="./mapas/mapa-4-fase2.php">Turbiedad</a></li>
                                                <li><a class="dropdown-item" href="./mapas/mapa-5-fase2.php">Color</a></li>
                                                <li><a class="dropdown-item" href="./mapas/mapa-6-fase2.php">Cloro libre residual</a></li>
                                                <li><a class="dropdown-item" href="./mapas/mapa-9-fase2.php">Nitratos</a></li>
                                                <li><a class="dropdown-item" href="./mapas/mapa-10-fase2.php">Nitritos</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="./equipo.html">Equipo</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="./contacto.html">Contacto</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        
    </header>

    <main role="main">

        <div class="container text-center mt-5">

            <div class="row mt-2">
                <div class=" container my-3">
                    <!--    <h2 class="mb-5">Direcciónes en la Base de Datos MySQL</h2> -->
                    <h4 class="mb-5">Término a buscar:</h4>
                    <!-- Archivo PHP con informacion a buscar -->
                    <div class="container mt-5">

                        <div class="col-12">

                            <form method="POST" action="mapa.php">

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="buscar" name="buscar">
                                </div>
                                <button type="text" class="btn btn-primary">Buscar</button>
                                <br>
                                <!--
                                <a class="btn btn-primary mt-2" href="mapa.php?mostrar_todo=ok">Mostrar Todos los
                                    Registros</a>
                                -->
                            </form>


                            <!-- Archivo PHP con la lógica para mostrar una tabla con las ubicaciones -->

                            <div class="mb-3">
                                <?php
                                    include('./php/buscarM.php');?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <br>
    <br>

    <div id="footer"></div>



    <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

    <script>
        $(function(){
        $("#footer").load("footer.html"); 
        });
    </script> 

</body>

</html>
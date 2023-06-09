<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../vista/css/headerFijo.css" />
    <link rel="stylesheet" href="../../vista/css/bootstrap.css" />
    <title>ADMINISTRADOR</title>
    <script src="../../vista/js/start.js" type="text/javascript"></script>
    <script src="../../vista/js/sweetAlert.js"></script>
</head>

<body><!--Obtenemos el host ya sea localhost o una personalizada -->
    <?php require_once("../../configuracion.php"); ?>
    <header id="header-fijo">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <a class="navbar-brand" href="<?php echo urlSitio ?>/gestor/administrador">INICIO</a>
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo urlSitio ?>/gestor/administrador/manejarGestor.php">MANEJAR
                                ADMINISTRADORES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo urlSitio ?>/gestor/administrador/manejarTipoMaiz.php">MANEJAR TIPOS DE
                                MAIZ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo urlSitio ?>/gestor/administrador/manejarGuiaCultivo.php">MANEJAR GUIAS
                                DE CULTIVO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo urlSitio ?>">VISUALIZAR PAGINA WEB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo urlSitio ?>/gestor">CERRAR SESION</a>
                        </li>
                    </ul>
                </div><audio controls>
                    <source src="../../vista/audio/yume.mp3" type="audio/mpeg">
                </audio>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row"><br />
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/css/bootstrap.css" />
    <title>ADMINISTRADOR</title>
</head>

<body><!--Obtenemos el host ya sea localhost o una personalizada -->s
    <?php require_once("../configuracion.php");?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <a class="navbar-brand" href="<?php  echo urlSitio?>/administrador/inicio.php">INICIO</a>
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php  echo urlSitio?>/administrador/manejarAdministrador.php">MANEJAR ADMINISTRADORES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MANEJAR TIPOS DE MAIZ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MANEJAR GUIAS DE CULTIVO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo urlSitio?>">VISUALIZAR PAGINA WEB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CERRAR SESION</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row"><br/>
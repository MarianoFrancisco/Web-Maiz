<?php
include("vista/plantilla/head.php");
require_once("controlador/controlador.php");
modeloControlador::mostrarGuiasCultivo() ?>
<p></p>
<h1 style="color:#FF7C00" ALIGN="CENTER">GUÍAS DE CULTIVO PARA LOS TIPOS DE MAÍZ</h1>
<div class="jumbotron text-center">
    <img src="vista/imagen/cultivoMaiz.jpeg" width="40%" class="img-thumbnail" /></img>
</div>
<?php
        if (!is_null(resultado)):
            foreach (resultado as $key => $value) foreach ($value as $dato): ?>
<p></p>
    <div class="card-columns" >    
        <div class="card" style="background-color:#1240ED">
            <div class="card-body" ALIGN="justify" style="background-color:#0C26A9">
                <h3 ALIGN="center" style="color:#FFD100" class="card-title"><?php echo $dato['nombre_maiz'] ?></h3>
                <p class="card-text"><?php echo $dato['descripcion'] ?></p>
                <h4 style="color:#17FF00" class="card-text">Datos para su cultivo:</h4>
                <p class="card-text">Se le debe dar: <?php echo $dato['riego'] ?></p>
                <p class="card-text">Rondar la temperatura ambiente entre: <?php echo $dato['temperatura'] ?></p>
                <p class="card-text">Tiene que estar en: <?php echo $dato['suelo'] ?></p>
                <p class="card-text">Se debe abonar con: <?php echo $dato['abonado'] ?></p>
                <h4 style="color:#17FF00" class="card-text">Datos para su cosecha:</h4>
                <p class="card-text">Dias estimados para su cosecha: <?php echo $dato['cosecha'] ?></p>
            </div><br>
        </div>
    </div>
<br>
<?php endforeach; endif; ?>
<p></p>
<?php include("vista/plantilla/foot.php"); ?>
<?php
include("vista/plantilla/head.php");
require_once("controlador/controlador.php");
modeloControlador::mostrarTiposMaiz(); ?>
<p></p>
<h1 style="color:#FF7C00" ALIGN="CENTER">TIPOS DE MAÍZ EN GUATEMALA</h1>
<?php
        if (!is_null(resultado)):
            foreach (resultado as $key => $value) foreach ($value as $dato): ?>
<p></p>
    <div class="card-columns" >    
        <div class="card" style="background-color:#1240ED">
            <div class="card-body" ALIGN="justify" style="background-color:#0C26A9">
                <h3 ALIGN="center" style="color:#FFD100" class="card-title"><?php echo $dato['nombre_maiz'] ?></h3>
                <h4 style="color:#17FF00" class="card-text">Detalles:</h4>
                <p class="card-text"><?php echo $dato['descripcion'] ?></p>
                <h4 style="color:#17FF00" class="card-text">Precio por Quintal:</h4>
                <p class="card-text">El precio puede variar según el tiempo y la demanda, un precio estimado sería: Q. <?php echo $dato['precio_quintal'] ?></p>
            </div><br>
        </div>
    </div>
<br>
<?php endforeach; endif; ?>
<p></p>
<?php include("vista/plantilla/foot.php"); ?>
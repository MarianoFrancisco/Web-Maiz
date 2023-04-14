<?php
include("vista/plantilla/head.php");
require_once("controlador/controlador.php");
modeloControlador::mostrarEtapasMaiz(); ?>
<p></p>
<h1 style="color:#FF7C00" ALIGN="CENTER">ETAPAS DEL MAÍZ</h1>
<div class="jumbotron text-center">
    <img src="vista/imagen/etapaMaiz.jpg" width="40%" class="img-thumbnail" /></img>
</div>
<?php
        if (!is_null(resultado)):
            foreach (resultado as $key => $value) foreach ($value as $dato): ?>
<p></p>
    <div class="card-columns" >    
        <div class="card" style="background-color:#1240ED">
            <div class="card-body" ALIGN="justify" style="background-color:#0C26A9">
                <h3 ALIGN="center" style="color:#FFD100" class="card-title"><?php echo "ETAPA: ".$dato['etapa'] ?></h3>
                <h4 style="color:#17FF00" class="card-text">Detalles:</h4>
                <p class="card-text"><?php echo "".$dato['caracteristicas'] ?></p>
                <h4 style="color:#17FF00" class="card-text">Días de la etapa:</h4>
                <p class="card-text">El estimado de días sería donde finaliza la etapa anterior hasta: Día <?php echo $dato['dias'] ?></p>
            </div><br>
        </div>
    </div>
<br>
<?php endforeach; endif; ?>
<p></p>
<?php include("vista/plantilla/foot.php"); ?>
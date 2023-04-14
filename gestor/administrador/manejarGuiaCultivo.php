<?php
include("plantilla/head.php");
require_once("controlador_admin/controlador.php");
modeloControlador::mostrarGuiasCultivo(); 
if(isset($_GET['m'])){
    modeloControlador::{$_GET['m']}();
}?>

<table class="table table-hover" bgcolor="0A1375">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Riego</th>
            <th scope="col">Temperatura</th>
            <th scope="col">Suelo</th>
            <th scope="col">Dias Cosecha</th>
            <th scope="col">Abonado</th>
            <th scope="col">Edicion</th>
            <th scope="col">Eliminacion</th>
        </tr>
    </thead>
    <tbody>
    <p></p>
        <a type="button" class="btn btn-success" style="background-color:#219C0E" href="#">CREAR NUEVA GUIA DE CULTIVO</a>
        <p></p>
        <?php
        if (!is_null(resultado)):
            foreach (resultado as $key => $value) foreach ($value as $dato): ?>
                    <tr ALIGN="justify" VALIGN="middle" bgcolor="0046FF">
                        <th>
                            <?php echo $dato['nombre_maiz'] ?>
                        </th>
                        <th>
                            <?php echo $dato['descripcion'] ?>
                        </th>
                        <th>
                            <?php echo $dato['riego'] ?>
                        </th>
                        <th>
                            <?php echo $dato['temperatura'] ?>
                        </th>
                        <th>
                            <?php echo $dato['suelo'] ?>
                        </th>
                        <th>
                            <?php echo $dato['cosecha'] ?>
                        </th>
                        <th>
                            <?php echo $dato['abonado'] ?>
                        </th>
                        <th>
                            <a type="button" class="btn btn-warning" FFD500 href="#">MODIFICAR</a>
                        </th>
                        <th>
                            <a type="button" class="btn btn-danger" style="background-color:#C10A0A" href="manejarGuiaCultivo.php?m=eliminarGuiaCultivo&textId=<?php echo $dato['id_cultivo']?>" onclick="return confirm('¿Seguro que quieres eliminar?'); false">ELIMINAR</a>
                        </th>
                    <?php endforeach; endif; ?>
        </tr>
    </tbody>
</table>
<?php include("plantilla/foot.php"); ?>
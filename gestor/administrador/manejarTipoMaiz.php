<?php
include("plantilla/head.php");
require_once("controlador_admin/controlador.php");
modeloControlador::mostrarTiposMaiz(); ?>
<table class="table table-hover" bgcolor="0A1375">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Quintal en Quetzales</th>
            <th scope="col">Edicion</th>
            <th scope="col">Eliminacion</th>
        </tr>
    </thead>
    <tbody>
    <hr>
        <a type="button" class="btn btn-success" style="background-color:#219C0E" href="#">CREAR NUEVO TIPO DE MAIZ</a>
        <hr>
        <?php
        if (!is_null(resultado)):
            foreach (resultado as $key => $value) foreach ($value as $dato): ?>
                    <tr ALIGN="justify" VALIGN="middle" bgcolor="0046FF">
                        <th>
                            <?php echo $dato['nombre_maiz'] ?>
                        </th>
                        <td>
                            <?php echo $dato['descripcion'] ?>
                        </td>
                        <td>
                            <?php echo $dato['precio_quintal'] ?>
                        </td>
                        <th>
                            <a type="button" class="btn btn-warning" href="#">MODIFICAR</a>
                        </th>
                        <th>
                            <a type="button" class="btn btn-danger" style="background-color:#C10A0A"  href="#">ELIMINAR</a>
                        </th>
                    <?php endforeach; endif; ?>
        </tr>
    </tbody>
</table>
<?php include("plantilla/foot.php"); ?>
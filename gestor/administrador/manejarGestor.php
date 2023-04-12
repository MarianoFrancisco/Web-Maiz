<?php
include("plantilla/head.php");
require_once("controlador_admin/controlador.php");
modeloControlador::mostrarGestores(); ?>
<table class="table table-hover" bgcolor="0A1375">
    <thead>
        <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Rol</th>
            <th scope="col">Telefono</th>
            <th scope="col">Edicion</th>
            <th scope="col">Eliminacion</th>
        </tr>
    </thead>
    <tbody>
        <p></p>
        <a type="button" class="btn btn-success" style="background-color:#219C0E" href="#">CREAR NUEVO GESTOR</a>
        <p></p>
        <?php
        if (!is_null(resultado)):
            foreach (resultado as $key => $value) foreach ($value as $dato): ?>
                    <tr ALIGN="justify" VALIGN="middle" bgcolor="0046FF">
                        <th>
                            <?php echo $dato['usuario'] ?>
                        </th>
                        <th>
                            <?php echo $dato['nombre'] ?>
                        </th>
                        <th>
                            <?php echo $dato['tipo'] ?>
                        </th>
                        <th>
                            <?php echo $dato['telefono'] ?>
                        </th>
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
<?php
include("plantilla/head.php");
require_once("controlador_admin/controlador.php");
modeloControlador::mostrarGestores(); 
if(isset($_GET['m'])){
    modeloControlador::{$_GET['m']}();
}?>
<table class="table table-hover" bgcolor="0A1375">
    <thead>
        <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Rol</th>
            <th scope="col">Telefono</th>
            <!--<th scope="col">Edicion</th>-->
            <th scope="col">Eliminacion</th>
        </tr>
    </thead>
    <tbody>
        <p></p>
        <h1 style="color: #FF7C00;" ALIGN="CENTER">MANEJAR GESTORES</h1>
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
                        <!--<th>
                            <a type="button" class="btn btn-warning" FFD500 href="#">MODIFICAR</a>
                        </th>-->
                        <th>
                            <a type="button" class="btn btn-danger" style="background-color:#C10A0A"  href="manejarGestor.php?m=eliminarGestor&textUsuario=<?php echo $dato['usuario']?>" onclick="return confirm('¿Seguro que quieres eliminar?'); false">ELIMINAR</a>
                        </th>
                    <?php endforeach; endif; ?>
        </tr>
    </tbody>
</table>
<?php include("plantilla/foot.php"); ?>
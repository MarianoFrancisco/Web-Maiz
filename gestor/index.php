<?php
include("plantilla/headLogin.php");
require_once("controlador_gestor/controlador.php");
if ($_GET) {
    modeloControlador::login();
}
?>
<form method="GET">
    <center>
        <br><br><br><br><br>
        <div id="circle">
            <h1 id="blinking" style="color: #00ff00;">INICIAR SESIÓN</h1>
            <div id="box">
                <input type="text" name="usuario" id="name" placeholder="Ingrese su usuario" class="input"><br>
                <input type="password" name="pwd" placeholder="Ingrese su contraseña" id="pass" class="input">
                <input type="submit" name="login" value="Ingresar" id="inBtn" style="color:white;">
            </div>

        </div>
    </center>
</form>
<?php include("plantilla/footLogin.php"); ?>
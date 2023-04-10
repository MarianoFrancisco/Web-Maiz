<?php
require_once("../modelo/conexionBD.php");
class modeloControlador
{
    private $modelo;
    public function __construct()
    {
        $this->modelo = new Modelo();
    }
    static function login()
    {
        $textoUsuario = $_REQUEST['usuario'];
        $textoPwd = $_REQUEST['pwd'];
        $restriccion = "usuario = '" . $textoUsuario . "' and pwd = '" . $textoPwd . "'";
        $login = new Modelo();
        $resultado = $login->verificarLogin("Administrador", $restriccion);
        if ($resultado == 1) {
            header('Location:inicio.php');
        } else {
            echo "<script>Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El usuario con la contraseña ingresada no existe!',
                footer: '<a>Verifica si escribiste bien tu usuario y tu contraseña</a>'
              })</script>";
        }
    }
}
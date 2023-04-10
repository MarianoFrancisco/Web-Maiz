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
        $resultado = $login->verificarLogin("Gestor", $restriccion);
        $tipo = '';
        if (is_null($resultado)) {
            echo "<script>Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El usuario con la contraseña ingresada no existe!',
                footer: '<a>Verifica si escribiste bien tu usuario y tu contraseña</a>'
              })</script>";
        } else {
            foreach ($resultado as $key => $value) {
                foreach ($value as $dato) {
                    $tipo = $dato['tipo'];
                }
            }
            if ($tipo == 'Administrador') {
                header('Location:inicio.php');
            }

        }
    }
}
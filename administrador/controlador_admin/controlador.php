<?php
require_once("../modelo/conexionBD.php");
class modeloControlador{
    private $modelo;
    public function __construct()
    {
        $this->modelo= new Modelo();
    }
    static function login(){
        IF($_GET){
        $textoUsuario=$_REQUEST['usuario'];
        $textoPwd=$_REQUEST['pwd'];
        $restriccion="usuario = '".$textoUsuario."' and pwd = '".$textoPwd."'";
        $login = new Modelo();
        $resultado = $login->verificarLogin("Administrador",$restriccion);
        if ($resultado == 1) {
            header('Location:inicio.php');
        } else {
            echo '<script>setTimeout(function(){
                alert("Error, el usuario con la contraseña ingresada no existe")
            }, 2000);</script>';
            header('Location:index.php');
        }}
    }
}
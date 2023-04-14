<?php
require_once("../../modelo/conexionBD.php");
class modeloControlador
{
    private $modelo;
    public function __construct()
    {
        $this->modelo = new Modelo();
    }
    static function mostrarGestores()
    {
        $gestores = new Modelo();
        define("resultado",$gestores->verGestores("Gestor"));
    }
    static function mostrarTiposMaiz()
    {
        $tiposMaiz = new Modelo();
        define("resultado",$tiposMaiz->verTiposMaiz("TipoMaiz"));
    }
    static function mostrarGuiasCultivo()
    {
        $guiasCultivo = new Modelo();
        define("resultado",$guiasCultivo->verGuiasCultivo("GuiaCultivo"));
    }
    static function eliminarTipoMaiz()
    {
        $tipoMaiz=$_REQUEST['textTipoMaiz'];
        $guiasCultivo = new Modelo();
        $guiasCultivo->deleteTipoMaiz("TipoMaiz",$tipoMaiz);
    }
    static function eliminarGestor()
    {
        $usuario=$_REQUEST['textUsuario'];
        $guiasCultivo = new Modelo();
        $guiasCultivo->deleteGestor("Gestor",$usuario);
    }
    static function eliminarGuiaCultivo()
    {
        $id=$_REQUEST['textId'];
        $guiasCultivo = new Modelo();
        $guiasCultivo->deleteGuiaCultivo("GuiaCultivo",$id);
    }
}
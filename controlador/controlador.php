<?php
require_once("modelo/conexionBD.php");
class modeloControlador{
    private $modelo;
    public function __construct()
    {
        $this->modelo= new Modelo();
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
    static function mostrarEtapasMaiz()
    {
        $guiasCultivo = new Modelo();
        define("resultado",$guiasCultivo->verEtapasMaiz("EtapaMaiz"));
    }
}
<?php
require_once("modelo/conexionBD.php");
class modeloControlador{
    private $modelo;
    public function __construct()
    {
        $this->modelo= new Modelo();
    }
    
}
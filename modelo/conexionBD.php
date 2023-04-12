<?php
class Modelo
{
    private $Modelo;
    private $cn;
    private $existencia;
    public function __construct()
    {
        $host = 'localhost';
        $nombreBD = 'maizgt';
        $usuario = 'root';
        $pass = 'Lis!1941';
        $this->Modelo = array();
        $this->cn = new PDO("mysql:host=$host;dbname=$nombreBD", $usuario, $pass);
    }
    public function verificarLogin($nombreTabla, $restriccion)
    {
        $instruccionSQL = "SELECT * FROM " . $nombreTabla . " WHERE " . $restriccion . ";";
        $operacionSQL = $this->cn->query($instruccionSQL);
        while($fila=$operacionSQL->fetchAll()){
            $this->existencia[]=$fila;
        }
        return $this->existencia;
    }
    public function verGestores($nombreTabla)
    {
        $instruccionSQL = "SELECT * FROM " . $nombreTabla . ";";
        $operacionSQL = $this->cn->query($instruccionSQL);
        while($fila=$operacionSQL->fetchAll()){
            $this->existencia[]=$fila;
        }
        return $this->existencia;
    }
    public function verTiposMaiz($nombreTabla)
    {
        $instruccionSQL = "SELECT * FROM " . $nombreTabla . ";";
        $operacionSQL = $this->cn->query($instruccionSQL);
        while($fila=$operacionSQL->fetchAll()){
            $this->existencia[]=$fila;
        }
        return $this->existencia;
    }
    public function verGuiasCultivo($nombreTabla)
    {
        $instruccionSQL = "SELECT * FROM " . $nombreTabla . ";";
        $operacionSQL = $this->cn->query($instruccionSQL);
        while($fila=$operacionSQL->fetchAll()){
            $this->existencia[]=$fila;
        }
        return $this->existencia;
    }
    public function verEtapasMaiz($nombreTabla)
    {
        $instruccionSQL = "SELECT * FROM " . $nombreTabla . " ORDER BY dias;";
        $operacionSQL = $this->cn->query($instruccionSQL);
        while($fila=$operacionSQL->fetchAll()){
            $this->existencia[]=$fila;
        }
        return $this->existencia;
    }
}
?>
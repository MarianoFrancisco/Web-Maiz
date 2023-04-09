<?php
class Modelo
{
    private $Modelo;
    private $cn;
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
        $operacionSQL = $this->cn->prepare($instruccionSQL);
        $operacionSQL->execute();
        $existencia = $operacionSQL->rowCount();
        return $existencia;
    }
}
?>
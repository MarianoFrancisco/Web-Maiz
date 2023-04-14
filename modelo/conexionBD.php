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
        while ($fila = $operacionSQL->fetchAll()) {
            $this->existencia[] = $fila;
        }
        return $this->existencia;
    }
    public function verGestores($nombreTabla)
    {
        $instruccionSQL = "SELECT * FROM " . $nombreTabla . ";";
        $operacionSQL = $this->cn->query($instruccionSQL);
        while ($fila = $operacionSQL->fetchAll()) {
            $this->existencia[] = $fila;
        }
        return $this->existencia;
    }
    public function verTiposMaiz($nombreTabla)
    {
        $instruccionSQL = "SELECT * FROM " . $nombreTabla . ";";
        $operacionSQL = $this->cn->query($instruccionSQL);
        while ($fila = $operacionSQL->fetchAll()) {
            $this->existencia[] = $fila;
        }
        return $this->existencia;
    }
    public function verGuiasCultivo($nombreTabla)
    {
        $instruccionSQL = "SELECT * FROM " . $nombreTabla . ";";
        $operacionSQL = $this->cn->query($instruccionSQL);
        while ($fila = $operacionSQL->fetchAll()) {
            $this->existencia[] = $fila;
        }
        return $this->existencia;
    }
    public function verEtapasMaiz($nombreTabla)
    {
        $instruccionSQL = "SELECT * FROM " . $nombreTabla . " ORDER BY dias;";
        $operacionSQL = $this->cn->query($instruccionSQL);
        while ($fila = $operacionSQL->fetchAll()) {
            $this->existencia[] = $fila;
        }
        return $this->existencia;
    }
    public function deleteTipoMaiz($nombreTabla, $tipoMaiz)
    {
        try {
            $instruccionSQL = "DELETE FROM " . $nombreTabla . " WHERE nombre_maiz='" . $tipoMaiz . "';";
            $operacionSQL = $this->cn->query($instruccionSQL);
            if ($operacionSQL) {
                header('Location:manejarTipoMaiz.php');
                return true;
            } else {
                return false;
            }
        } catch (exception $e) {
            echo "<script>Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Ocurrio un fallo al eliminar!',
                footer: '<a>Verifica que no haya datos que dependan de este tipo de maíz</a>'
              })</script>";
        }
    }
    public function deleteGestor($nombreTabla, $usuario)
    {
        try {
            $instruccionSQL = "DELETE FROM " . $nombreTabla . " WHERE usuario='" . $usuario . "';";
            $operacionSQL = $this->cn->query($instruccionSQL);
            if ($operacionSQL) {
                header('Location:manejarGestor.php');
                return true;
            } else {
                return false;
            }
        } catch (exception $e) {
            echo "<script>Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Ocurrio un fallo al eliminar!',
                footer: '<a>Verifica que no haya datos que dependan de este gestor</a>'
              })</script>";
        }
    }
    public function deleteGuiaCultivo($nombreTabla, $id)
    {
        try {
            $instruccionSQL = "DELETE FROM " . $nombreTabla . " WHERE id_cultivo=" . $id . ";";
            $operacionSQL = $this->cn->query($instruccionSQL);
            if ($operacionSQL) {
                header('Location:manejarGuiaCultivo.php');
                return true;
            } else {
                return false;
            }
        } catch (exception $e) {
            echo "<script>Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Ocurrio un fallo al eliminar!',
                footer: '<a>Verifica que no haya datos que dependan de esta guía de cultivo</a>'
              })</script>";
        }
    }
}
?>
<?php
require_once('Conexion.php');
class LProveedorPersistencia extends Conexion
{
    public $id;

    public function buscarLProveedor(){
      $sql = "SELECT * FROM LE_TPROV WHERE PROV_PROV = '$this->id'";
      return $this->query($sql);
    }

    public function listarLProveedores(){
      $sql = "SELECT * FROM LE_TPROV";
      return $this->query($sql);
    }
}
?>
<?php
require_once('Conexion.php');
class TipoHuevoPersistencia extends Conexion
{
    public $id;

    public function buscarTipoHuevo(){
      $sql = "SELECT * FROM NE_TTPHU WHERE TPHU_TPHU = '$this->id'";
      return $this->query($sql);
    }

    public function listarTipoHuevos(){
      $sql = "SELECT * FROM NE_TTPHU";
      return $this->query($sql);
    }
}
?>
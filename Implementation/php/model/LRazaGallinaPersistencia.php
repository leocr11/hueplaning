<?php
require_once('Conexion.php');
class LRazaGallinaPersistencia extends Conexion
{
    public $id;

    public function buscarLRazaGallina(){
      $sql = "SELECT * FROM LE_TRGAL WHERE RGAL_RGAL = '$this->id'";
      return $this->query($sql);
    }

    public function listarLRazaGallinas(){
      $sql = "SELECT * FROM LE_TRGAL";
      return $this->query($sql);
    }
}
?>
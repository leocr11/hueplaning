<?php
require_once('Conexion.php');
class RolPersistencia extends Conexion
{
    public $id;
    public $nombre;

    public function crearRol(){
      $this->query("INSERT INTO US_TTPRL 
                    VALUES ('',
                            '$this->TPRL_NAME',
                             )");
    }

    public function editarRol(){
      $this->query("UPDATE US_TTPRL SET 
                    TPRL_NAME = '$this->nombre'
                    WHERE TPRL_TPRL = '$this->id'");
    }

    public function buscarRol(){
      $sql = "SELECT * FROM US_TTPRL WHERE TPRL_TPRL = '$this->id'";
      return $this->query($sql);
    }

    public function listarRoles(){
      $sql = "SELECT * FROM US_TTPRL";
      return $this->query($sql);
    }
}
?>
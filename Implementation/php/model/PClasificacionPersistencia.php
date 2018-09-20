<?php
require_once('Conexion.php');
class PClasificacionPersistencia extends Conexion
{
    public $id;
    public $cantidadHuevos;
    public $fecha;
    public $tipoHuevo;
    public function crearPClasificacion(){
        $this->query("INSERT INTO NE_TCLSF 
                    VALUES ('',
                            '$this->cantidadHuevos',
                            '$this->fecha',
                            '$this->tipoHuevo'
                            )");
    }

    public function editarPClasificacion(){
        $this->query("UPDATE NE_TCLSF SET 
                    CLSF_CANT = '$this->cantidadHuevos',
                    CLSF_DATE = '$this->fecha',
                    TPHU_TPHU = '$this->tipoHuevo',
                    CLSF_CLSF = '$this->id'");
    }

    public function buscarPClasificacion(){
        $sql = "SELECT * 
                  FROM NE_TCLSF 
                  WHERE CLSF_CLSF = '$this->id'";
        return $this->query($sql);
    }

    public function listarPClasificaciones(){
        $sql = "SELECT * FROM NE_TCLSF";
        return $this->query($sql);
    }
}
?>
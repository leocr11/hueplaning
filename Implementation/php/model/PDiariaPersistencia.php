<?php
require_once('Conexion.php');
class PDiariaPersistencia extends Conexion
{
    public $id;
    public $cantidadHuevos;
    public $fecha;
    public $jornada;
    public $lote;

    public function crearPDiaria(){
        $this->query("INSERT INTO NE_TPROD 
                    VALUES ('',
                            '$this->cantidadHuevos',
                            '$this->fecha',
                            '$this->jornada',
                            '$this->lote'
                             )");
    }

    public function editarPDiaria(){
        $this->query("UPDATE NE_TPROD SET 
                    PROD_CANT = '$this->cantidadHuevos',
                    PROD_DATE = '$this->fecha',
                    PROD_JORN = '$this->jornada',
                    LOTE_LOTE = '$this->lote'
                    WHERE PROD_PROD = '$this->id'");
    }

    public function buscarPDiaria(){
        $sql = "SELECT * 
                  FROM NE_TPROD 
                  WHERE PROD_PROD = '$this->id'";
        return $this->query($sql);
    }

    public function listarPDiarias(){
        $sql = "SELECT * FROM NE_TPROD";
        return $this->query($sql);
    }
}
?>
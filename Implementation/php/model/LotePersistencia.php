<?php
require_once('Conexion.php');
class LotePersistencia extends Conexion
{
    public $id;
    public $nombre;
    public $cantidadGallinas;
    public $fechaCreacion;
    public $razaGallina;
    public $proveedor;

    public function crearLote(){
        $this->query("INSERT INTO LE_TLOTE 
                    VALUES ('',
                            '$this->nombre',
                            '$this->cantidadGallinas',
                            '$this->fechaCreacion',
                            '$this->razaGallina',
                            '$this->proveedor'
                             )");
    }

    public function editarLote(){
        $this->query("UPDATE LE_TLOTE SET 
                    LOTE_NAME = '$this->nombre',
                    LOTE_CNTG = '$this->cantidadGallinas',
                    LOTE_DTCR = '$this->fechaCreacion',
                    RGAL_RGAL = '$this->razaGallina',
                    PROV_PROV = '$this->proveedor'
                    WHERE LOTE_LOTE = '$this->id'");
    }

    public function buscarLote(){
        $sql = "SELECT * 
                  FROM LE_TLOTE 
                  WHERE LOTE_LOTE = '$this->id'";
        return $this->query($sql);
    }

    public function listarLotes(){
        $sql = "SELECT * FROM LE_TLOTE";
        return $this->query($sql);
    }
}
?>
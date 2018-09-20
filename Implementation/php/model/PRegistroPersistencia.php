<?php
require_once('Conexion.php');
class PRegistroPersistencia extends Conexion
{
    public $id;
    public $pDiaria;
    public $usuario;

    public function crearPRegistro(){
        $rs = $this->ultimaClasificacion()->fetch(PDO::FETCH_BOTH);
        $pClasificacion = trim($rs[0]);
        $this->query("INSERT INTO NE_TPRCL 
                VALUES ('',
                        '$this->pDiaria',
                        '$pClasificacion',
                        '$this->usuario'
                         )");
        
    }

    public function editarPRegistro(){
        $this->query("UPDATE NE_TPRCL SET 
                    PROD_PROD = '$this->pDiaria',
                    CLSF_CLSF = '$this->pClasificacion',
                    USER_USER = '$this->usuario'
                    WHERE PRCL_PRCL = '$this->id'");
    }

    public function buscarPRegistro(){
        $sql = "SELECT * 
                  FROM NE_TPRCL 
                  WHERE PRCL_PRCL = '$this->id'";
        return $this->query($sql);
    }

    public function listarPRegistros(){
        $sql = "SELECT * FROM NE_TPRCL";
        return $this->query($sql);
    }

    public function ultimaClasificacion(){
        $sql = "SELECT MAX(CLSF_CLSF) AS id FROM NE_TCLSF";
        return $this->query($sql);
    }

}
?>
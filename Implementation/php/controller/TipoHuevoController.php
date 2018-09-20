<?php 

require_once 'model/TipoHuevoPersistencia.php';

class TipoHuevoController{	
	public function buscarTipoHuevo($i){
       $tipoHuevo = new TipoHuevoPersistencia();
       $tipoHuevo->id = $i;
       return $tipoHuevo->buscarTipoHuevo();
    }
    public function listarTipoHuevos(){
       $tipoHuevo = new TipoHuevoPersistencia();
       return $tipoHuevo->listarTipoHuevos();
    }
}

 ?>
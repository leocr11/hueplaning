<?php 

require_once 'model/PClasificacionPersistencia.php';
require_once 'model/PRegistroPersistencia.php';

class PClasificacionController{	

	public function guardar($pClasificacion){
    if(!(empty($_REQUEST['cantidadHuevos'])&&
       empty($_REQUEST['fecha'])&&
       empty($_REQUEST['tipoHuevo']))){
      	$pClasificacion->cantidadHuevos	   =		$_REQUEST['cantidadHuevos'];
      	$pClasificacion->fecha	           =		$_REQUEST['fecha'];
      	$pClasificacion->tipoHuevo	       =		$_REQUEST['tipoHuevo'];
        return true;
      }else{
        return false;
      }
	}
    public function crearPClasificacion(){
        $pClasificacion = new PClasificacionPersistencia();
        $bool = $this->guardar($pClasificacion);
        if($bool){
          $pRegistro = new PRegistroPersistencia();
          $pRegistro->pDiaria         =   $_REQUEST['pDiaria'];
          $pRegistro->usuario         =   $_SESSION["id"];
          $pClasificacion->crearPClasificacion();
          $pRegistro->crearPRegistro();
        }
    }
    public function editarPClasificacion(){
        $pClasificacion = new PClasificacionPersistencia();
        $bool = $this->guardar($pClasificacion);
        $pClasificacion->id         =    $_REQUEST['id'];
        if($bool){
          $pClasificacion->editarPClasificacion();
        }
    }
    public function buscarPClasificacion($i){
        $pClasificacion = new PClasificacionPersistencia();
        $pClasificacion->id = $i;
        return $pClasificacion->buscarPClasificacion();
    }
    public function listarPClasificaciones(){
        $pClasificacion = new PClasificacionPersistencia();
        return $pClasificacion->listarPClasificaciones();
    }
}

 ?>
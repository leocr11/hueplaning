<?php 

require_once 'model/PDiariaPersistencia.php';

class PDiariaController{	

	public function guardar($pDiaria){
    if(!(empty($_REQUEST['cantidadHuevos'])&&
       empty($_REQUEST['fecha'])&&
       empty($_REQUEST['jornada'])&&
       empty($_REQUEST['lote']))){
      	$pDiaria->cantidadHuevos	   =		$_REQUEST['cantidadHuevos'];
      	$pDiaria->fecha	             =		$_REQUEST['fecha'];
      	$pDiaria->jornada	           =		$_REQUEST['jornada'];
      	$pDiaria->lote	             =		$_REQUEST['lote'];
        return true;
      }else{
        return false;
      }
	}
    public function crearPDiaria(){
        $pDiaria = new PDiariaPersistencia();
        $bool = $this->guardar($pDiaria);
        if($bool){
          $pDiaria->crearPDiaria();
        }
    }
    public function editarPDiaria(){
        $pDiaria = new PDiariaPersistencia();
        $bool = $this->guardar($pDiaria);
        $pDiaria->id         =    $_REQUEST['id'];
        if($bool){
          $pDiaria->editarPDiaria();
        }
    }
    public function buscarPDiaria($i){
        $pDiaria = new PDiariaPersistencia();
        $pDiaria->id = $i;
        return $pDiaria->buscarPDiaria();
    }
    public function listarPDiarias(){
        $pDiaria = new PDiariaPersistencia();
        return $pDiaria->listarPDiarias();
    }
}

 ?>
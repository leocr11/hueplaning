<?php 

require_once 'model/LotePersistencia.php';

class LoteController{	

	public function guardar($lote){
    if(!(empty($_REQUEST['nombre'])&&
       empty($_REQUEST['cantidadGallinas'])&&
       empty($_REQUEST['fechaCreacion'])&&
       empty($_REQUEST['razaGallina'])&&
       empty($_REQUEST['proveedor']))){
        $lote->nombre                  =    $_REQUEST['nombre'];
        $lote->cantidadGallinas        =    $_REQUEST['cantidadGallinas'];
      	$lote->fechaCreacion	         =		$_REQUEST['fechaCreacion'];
      	$lote->razaGallina	           =		$_REQUEST['razaGallina'];
      	$lote->proveedor	             =		$_REQUEST['proveedor'];
        return true;
      }else{
        return false;
      }
	}
    public function crearLote(){
        $lote = new LotePersistencia();
        $bool = $this->guardar($lote);
        if($bool){
          $lote->crearLote();
        }
    }
    public function editarLote(){
        $lote = new LotePersistencia();
        $bool = $this->guardar($lote);
        $lote->id         =    $_REQUEST['id'];
        if($bool){
          $lote->editarLote();
        }
    }
    public function buscarLote($i){
        $lote = new LotePersistencia();
        $lote->id = $i;
        return $lote->buscarLote();
    }
    public function listarLotes(){
        $lote = new LotePersistencia();
        return $lote->listarLotes();
    }
}

 ?>
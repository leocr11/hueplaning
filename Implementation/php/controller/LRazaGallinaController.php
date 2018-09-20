<?php 

require_once 'model/LRazaGallinaPersistencia.php';

class LRazaGallinaController{	
  
    public function buscarLRazaGallina($r){
       $razaGallina = new LRazaGallinaPersistencia();
       $razaGallina->id = $r;
       return $razaGallina->buscarLRazaGallina();
    }
    public function listarLRazaGallinas(){
       $razaGallina = new LRazaGallinaPersistencia();
       return $razaGallina->listarLRazaGallinas();
    }
}

 ?>
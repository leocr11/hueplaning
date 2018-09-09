<?php 

require_once 'model/RolPersistencia.php';

class RolController{	
  
    public function buscarRol($r){
       $rol = new RolPersistencia();
       $rol->id = $r;
       return $rol->buscarRol();
    }
    public function listarRoles(){
       $rol = new RolPersistencia();
       return $rol->listarRoles();
    }
}

 ?>
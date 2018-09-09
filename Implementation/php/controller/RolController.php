<?php 

require_once 'model/RolPersistencia.php';

class RolController{	

	public function guardar(){
		  $rol->id		     =		$_REQUEST['id'];
    	$rol->nombre	   =		$_REQUEST['nombre'];
	}

    public function crearRol(){
       $rol = new RolPersistencia();
       $this->guardar($rol);
       $rol->crearRol;
    }
    public function editarRol(){
       $rol = new RolPersistencia();
       $this->guardar($rol);
       $rol->editarRol();
    }
    public function buscarRol(){
       $rol = new RolPersistencia();
       $rol->id = $_REQUEST['id'];
       return $rol->buscarRol();
    }
    public function listarRoles(){
       $rol = new RolPersistencia();
       return $rol->listarRoles();
    }
}

 ?>
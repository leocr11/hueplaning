<?php 

class ViewController{	

	public function __CONSTRUCT($page,$funcion,$step){
		switch ($page){
		 	case null:
		 		require_once 'view/index.php';
		        break;
		    case "usuario":
		        return $this->usuario($funcion,$step);
		        break;
		}
	}

	public function usuario($funcion,$step){
		if($step == 1){
			switch ($funcion) {
			    case "listar":
			        require_once 'view/usuario/listar.php';
			        break;
			    case "registro":
			        require_once 'view/usuario/registro.php';
			        break;
			    case "editar":
			        require_once 'view/usuario/editar.php';
			        break;
			    case "inactivar":
			        require_once 'view/usuario/inactivar.php';
			        break;
			    case "perfil":
			        require_once 'view/usuario/perfil.php';
			        break;
			}
		}else if($step == 2){
			$_GET['funcion'] = $funcion;
			require_once 'view/usuario/usuario.php';
		}
	}

}
 ?>
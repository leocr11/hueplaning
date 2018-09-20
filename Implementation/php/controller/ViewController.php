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
		    case "pDiaria":
		        return $this->pDiaria($funcion,$step);
		        break;
		    case "pClasificacion":
		        return $this->pClasificacion($funcion,$step);
		        break;
		    case "pRegistro":
		        return $this->pRegistro($funcion,$step);
		        break;
		    case "lote":
		        return $this->lote($funcion,$step);
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
			    case "perfil":
			        require_once 'view/usuario/perfil.php';
			        break;
			}
		}else if($step == 2){
			$_GET['funcion'] = $funcion;
			require_once 'view/usuario/step2.php';
		}
	}
	public function pDiaria($funcion,$step){
		if($step == 1){
			switch ($funcion) {
			    case "listar":
			        require_once 'view/pDiaria/listar.php';
			        break;
			    case "registro":
			        require_once 'view/pDiaria/registro.php';
			        break;
			    case "editar":
			        require_once 'view/pDiaria/editar.php';
			        break;
			}
		}else if($step == 2){
			$_GET['funcion'] = $funcion;
			require_once 'view/pDiaria/step2.php';
		}
	}
	public function pClasificacion($funcion,$step){
		if($step == 1){
			switch ($funcion) {
			    case "listar":
			        require_once 'view/pClasificacion/listar.php';
			        break;
			    case "registro":
			        require_once 'view/pClasificacion/registro.php';
			        break;
			    case "editar":
			        require_once 'view/pClasificacion/editar.php';
			        break;
			}
		}else if($step == 2){
			$_GET['funcion'] = $funcion;
			require_once 'view/pClasificacion/step2.php';
		}
	}
	public function pRegistro($funcion,$step){
		switch ($funcion) {
		    case "listar":
		        require_once 'view/pRegistro/listar.php';
		        break;
		}
	}
	public function lote($funcion,$step){
		if($step == 1){
			switch ($funcion) {
			    case "listar":
			        require_once 'view/Lote/listar.php';
			        break;
			    case "registro":
			        require_once 'view/Lote/registro.php';
			        break;
			    case "editar":
			        require_once 'view/Lote/editar.php';
			        break;
			}
		}else if($step == 2){
			$_GET['funcion'] = $funcion;
			require_once 'view/lote/step2.php';
		}
	}
}
 ?>
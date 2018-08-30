<?php 

require_once 'model/usuarioPersistencia.php';

class UsuarioController{	

	public function __CONSTRUCT(){
		$this->user = new userPersistencia();
	}

	public function guardar(){
		$user->id       = $_REQUEST['id'];
		$user->dni      = $_REQUEST['dni'];
		$user->Nombre   = $_REQUEST['Nombre'];
		$user->Apellido = $_REQUEST['Apellido'];
		$user->Correo   = $_REQUEST['Correo'];
		$user->telefono = $_REQUEST['telefono'];
		$user->ususario = $_REQUEST['user'];
		$user->password = $_REQUEST['password'];
	}


	function login(){
		$user->usuario  = $_REQUEST['user'];
		$user->password = $_REQUEST['password'];

		$row = $user->login();

		 if ($row[0] != null) {
		 	$_SESSION["id"] = $user->id;
		 	session_start();
     		echo '<script type="text/javascript">window.location="homepage.php?'.$_SESSION["id"].'";</script>';
		} else {
		    echo '<script type="text/javascript">window.location="index.html?fallido";</script>';
		}
    }

    function logout(){
    	session_destroy();
    }

    function crearUsuario(){
       $this->guardar();
       $user->crearUsuario;
    }
    function editarUsuario(){
       $this->guardar();
       $user->crearUsuario();
    }
    function buscarUsuario(){
       $user->id = $_REQUEST['id'];
       $user->buscarUsuario();
    }
    function listarUsuarios(){
       $user->listarUsuarios();
    }
}
}
 ?>
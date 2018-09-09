<?php 

require_once 'model/UsuarioPersistencia.php';

class UsuarioController{	

	public function guardar($usuario){
    if(!(empty($_REQUEST['cedula'])&&
       empty($_REQUEST['nombre'])&&
       empty($_REQUEST['apellido'])&&
       empty($_REQUEST['telefono'])&&
       empty($_REQUEST['correo'])&&
       empty($_REQUEST['password'])&&
       empty($_REQUEST['rol']))){
      	$usuario->cedula	   =		$_REQUEST['cedula'];
      	$usuario->nombre	   =		$_REQUEST['nombre'];
      	$usuario->apellido	 =		$_REQUEST['apellido'];
      	$usuario->direccion  =		$_REQUEST['direccion'];
      	$usuario->telefono	 =		$_REQUEST['telefono'];
      	$usuario->correo	   =		$_REQUEST['correo'];
      	$usuario->password	 =		$_REQUEST['password'];
        $usuario->rol        =    $_REQUEST['rol'];
        return true;
      }else{
        return false;
      }
	}


	public function login(){
    $usuario = new UsuarioPersistencia();
		$usuario->cedula  = $_REQUEST['cedula'];
		$usuario->password = $_REQUEST['password'];

		$row = $usuario->login();

		 if ($row[0] != null) {
  		 	$_SESSION["id"] = $usuario->id;
  		 	session_start();
       		return require_once 'index.php';
  		} else {
  		    echo '<script type="text/javascript">alert("cedula o contraseña incorrecta");</script>';
  		}
    }

    public function logout(){
    	session_destroy();
    }

    public function crearUsuario(){
        $usuario = new UsuarioPersistencia();
        $bool = $this->guardar($usuario);
        if($bool){
          $usuario->crearUsuario();
        }
    }
    public function editarUsuario(){
        $usuario = new UsuarioPersistencia();
        $this->guardar($usuario);
        if($bool){
          $usuario->editarUsuario();
        }
    }
    public function buscarUsuario(){
        $usuario = new UsuarioPersistencia();
        $usuario->id = $_REQUEST['id'];
        return $usuario->buscarUsuario();
    }
    public function listarUsuarios(){
        $usuario = new UsuarioPersistencia();
        return $usuario->listarUsuarios();
    }
}

 ?>
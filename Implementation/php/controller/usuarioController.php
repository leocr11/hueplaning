<?php 

require_once 'model/UsuarioPersistencia.php';
require_once 'controller/MailService.php';

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
        session_start();
        $_SESSION["id"] = $row[0];
        echo '<script type="text/javascript">alert("Bienvenido '.$row[2].'");window.location.href = "index.php";</script>';
  		} else {
  		  echo '<script type="text/javascript">alert("cedula o contraseña incorrecta");window.location.href = "index.php";</script>';
  		}
    }

    public function logout(){
    	session_destroy();
      header('Location: homepage.php');
    }

    public function crearUsuario(){
        $usuario = new UsuarioPersistencia();
        $bool = $this->guardar($usuario);
        if($bool){
          $usuario->crearUsuario();
          $this->emailUsuario($usuario);
        }
    }
    public function editarUsuario(){
        $usuario = new UsuarioPersistencia();
        $bool = $this->guardar($usuario);
        $usuario->id         =    $_REQUEST['id'];
        $usuario->estado     =    $_REQUEST['estado'];
        if($bool){
          $usuario->editarUsuario();
        }
    }
    public function buscarUsuario($i){
        $usuario = new UsuarioPersistencia();
        $usuario->id = $i;
        return $usuario->buscarUsuario();
    }
    public function listarUsuarios(){
        $usuario = new UsuarioPersistencia();
        return $usuario->listarUsuarios();
    }
    public function emailUsuario($usuario){
      $email = new MailService();
      $email->setTo($usuario->correo);
      $email->setSubject("CUENTA HUEPLANNING");
      $email->setMessage(
        "\ncedula:     " .$usuario->cedula   .
        "\nnombre:     " .$usuario->nombre   .
        "\napellido:   " .$usuario->apellido .
        "\ndireccion:  " .$usuario->direccion.
        "\ntelefono:   " .$usuario->telefono .
        "\ncorreo:     " .$usuario->correo   .
        "\npassword:   " .$usuario->password .
        "\nrol:        " .$usuario->rol
      );

      $email->sendMail();
    }
}

 ?>
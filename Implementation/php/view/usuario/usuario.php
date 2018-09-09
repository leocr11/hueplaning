<?php 
	require_once 'controller/UsuarioController.php';
	$usuario = new UsuarioController();

	switch ($_GET['funcion']) {
			case "registro":
				$usuario->crearUsuario();
		        break;
		    case "modificar":
		        $usuario->editarUsuario();
		        break;
		    case "inactivar":
		        $usuario->inactivarUsuario();
		        break;}
?>
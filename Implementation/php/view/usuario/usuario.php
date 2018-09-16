<?php 
	require_once 'controller/UsuarioController.php';
	$usuario = new UsuarioController();

	switch ($_REQUEST['funcion']) {
			case "login":
				$usuario->login();
		        break;
		    case "logout":
				$usuario->logout();
		        break;
			case "registro":
				$usuario->crearUsuario();
				header('Location: index.php?page=usuario&funcion=listar&step=1');
		        break;
		    case "editar":
		        $usuario->editarUsuario();
		        header('Location: index.php?page=usuario&funcion=listar&step=1');
		        break;
    }
?>
<?php 
	require_once 'controller/PClasificacionController.php';
	$pClasificacion = new PClasificacionController();

	switch ($_REQUEST['funcion']) {
			case "registro":
				$pClasificacion->crearPClasificacion();
				header('Location: index.php?page=pClasificacion&funcion=listar&step=1');
		        break;
		    case "editar":
		        $pClasificacion->editarPClasificacion();
		        header('Location: index.php?page=pClasificacion&funcion=listar&step=1');
		        break;
    }
?>
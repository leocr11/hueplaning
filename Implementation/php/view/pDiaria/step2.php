<?php 
	require_once 'controller/PDiariaController.php';
	$pDiaria = new PDiariaController();

	switch ($_REQUEST['funcion']) {
			case "registro":
				$pDiaria->crearPDiaria();
				header('Location: index.php?page=pDiaria&funcion=listar&step=1');
		        break;
		    case "editar":
		        $pDiaria->editarPDiaria();
		        header('Location: index.php?page=pDiaria&funcion=listar&step=1');
		        break;
    }
?>
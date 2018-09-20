<?php 
	require_once 'controller/LoteController.php';
	$lote = new LoteController();

	switch ($_REQUEST['funcion']) {
			case "registro":
				$lote->crearLote();
				header('Location: index.php?page=lote&funcion=listar&step=1');
		        break;
		    case "editar":
		        $lote->editarLote();
		        header('Location: index.php?page=lote&funcion=listar&step=1');
		        break;
    }
?>
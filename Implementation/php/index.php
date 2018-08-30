<?php 

require_once 'model/database.php';

$controller = 'usuario';

if (!isset($_REQUEST['c']))
{
	
	require_once "controller/$controller.controller.php";
	$controller = ucwords($controller) . 'Controller';

	$controller = new $controller;
	$controller -> index();
}
else
{

	$controller = strtolower($_REQUEST['c']);
	$accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';


	require_once "controller/$controller.controller.php";
	$controller = ucwords($controller) . 'Controller';
	$controller = new $controller;

	call_user_func(array($controller,$accion));

}

 ?>
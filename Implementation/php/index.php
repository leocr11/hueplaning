<?php 
	require_once 'controller/ViewController.php';

	require_once 'view/header.php';

	//controlador de la vista
	error_reporting(E_ALL ^ E_NOTICE);

	$page = $_GET["page"];
	$funcion = $_GET["funcion"];
	$step = $_GET["step"];

	new ViewController($page,$funcion,$step);


	require_once 'view/footer.php';

 ?>
<?php 
	$destino 	= $_POST["correo"];
	$roll 		= $_POST["rol"];
	$usuario 	= $_POST["usuario"];
	$nombre 	= $_POST["nombre"];
	$mensaje	= "Bienvenido a hueplaning tu usuario a sido registrado porfavor de click en el siguiente link para completar el registro";
	$contenido	= "Nombre: " . $nombre . 
				  "\nUsuario: " . $usuario .
				  "\nRoll: " . $roll .
				  "\nMensaje: " . $mensaje .

	mail($destino,"Nuevo Usuario",$contenido);
	header("Location: index.php");
	
 ?>
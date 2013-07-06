<?php
	require_once("/var/www/html/src/sesion/sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");	
	if( $usuario == false )
	{	
		header("Location: ../../iniciarSesion.php");
	}
	else 
	{
		$usuario = $sesion->get("usuario");	
		$sesion->termina_sesion();	
		header("location: ../../index.php");
	}
?>

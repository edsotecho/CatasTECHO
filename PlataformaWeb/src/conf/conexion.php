<?php
	// datos para la conexion a mysql
	define('DB_SERVER','catastrotecho.no-ip.org');
	define('DB_NAME','CatasTECHO');
	define('DB_USER','root');
	define('DB_PASS','$Krat05$');
	
	//Estableciendo conexion
	$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS)
		or die ("Error al conectar a la base de datos.");
	mysql_select_db(DB_NAME,$con)
		or die ("Conexion establecida, error selecionando la base de datos");
?>

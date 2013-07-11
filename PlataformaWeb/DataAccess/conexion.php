<?php
	// datos para la conexion a mysql
	class conexionMySql
	{
		private $dbHandle;
	}	
	
	// Abre la conexión con la base de datos
	function openMySqlDB($_host,$_user,$_password,$_dbname)
	{
		try 
		{
			$this->dbHandle = mysqli_connect($_hostName,$_userName,$_password,$_dataBaseName) or die ("No se puede conectar a la base de datos");
            return $this->dbHandle;
		}
		catch(Exception $ex)
		{
			echo $ex->getMessage();
		}
	}
	
	// Cierra la conexión con la base de datos
	function closeMySqlDB()
	{
		try
		{
			mysqli_close($this->dbHandle);
		}
		catch (Exception $ex)
		{
			echo $ex->getMessage();
		}
	}
	
    

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

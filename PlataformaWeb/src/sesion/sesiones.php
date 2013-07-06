<?php

	include_once "/var/www/html/src/conf/conexion.php";

	function guardaSesion($id,$usuario,$ip,$sistema,$navegador)
	{
		$date = date("d-m-Y H:i:s",time()-3600);
		$id = (int)$id;

		$query = mysql_query("INSERT INTO sesiones(idusuario,usuario,fecha,ip,sistema,navegador) VALUES ('".$id."','".$usuario."','".$date."', '".$ip."', '".$sistema."', '".$navegador."')");
	}

	function getIP() {
	    if (!empty($_SERVER['HTTP_CLIENT_IP']))
	        return $_SERVER['HTTP_CLIENT_IP'];
	       
	    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	        return $_SERVER['HTTP_X_FORWARDED_FOR'];
	   
	    return $_SERVER['REMOTE_ADDR'];
	}

	function DatosPrivados()
	{
	  $temp=array();
	  $ip=$_SERVER['REMOTE_ADDR'];
	  $datos=$_SERVER['HTTP_USER_AGENT'];
	  array_push($temp,$ip);
	  if(strpos($datos,"Windows")!==false)
	    array_push($temp,"Windows");
	  elseif(strpos($datos,"Mac")!==false)
	    array_push($temp,"Mac");
	  elseif(strpos($datos,"Linux")!==false)
	    array_push($temp,"Linux");
	 
	  if(strpos($datos,"MSIE")!==false)
	    array_push($temp,"Internet Explorer");
	  elseif(strpos($datos,"Firefox")!==false)
	    array_push($temp,"Firefox");
	  elseif(strpos($datos,"Chrome")!==false)
	    array_push($temp,"Google Chrome");
	  elseif(strpos($datos,"Safari")!==false)
	    array_push($temp,"Safari");
	  elseif(strpos($datos,"Opera")!==false)
	    array_push($temp,"Opera");
	  else
	    array_push($temp,"Navegador desconocido");
	 
	  return $temp;  
	 
	}

?>

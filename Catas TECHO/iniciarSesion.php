<?php
	require_once("/var/www/html/src/sesion/sesion.class.php");
	include_once "/var/www/html/src/conf/conexion.php";
	include_once "/var/www/html/src/sesion/sesiones.php";

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )
	{
		
		$usuario = $_POST["usuario"];
		$password = md5($_POST["password"]);
		
		if(validarUsuario($usuario,$password) == true)
		{	
			$estatus=1;
		
		$consulta = mysql_query("SELECT * FROM usuario WHERE usuario = '".$usuario."' and activo=".$estatus." and password = '".$password."'");

			if(mysql_num_rows($consulta) == 1) 
			{

				$fila=mysql_fetch_array($consulta);
				$sesion->set("usuario",$usuario);
				$sesion->set("nombre",$fila['nombre']);
				$sesion->set("rol",$fila['rol']);
				$sesion->set("territorio",$fila['territorio']);
				$sesion->set("id",$fila['idusuario']);	
				$ip = getIP();
				$obtenerDatos=DatosPrivados();
				$sistema=$obtenerDatos[1];
				$navegador=$obtenerDatos[2];
				guardaSesion($fila['idusuario'],$usuario,$ip,$sistema,$navegador);			
			
				header("location: gestion/");
			}
			else
			{
				echo "  <div class='container'>
				<div class='alert alert-warning'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				  <h4>Activacion pendiente.</h4>
				  Su usuario se encuentra en espera de ser habilitado por un administrador. 
				</div> </div>";
			}
			
		}
		else 
		{
		        echo "  <div class='container'>
				<div class='alert alert-error'>
				  <button type='button' class='close' data-dismiss='alert'>&times;</button>
				  <h4>Error de autentificacion.</h4>
				  El usuario ingresado no existe o aun no tiene autorizacion para ingresar al sistema. Por favor asegurese de ingresar los datos correctamente
				  e intente de nuevo. 
				</div> </div>";
		}
	}
	
	function validarUsuario($user, $pass)
	{
		$sql = "SELECT * FROM usuario WHERE usuario = '".$user."' and password = '".$pass."'";
		$rec = mysql_query($sql);
		$count = 0;
		$result=null;
	 
		while($row = mysql_fetch_object($rec))
		{
			$count++;
			$result = $row;
		}
	 
		if($count == 1)
		{
			return 1;		
		}
	 
		else
		{
			return 0;
		}
	}
?>

<?php include("/var/www/html/src/componentes/encabezadoIndex.php");?>

<body>
<?php include_once("analyticstracking.php") ?>

	<?php
        include("/var/www/html/src/componentes/menuPrincipal.php");
    ?>

	<!--Formulario de logueo para usuarios-->
	<div class="container">
		<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<fieldset>
				<legend>Ingresar al sistema</legend>
				<div class="control-group">
					<label class="control-label" for="input01" id="lblUsuario">Usuario</label>
					<div class="controls">
						<input type="text" class="input-xlarge" name="usuario">								
					</div>
					<p></p>
					<label class="control-label" for="input01" id="lblPassword">Password</label>
					<div class="controls">
						<input type="password" class="input-xlarge" name="password">								
					</div>
				</div>						
				<div class="form-actions">								
					<button type="submit" name= "iniciar" class="btn btn-primary">Ingresar</button-->							
				</div>
			</fieldset>
		</form>	
	</div>

	<div class="container">

	  	<hr>
	</div> <!-- /container -->

	<?php include("/var/www/html/src/componentes/estilos.php");?>
</body>
</html>


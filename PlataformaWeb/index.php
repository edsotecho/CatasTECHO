<?php
	require_once("/src/sesion/sesion.class.php");
	include_once "/src/conf/conexion.php";
	include_once "/src/sesion/sesiones.php";
	

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )
	{
		$estatus=1;
		$usuario = $_POST["usuario"];
		$password = md5($_POST["password"]);
		
		if(validarUsuario($usuario,$password) == true)
		{			
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
			
				header("location: site/");
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
				  El usuario ingresado no existe o la contrasena es incorrecta. Por favor asegurese de ingresar los datos correctamente
				  e intente de nuevo. 
				</div> </div>";
		}
	}
	
	function validarUsuario($user, $pass)
	{
		$sql = "SELECT * FROM usuario WHERE usuario = '".$user."' and password = '".$pass."'";
		$rec = mysql_query($sql);
		$count = 0;
	 
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

<?php include("/src/cmp/encabezadoIndex.php");?>

<body>


	<?php
        include("/src/cmp/menuPrincipal.php");
    ?>

	<div class="container">
		<div class="hero-unit">
			<h1>Catastro Nacional de Asentamientos</h1>
			<p>El Catastro Nacional de Asentamientos es una investigación que busca describir la realidad de todos los asentamientos en condiciones de pobreza de Costa Rica, mediante la realización de un censo comunitario.</p>
			<p><a class="btn btn-primary btn-large">Leer mas &raquo;</a></p>
		</div>
	</div>

	<div class="container">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
					<img src="src/img/slider1.jpg" alt="">
					<div class="carousel-caption">
						<h4>Primera Imagen</h4>
						<p>Texto Descriptivo</p>
					</div>
				</div>
				<div class="item">
					<img src="src/img/slider2.jpg" alt="">
					<div class="carousel-caption">
						<h4>Segunda Imagen</h4>
						<p>Texto Descriptivo</p>
					</div>
				</div>
				<div class="item">
					<img src="src/img/slider3.jpg" alt="">
					<div class="carousel-caption">
						<h4>Tercera Imagen</h4>
						<p>Texto Descriptivo</p>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
		</div>
	</div>

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

	<?php include("/src/cmp/estilos.php");?>

</body>
</html>


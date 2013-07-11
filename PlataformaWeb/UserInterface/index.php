<!DOCTYPE html>
<html>
	<?php
		include("/var/www/catasTECHO/src/cmp/encabezado.php");
	?>
	<head>
	</head>
	<body>
		<!-- Div donde va la imagen de CATASTRO 2013 -->
		<div class="row-fluid">
			<div class="span2">
			</div>
			<div align="center" class="span8">
				<img width="1300" height="500" src="../src/img/banner.jpg"/>
			</div>
			<div class="span2">
			</div>
		</div>
		<div class="row-fluid" align="center">
			<div class="row-fluid">
				<h2 class="form-signin-heading"> Inicio de Sesión </h2>
				<br>
				<form class="form-signin">
					<div>
						<input type="text" placeholder="Usuario"></input>
					</div>
					<br>
					<div>
						<input type="password" placeholder="Contraseña"></input>
					</div>
					<br>
					<div>
					<button class="btn btn-primary" type="submit">Iniciar Sesión</button>
					
				</form>
			</div>
		</div>
	</body>
	<?php
    	include("/var/www/catasTECHO/src/cmp/estilos.php");
	?>
	<footer>
	</footer>
</html>
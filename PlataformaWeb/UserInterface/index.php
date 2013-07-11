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
				<img src="/src/img/banner.jpg"/>
			</div>
			<div class="span2">
			</div>
		</div>
		<h2 class="form-signin-heading"> Inicio de Sesión </h2>
		<div class="row-fluid">
			<form class="form-signin">
				<div>
					<input type="text" placeholder="Email address"></input>
				</div>
				<div>
					<input type="password" placeholder="Password"></input>
				</div>
				<div>
				<button class="btn btn-primary" type="submit">Sign in</button>
				
			</form>
		</div>
	</body>
	<?php
    	include("/var/www/catasTECHO/src/cmp/estilos.php");
	?>
	<footer>
	</footer>
</html>
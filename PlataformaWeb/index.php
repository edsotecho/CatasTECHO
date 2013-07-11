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
			<div class="span8">
				<img src="/src/img/banner.jpg"/>
			</div>
			<div class="span2">
			</div>
		</div>
		<div class="container">
			<form class="form-signin">
				<h2 class="form-signin-heading"> Inicio de Sesión </h2>
				<input class="input-block-level" type="text" placeholder="Email address"></input>
				<input class="input-block-level" type="password" placeholder="Password"></input>
				<button class="btn btn-large btn-primary" type="submit">Sign in</button>
			</form>
		</div>
	</body>
	<footer>
	<?php
    	include("/var/www/catasTECHO/src/cmp/estilos.php");
	?>
	</footer>
</html>
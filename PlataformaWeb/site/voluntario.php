<!DOCTYPE html>
<html>
	<?php
		include("/var/www/catasTECHO/src/cmp/encabezado.php");
	?>
	<head>
		<div class="navbar">
    		<div class="navbar-inner">
   				<a class="brand" href="voluntario.php">CatasTECHO</a>
    			<ul class="nav">
    				<li id="linkConsultas" class="active"><a onClick="muestraDivVol(1)">Consultas</a></li>
    				<li id="linkDatos"><a onClick="muestraDivVol(2)">Datos</a></li>
    			</ul>
    			<ul class="nav pull-right">
    				<li class="divider-vertical"></li>
    				
    				<!-- referenciar a la página de los datos personales de cada usuario -->
    				<li><a href="#">Usuario</a></li>
    			</ul>
    		</div>
    	</div>
	</head>
	
	
	
	<footer>
	<?php
    	include("/var/www/catasTECHO/src/cmp/estilos.php");
	?>
	</footer>
</html>
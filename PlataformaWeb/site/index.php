<!DOCTYPE html>
<html>
	<script src="../src/js/funcionesVarias.js"></script>
	<?php
		include("/var/www/catasTECHO/src/cmp/encabezado.php");
	?>
	<head>
		<div class="navbar">
    		<div class="navbar-inner">
   				<a class="brand" href="#">CatasTECHO</a>
    			<ul class="nav">
    				<li class="active"><a id="linkConsultas" href="#" onClick="muestraDiv(1)">Consultas</a></li>
    				<li><a id="linkDatos" href="#" onClick="muestraDiv(2)">Datos</a></li>
    				<li><a id="linkUsuarios" href="#" onClick="muestraDiv(3)">Usuarios</a></li>
    			</ul>
    		</div>
    	</div>
    	
    	<!-- Div de las Consultas -->
    	<div id="divConsultas" class="row-fluid">
    		<div class="span1">
       	 		<!-- espacio vacío -->
      		</div>
      		<div class="span10">
      			<div class="tabbable">
		          	<ul class="nav nav-tabs">
		            	<li class="active"><a href="#tabRespuestas" data-toggle="tab">Respuestas</a></li>
		            	<li><a href="#tabMapas" data-toggle="tab">Mapas</a></li>
		         	</ul>
		          	<div class="tab-content">
		            	<!-- Tab Consultas -->
		            	<div id="tabConsultas" class="tab-pane active">
		              		<p>
		                		Consultas
		              		</p>
		            	</div>
		            	<!--  -->
		
		            	<!-- Tab Mapas -->
		            	<div id="tabMapas" class="tab-pane">
		              		<p>
		                		Mapas
		              		</p>
		            	</div>
		            	<!--  -->
		          	</div>
		        </div>
      		</div>
      		<div class="span1">
       	 		<!-- espacio vacío -->
      		</div>	
    	</div>
    	
    	<!-- Div de los Datos -->
    	<div id="divDatos" class="row-fluid" style="display: none">
    		<div class="span1">
       	 		<!-- espacio vacío -->
      		</div>
      		<div class="span10">
      			<div class="tabbable">
		          	<ul class="nav nav-tabs">
		            	<li class="active"><a href="#tabActualizar" data-toggle="tab">Actualizar</a></li>
		            	<li><a href="#tabBorrar" data-toggle="tab">Borrar</a></li>
		         	</ul>
		          	<div class="tab-content">
		          	
		            	<!-- Tab Consultas -->
		            	<div id="tabActualizar" class="tab-pane active">
		              		<p>
		                		Actualizar Datos
		                		Tabla 
		              		</p>
		            	</div>
		            	<!--  -->
		
		            	<!-- Tab Mapas -->
		            	<div id="tabBorrar" class="tab-pane">
		              		<p>
		                		Borrar Datos
		                		Tabla
		              		</p>
		            	</div>
		            	<!--  -->
		            	
		          	</div>
		        </div>
      		</div>
      		<div class="span1">
       	 		<!-- espacio vacío -->
      		</div>	
    	</div>
    	
    	<!-- Div de los Usuarios -->
    	<div id="divUsuarios" class="row-fluid" style="display: none">
    		<div class="span1">
       	 		<!-- espacio vacío -->
      		</div>
      		<div class="span10">
      			<div class="tabbable">
		          	<ul class="nav nav-tabs">
		            	<li class="active"><a href="#tabCrearUsuario" data-toggle="tab">Crear Usuario</a></li>
		            	<li><a href="#tabDeshabilitarUsuario" data-toggle="tab">Deshabilitar Usuario</a></li>
		         	</ul>
		          	<div class="tab-content">
		            	<!-- Tab Consultas -->
		            	<div id="tabCrearUsuario" class="tab-pane active">
		              		<p>
		                		Crear Usuario
		              		</p>
		            	</div>
		            	<!--  -->
		
		            	<!-- Tab Mapas -->
		            	<div id="tabDeshabilitarUsuario" class="tab-pane">
		              		<p>
		                		Deshabilitar Usuario
		              		</p>
		            	</div>
		            	<!--  -->
		          	</div>
		        </div>
      		</div>
      		<div class="span1">
       	 		<!-- espacio vacío -->
      		</div>
    	</div>
    	
	</head>
	<body>
    	
		<?php
    		include("/var/www/catasTECHO/src/cmp/estilos.php");
		?>
	</body>

<footer>
</footer>
</html>
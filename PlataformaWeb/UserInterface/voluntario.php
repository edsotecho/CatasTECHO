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
    				<li id="linkInfoPersonal"><a href="#">Usuario</a></li>
    			</ul>
    		</div>
    	</div>    	
	</head>
	
	<body>
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
		            	<div id="tabRespuestas" class="tab-pane active">
		            		<h3>Consultas</h3>
		              		<div class="row-fluid">
		              			<div class="span3">
			              			Encuesta:
			              			<select id="EncuestaConsulta">
			              				<option>user1</option>
			              			</select>
			              		</div>	
				              	<div class="span2">
       	 							<!-- espacio vacío -->
      							</div>
			              		<div class="span2">
       	 							<!-- espacio vacío -->
      							</div>
      							<div class="span3">
	      							<br>
			              			<button class="btn btn-primary">Consultar</button>
			              		</div>		              			              			
		              		</div>
		              		<br>
		              		<br>
		              		<div>
		              			<!-- Tabla de Consultas -->
		              			<!-- Aquí debe ir la tabla dinámica con JQuery -->
		              			<!-- La actual es un ejemplo para ver el interfaz de la aplicación -->
		              			<table class="table">
		              				<tr>
		              					<th>Provincia</th>
		              					<th>Usuario</th>
		              					<th>Latitud</th>
		              					<th>Longitud</th>
		              				</tr>
		              				<tr>
		              					<td>San José</th>
		              					<td>wching</th>
		              					<td>-90.88509</th>
		              					<td>80.98763</th>
		              				</tr>
		              				<tr>
		              					<td>San José</th>
		              					<td>wching</th>
		              					<td>-90.88509</th>
		              					<td>80.98763</th>
		              				</tr>
		              				<tr>
		              					<td>San José</th>
		              					<td>wching</th>
		              					<td>-90.88509</th>
		              					<td>80.98763</th>
		              				</tr>
		              			</table>
		              		</div>
		            	</div>
		            	<!--  -->
		
		            	<!-- Tab Mapas -->
		            	<div id="tabMapas" class="tab-pane">
		            		<h3>Consulta Mapa</h3>
		              		<p>
		              			<!-- Aquí va el mapa de consultas y de donde se genera KML -->
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
		          	
		            	<!-- Tab Actualizar Datos -->
		            	<div id="tabActualizar" class="tab-pane active">
		            		<h3>Actualización de Datos</h3>
		              		<div class="row-fluid">
		              			<div class="span3">
			              			Encuesta:
			              			<select id="EncuestaDatosActualizar">
			              				<option>user1</option>
			              			</select>
			              		</div>	
				              	<div class="span2">
       	 							<!-- espacio vacío -->
      							</div>
			              		<div class="span2">
       	 							<!-- espacio vacío -->
      							</div>
			              		<div class="span3">
			              			<br>
			              			<div align="center">
		              					<button class="btn btn-primary">Consultar</button>
		              				</div>
			              		</div>	
		              			
		              		</div>
		              		<br>
		              		<br>
		              		<!-- Tabla de Datos para Actualizar -->
		              		<!-- Aquí debe ir la tabla dinámica con JQuery -->
		              		<!-- La actual es un ejemplo para ver el interfaz de la aplicación -->
		              		<div id="divTablaDatosActualizar">
			              			<table class="table">
			              				<tr>
			              					<th>Provincia</th>
			              					<th>Usuario</th>
			              					<th>Latitud</th>
			              					<th>Longitud</th>
			              					<th>Editar</th>
			              				</tr>
			              				<tr>
			              					<td>San José</td>
			              					<td>wching</td>
			              					<td>-90.88509</td>
			              					<td>80.98763</td>
			              					<td><button>Editar</button></td>
			              				</tr>
			              				<tr>
			              					<td>San José</td>
			              					<td>wching</td>
			              					<td>-90.88509</td>
			              					<td>80.98763</td>
			              					<td><button>Editar</button></td>
			              				</tr>
			              				<tr>
			              					<td>San José</td>
			              					<td>wching</td>
			              					<td>-90.88509</td>
			              					<td>80.98763</td>
			              					<td><button>Editar</button></td>
			              				</tr>
			              			</table>
		              			</div>
		            	</div>
		            	<!--  -->
		
		            	<!-- Tab Borrar Datos -->
		            	<div id="tabBorrar" class="tab-pane">
		            		<h3>Eliminación de Datos</h3>
		              		<div class="row-fluid">
		              			<div class="span3">
			              			Encuesta:
			              			<select id="EncuestaDatosBorrar">
			              				<option>user1</option>
			              			</select>
			              		</div>	
				              	<div class="span2">
       	 							<!-- espacio vacío -->
      							</div>
			              		<div class="span2">
       	 							<!-- espacio vacío -->
      							</div>
			              		<div class="span3">
			              			<br>
			              			<div align="center">
		              					<button class="btn btn-primary">Consultar</button>
		              				</div>
			              		</div>	
		              		</div>
		              		<br>
		              		<br>
		              		<!-- Tabla de Datos para Eliminar -->
		              		<!-- Aquí debe ir la tabla dinámica con JQuery -->
		              		<!-- La actual es un ejemplo para ver el interfaz de la aplicación -->
	              			<div id="divTablarDatosBorrar" align="center">
		              			<table class="table">
		              				<tr>
		              					<th>Provincia</th>
		              					<th>Usuario</th>
		              					<th>Latitud</th>
		              					<th>Longitud</th>
		              					<th>Borrar</th>
		              				</tr>
		              				<tr>
		              					<td>San José</td>
		              					<td>wching</td>
		              					<td>-90.88509</td>
		              					<td>80.98763</td>
		              					<td><button>x</button></td>
		              				</tr>
		              				<tr>
		              					<td>San José</td>
		              					<td>wching</td>
		              					<td>-90.88509</td>
		              					<td>80.98763</td>
		              					<td><button>x</button></td>
		              				</tr>
		              				<tr>
		              					<td>San José</td>
		              					<td>wching</td>
		              					<td>-90.88509</td>
		              					<td>80.98763</td>
		              					<td><button>x</button></td>
		              				</tr>
		              			</table>
	              			</div>
		            	</div>
		            	<!--  -->
		            	
		          	</div>
		        </div>
      		</div>
      		<div class="span1">
       	 		<!-- espacio vacío -->
      		</div>	
    	</div>
    	
    	<!-- Div Información Personal por Usuario -->
    	<div id="divInfoPersonal" class="row-fluid" style="display: none">
    		<h3>Mi Cuenta</h3>
    		<div class="span1">
       	 		<!-- espacio vacío -->
      		</div>
      		<div class="span10">
       	 		
      		</div>
      		<div class="span1">
       	 		<!-- espacio vacío -->
      		</div>
    	</div>
	</body>
	
	
	
	<footer>
	<?php
    	include("/var/www/catasTECHO/src/cmp/estilos.php");
	?>
	</footer>
</html>
<!DOCTYPE html>
<html>
	
	<?php
		include("/var/www/catasTECHO/src/cmp/encabezado.php");
	?>
	<head>
		<div class="navbar">
    		<div class="navbar-inner">
   				<a class="brand" href="index.php">CatasTECHO</a>
    			<ul class="nav">
    				<li class="active"><a id="linkConsultas" href="#" onClick="muestraDiv(1)">Consultas</a></li>
    				<li><a id="linkDatos" href="#" onClick="muestraDiv(2)">Datos</a></li>
    				<li><a id="linkUsuarios" href="#" onClick="muestraDiv(3)">Usuarios</a></li>
    			</ul>
    			<ul class="nav pull-right">
    				<li class="divider-vertical"></li>
    				<li><a href="iniciarSesion.php">Usuario</a></li>
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
		            	<div id="tabRespuestas" class="tab-pane active">
		              		<div class="row-fluid">
		              			<div class="span2">
			              			Encuesta:
			              			<select id="EncuestaConsulta">
			              				<option>user1</option>
			              			</select>
			              		</div>	
				              	<div class="span2">
       	 							<!-- espacio vacío -->
      							</div>
			              		<div class="span2">
			              			Provincia:
			              			<select id="ProvinciaConsulta">
			              				<option>user1</option>
			              			</select>	              			
			              		</div>
			              		<div class="span2">
       	 							<!-- espacio vacío -->
      							</div>
			              		<div class="span2">
			              			Usuario:
			              			<select id="UsuarioConsulta">
			              				<option>user1</option>
			              			</select>
			              		</div>		              			              			
		              		</div>
		              		<br>
		              		<br>
		              		<!-- Div donde están los botones de generar consultas y el archivo de excel -->
		              		<div class="row-fluid" align="center">
			              		<div class="span5">
			              			<button class="btn">Consultar</button>
			              		</div>
			              		<div class="span5">
			              			<button class="btn">Generar Excel</button>
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
		              		<div class="row-fluid">
		              			<div class="span2">
			              			Encuesta:
			              			<select id="EncuestaDatosActualizar">
			              				<option>user1</option>
			              			</select>
			              		</div>	
				              	<div class="span2">
       	 							<!-- espacio vacío -->
      							</div>
			              		<div class="span2">
			              			Provincia:
			              			<select id="ProvinciaDatosActualizar">
			              				<option>user1</option>
			              			</select>
			              			<br>
			              			<div align="center">
		              					<button class="btn">Consultar</button>
		              				</div>
			              		</div>
			              		<div class="span2">
       	 							<!-- espacio vacío -->
      							</div>
			              		<div class="span2">
			              			Usuario:
			              			<select id="UsuarioDatosActualizar">
			              				<option>user1</option>
			              			</select>
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
		              		<div class="row-fluid">
		              			<div class="span2">
			              			Encuesta:
			              			<select id="EncuestaDatosBorrar">
			              				<option>user1</option>
			              			</select>
			              		</div>	
				              	<div class="span2">
       	 							<!-- espacio vacío -->
      							</div>
			              		<div class="span2">
			              			Provincia:
			              			<select id="ProvinciaDatosBorrar">
			              				<option>user1</option>
			              			</select>
			              			<br>
			              			<div align="center">
		              					<button class="btn">Consultar</button>
		              				</div>
			              		</div>
			              		<div class="span2">
       	 							<!-- espacio vacío -->
      							</div>
			              		<div class="span2">
			              			Usuario:
			              			<select id="UsuarioDatosBorrar">
			              				<option>user1</option>
			              			</select>
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
		            	<!-- Tab Crear Usuarios -->
		            	<div id="tabCrearUsuario" class="tab-pane active">
		              		<p>
		                		Crear Usuario
		              		</p>
		            	</div>
		            	<!--  -->
		
		            	<!-- Tab Deshabilitar Usuarios -->
		            	<div id="tabDeshabilitarUsuario" class="tab-pane">
		              		<div class="row-fluid">
		              			<form action="">
      								<div class="row-fluid">
      									<div>
	       	 								<!-- espacio vacío -->
       	 									Seleccione el usuario a deshabilitar:
       	 									<br>
       	 									<br>
       	 									<div align="center">
		       	 								<select>
													<option>user1</option>
													<option>user2</option>
													<option>user3</option>
												</select>
												<br>
												<div align="center">
													<button class="btn">Aceptar</button>
												</div>
											</div>
       	 								</div>
       	 								
      								</div>
		              			</form>
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
    	
	</head>
	<body>
    	
		
	</body>

<footer>
	<?php
    	include("/var/www/catasTECHO/src/cmp/estilos.php");
	?>
</footer>
</html>
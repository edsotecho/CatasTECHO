<!DOCTYPE html>
<html>
	
	<?php
		include("/var/www/catasTECHO/src/cmp/encabezado.php");
	?>
	<head>
		<div class="navbar">
    		<div class="navbar-inner">
   				<a class="brand" href="jefecatastro.php">CatasTECHO</a>
    			<ul class="nav">
    				<li id="linkConsultas" class="active"><a onClick="muestraDiv(1)">Consultas</a></li>
    				<li id="linkDatos"><a onClick="muestraDiv(2)">Datos</a></li>
    				<li id="linkUsuarios"><a onClick="muestraDiv(3)">Usuarios</a></li>
    			</ul>
    			<ul class="nav pull-right">
    				<li class="divider-vertical"></li>
    				
    				<!-- referenciar a la página de los datos personales de cada usuario -->
    				<li id="linkInfoPersonal"><a onClick="muestraDiv(4)">Usuario</a></li>
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
			              			<button class="btn btn-primary">Consultar</button>
			              		</div>
			              		<div class="span5">
			              			<button class="btn"><img src="../src/img/excel_logo.png" style="height:40px; width:40px"/></button>
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
		              					<button class="btn btn-primary">Consultar</button>
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
		            		<h3>Eliminación de Datos</h3>
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
		              					<button class="btn btn-primary">Consultar</button>
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
		              		<form id="formulario" class="form-horizontal" name="formulario" action="" method="post">
		              			<fieldset>
			              			<h3>Creación de un Nuevo Usuario</h3>
			              			<div class="control-group">           				
										<label class="control-label" for="input01">Nombre Usuario</label>
										<div class="controls">
											<input name="nick" class="input-xlarge" id="input01" type="text">
										</div>
										<p></p>
										<label class="control-label" for="input01">Correo</label>
										<div class="controls">
											<input name="correo" class="input-xlarge" id="input01" type="text">
										</div>
										<p></p>
										<label class="control-label" for="input01">Contraseña</label>
										<div class="controls">
											<input name="pswd1" class="input-xlarge" id="input01" type="password">
										</div>
										<p></p>
										<label class="control-label" for="input01">Confirmar Contraseña</label>
										<div class="controls">
											<input name="pswd2" class="input-xlarge" id="input01" type="password">
										</div>
										<p></p>						
			              			</div>
			              			<div id="divRolCrearUsuarios" class="control-group">	
										<label class="control-label" for="select01">Seleccionar Rol</label>
										<div class="controls">
											<select id="selectRolCrearUsuarios" name="rol" onchange="muestraConfiguracionRoles()">
												<option selected="selected" value="0">(Seleccione)</option>
												<option value="1">Jefe de Catastro</option>
												<option value="3">Jefe de Provincia</option>
												<option value="4">Jefe de Cantón</option>
											</select>
										</div>
									</div>
									<div id="divProvinciaUsuarios" class="control-group" style="display: none">
										<label class="control-label" for="select01">Provincia</label>
										<div class="controls">
											<select id="selectProvinciaUsuarios" onchange="cambiaCantones()" name="provincia">
												<option selected="selected" value="0">(Seleccione)</option>
												<option value="1">San José</option>
												<option value="2">Alajuela</option>
												<option value="3">Cartago</option>
												<option value="4">Heredia</option>
												<option value="5">Puntarenas</option>
												<option value="6">Guanacaste</option>
												<option value="7">Limón</option>
											</select>
										</div>						
									</div>
									<div id="divCantonUsuarios" class="control-group" style="display: none">
										<label class="control-label" for="select01">Cantón</label>
										<div class="controls">
											<select id="selectCantonUsuarios" name="territorio">
												<option selected="selected" value="0">(Seleccione)</option>
											</select>
										</div>						
									</div>
									<div class="row-fluid form-actions">
										<div class="span5">
									    	<button class="btn">Cancelar</button>
									    </div>
										<div class="span5">
											<button class="btn btn-primary" name="crear" type="submit">Guardar</button>
									    </div> 
									</div>
		              			</fieldset>
		              		</form>
		            	</div>
		            	<!--  -->
		
		            	<!-- Tab Deshabilitar Usuarios -->
		            	<div id="tabDeshabilitarUsuario" class="tab-pane">
		            		<h3>Deshabilitar un Usuario</h3>
		              		<form action="">
		              			<div class="row-fluid">
		              				<div class="row-fluid">
      									<!-- espacio vacío -->
       	 								Seleccione el usuario a deshabilitar:
       	 								<br>
       	 								<br>
       	 								<div class="span4">
		       	 							<select>
												<option>user1</option>
												<option>user2</option>
												<option>user3</option>
											</select>
										</div>
										<div class="span4">
											<button class="btn btn-primary">Aceptar</button>
										</div>											 								
      								</div>  
		              			</div>
		              			
							</form> 		              		
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
    		<div class="span1">
       	 		<!-- espacio vacío -->
      		</div>
      		<div class="span10">
       	 		<h3>Mi Cuenta</h3>
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
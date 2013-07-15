// Función que cambia los div de Consultas, Datos y Usuarios para la página de Jefe de Catastro

function muestraDiv(valorCambio)
{
	var ConsultasDiv = document.getElementById("divConsultas");
    var DatosDiv = document.getElementById("divDatos");
    var UsuariosDiv = document.getElementById("divUsuarios");
    var InfoPersonalDiv = document.getElementById("divInfoPersonal");
    var ConsultasLink = document.getElementById("linkConsultas");
    var DatosLink = document.getElementById("linkDatos");
    var UsuariosLink = document.getElementById("linkUsuarios");
    var InfoPersonalLink = document.getElementById("linkInfoPersonal");

    if (valorCambio == 1) // Pone el div de Consultas visible
    {
      DatosDiv.style.display = "none";
      UsuariosDiv.style.display = "none";
      InfoPersonalDiv.style.display = "none";
      ConsultasDiv.style.display = "block";
      DatosLink.setAttribute("class", "");
      UsuariosLink.setAttribute("class", "");
      InfoPersonalLink.setAttribute("class", "");
      ConsultasLink.setAttribute("class", "active");
    }
    if (valorCambio == 2) // Pone el div de Datos visible
    {
      UsuariosDiv.style.display = "none";
      ConsultasDiv.style.display = "none";
      InfoPersonalDiv.style.display = "none";
      DatosDiv.style.display = "block";
      UsuariosLink.setAttribute("class", "");
      ConsultasLink.setAttribute("class", "");
      InfoPersonalLink.setAttribute("class", "");
      DatosLink.setAttribute("class", "active");
    }
    if (valorCambio == 3) // Pone el div de Usuarios visible
    {
      DatosDiv.style.display = "none";
      InfoPersonalDiv.style.display = "none";
      ConsultasDiv.style.display = "none";
      UsuariosDiv.style.display = "block";
      DatosLink.setAttribute("class", "");
      ConsultasLink.setAttribute("class", "");
      InfoPersonalLink.setAttribute("class", "");
      UsuariosLink.setAttribute("class", "active");
    }
    if (valorCambio == 4) // Pone el div de InfoPersonal visible
    {
    	DatosDiv.style.display = "none";
        ConsultasDiv.style.display = "none";
        UsuariosDiv.style.display = "none";
        InfoPersonalDiv.style.display = "block";
        DatosLink.setAttribute("class", "");
        ConsultasLink.setAttribute("class", "");
        UsuariosLink.setAttribute("class", "");
        InfoPersonalLink.setAttribute("class", "active");
    }

}

//Función que cambia los div de Consultas, Datos y Usuarios para la página de Jefe de Provincia

	function muestraDivJF(valorCambio)
	{
		var ConsultasDiv = document.getElementById("divConsultas");
	    var DatosDiv = document.getElementById("divDatos");
	    var InfoPersonalDiv = document.getElementById("divInfoPersonal");
	    var ConsultasLink = document.getElementById("linkConsultas");
	    var DatosLink = document.getElementById("linkDatos");
	    var InfoPersonalLink = document.getElementById("linkInfoPersonal");
	    
	    if (valorCambio == 1) // Pone el div de Consultas visible
	    {
	      DatosDiv.style.display = "none";
	      ConsultasDiv.style.display = "block";
	      DatosLink.setAttribute("class", "");
	      ConsultasLink.setAttribute("class", "active");
	    }
	    if (valorCambio == 2) // Pone el div de Datos visible
	    {
	      ConsultasDiv.style.display = "none"; 
	      DatosDiv.style.display = "block";
	      ConsultasLink.setAttribute("class", "");
	      DatosLink.setAttribute("class", "active");
	    }
	    if (valorCambio == 4) // Pone el div de InfoPersonal visible
	    {
	    	DatosDiv.style.display = "none";
	        ConsultasDiv.style.display = "none";
	        UsuariosDiv.style.display = "none";
	        InfoPersonalDiv.style.display = "block";
	        DatosLink.setAttribute("class", "");
	        ConsultasLink.setAttribute("class", "");
	        UsuariosLink.setAttribute("class", "");
	        InfoPersonalLink.setAttribute("class", "active");
	    }
	}

	// Función que cambia los div de Consultas, Datos y Usuarios para la página de Voluntarios
	
	function muestraDivVol(valorCambio)
	{
		var ConsultasDiv = document.getElementById("divConsultas");
	    var DatosDiv = document.getElementById("divDatos");
	    var InfoPersonalDiv = document.getElementById("divInfoPersonal");
	    var ConsultasLink = document.getElementById("linkConsultas");
	    var DatosLink = document.getElementById("linkDatos");
	    var InfoPersonalLink = document.getElementById("linkInfoPersonal");
	    
	    if (valorCambio == 1) // Pone el div de Consultas visible
	    {
	      DatosDiv.style.display = "none";
	      ConsultasDiv.style.display = "block";
	      DatosLink.setAttribute("class", "");
	      ConsultasLink.setAttribute("class", "active");
	    }
	    if (valorCambio == 2) // Pone el div de Datos visible
	    {
	      ConsultasDiv.style.display = "none"; 
	      DatosDiv.style.display = "block";
	      ConsultasLink.setAttribute("class", "");
	      DatosLink.setAttribute("class", "active");
	    }
	    if (valorCambio == 4) // Pone el div de InfoPersonal visible
	    {
	    	DatosDiv.style.display = "none";
	        ConsultasDiv.style.display = "none";
	        UsuariosDiv.style.display = "none";
	        InfoPersonalDiv.style.display = "block";
	        DatosLink.setAttribute("class", "");
	        ConsultasLink.setAttribute("class", "");
	        UsuariosLink.setAttribute("class", "");
	        InfoPersonalLink.setAttribute("class", "active");
	    }
	}

	// función que muestra las opciones de creación de usuario dependiendo del rol que utilizan
	
	function muestraConfiguracionRoles()
	{
		var selectCrearUsuario = document.getElementById("selectRolCrearUsuarios");
		var selectProvincia = document.getElementById("divProvinciaUsuarios");
		var selectCanton = document.getElementById("divCantonUsuarios");
		if ((selectCrearUsuario.options[selectCrearUsuario.selectedIndex].text == "(Seleccione)") || (selectCrearUsuario.options[selectCrearUsuario.selectedIndex].text == "Jefe de Catastro"))
		{
			selectProvincia.style.display = "none";
			selectCanton.style.display = "none";
		}
		else if (selectCrearUsuario.options[selectCrearUsuario.selectedIndex].text == "Jefe de Provincia")
		{
			selectProvincia.style.display = "block";
			selectCanton.style.display = "none";
		}
		else if (selectCrearUsuario.options[selectCrearUsuario.selectedIndex].text == "Jefe de Cantón")
		{
			selectProvincia.style.display = "block";
			selectCanton.style.display = "block";
		}	
	}
	
	// función que cambia los cantones dependiendo de la provincia elegida (creación de usuarios Jefe de Catastro)

	function cambiaCantones()
	{
		var selectProvincia = document.getElementById("selectProvinciaUsuarios");
		var selectCanton = document.getElementById("selectCantonUsuarios");
		if (selectProvincia.options[selectProvincia.selectedIndex].text == "(Seleccione)")
		{
			
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "San José")
		{
			selectCanton.options.length = 0;
			selectCanton.options[selectCanton.options.length]= new Option('(Seleccione)', '0');
			selectCanton.options[selectCanton.options.length]= new Option('San José', '1');
			selectCanton.options[selectCanton.options.length]= new Option('Escazú', '2');
			selectCanton.options[selectCanton.options.length]= new Option('Desamparados', '3');
			selectCanton.options[selectCanton.options.length]= new Option('Puriscal', '4');
			selectCanton.options[selectCanton.options.length]= new Option('Tarrazú', '5');
			selectCanton.options[selectCanton.options.length]= new Option('Aserrí', '6');
			selectCanton.options[selectCanton.options.length]= new Option('Mora', '7');
			selectCanton.options[selectCanton.options.length]= new Option('Goicoechea', '8');
			selectCanton.options[selectCanton.options.length]= new Option('Santa Ana', '9');
			selectCanton.options[selectCanton.options.length]= new Option('Alajuelita', '10');
			selectCanton.options[selectCanton.options.length]= new Option('Vásquez de Coronado', '11');
			selectCanton.options[selectCanton.options.length]= new Option('Acosta', '12');
			selectCanton.options[selectCanton.options.length]= new Option('Tibás', '13');
			selectCanton.options[selectCanton.options.length]= new Option('Moravia', '14');
			selectCanton.options[selectCanton.options.length]= new Option('Montes de Oca', '15');
			selectCanton.options[selectCanton.options.length]= new Option('Turrubares', '16');
			selectCanton.options[selectCanton.options.length]= new Option('Dota', '17');
			selectCanton.options[selectCanton.options.length]= new Option('Curridabat', '18');
			selectCanton.options[selectCanton.options.length]= new Option('Pérez Zeledón', '19');
			selectCanton.options[selectCanton.options.length]= new Option('León Cortés', '20');
			
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "Alajuela")
		{
			selectCanton.options.length = 0;
			selectCanton.options[selectCanton.options.length]= new Option('(Seleccione)', '0');
			selectCanton.options[selectCanton.options.length]= new Option('Alajuela', '1');
			selectCanton.options[selectCanton.options.length]= new Option('San Ramón', '2');
			selectCanton.options[selectCanton.options.length]= new Option('Grecia', '3');
			selectCanton.options[selectCanton.options.length]= new Option('San Mateo', '4');
			selectCanton.options[selectCanton.options.length]= new Option('Atenas', '5');
			selectCanton.options[selectCanton.options.length]= new Option('Naranjo', '6');
			selectCanton.options[selectCanton.options.length]= new Option('Palmares', '7');
			selectCanton.options[selectCanton.options.length]= new Option('Poas', '8');
			selectCanton.options[selectCanton.options.length]= new Option('Orotina', '9');
			selectCanton.options[selectCanton.options.length]= new Option('San Carlos', '10');
			selectCanton.options[selectCanton.options.length]= new Option('Zarcero', '11');
			selectCanton.options[selectCanton.options.length]= new Option('Valverde Vega', '12');
			selectCanton.options[selectCanton.options.length]= new Option('Upala', '13');
			selectCanton.options[selectCanton.options.length]= new Option('Los Chiles', '14');
			selectCanton.options[selectCanton.options.length]= new Option('Guatuso', '15');
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "Limón")
		{
			selectCanton.options.length = 0;
			selectCanton.options[selectCanton.options.length]= new Option('(Seleccione)', '0');
			selectCanton.options[selectCanton.options.length]= new Option('Limón', '1');
			selectCanton.options[selectCanton.options.length]= new Option('Pococí', '2');
			selectCanton.options[selectCanton.options.length]= new Option('Siquirres', '3');
			selectCanton.options[selectCanton.options.length]= new Option('Talamanca', '4');
			selectCanton.options[selectCanton.options.length]= new Option('Matina', '5');
			selectCanton.options[selectCanton.options.length]= new Option('Guácimo', '6');
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "Heredia")
		{
			selectCanton.options.length = 0;
			selectCanton.options[selectCanton.options.length]= new Option('(Seleccione)', '0');
			selectCanton.options[selectCanton.options.length]= new Option('Heredia', '1');
			selectCanton.options[selectCanton.options.length]= new Option('Barva', '2');
			selectCanton.options[selectCanton.options.length]= new Option('Santo Domingo', '3');
			selectCanton.options[selectCanton.options.length]= new Option('Santa Bárbara', '4');
			selectCanton.options[selectCanton.options.length]= new Option('San Rafael', '5');
			selectCanton.options[selectCanton.options.length]= new Option('San Isidro', '6');
			selectCanton.options[selectCanton.options.length]= new Option('Belén', '7');
			selectCanton.options[selectCanton.options.length]= new Option('Flores', '8');
			selectCanton.options[selectCanton.options.length]= new Option('San Pablo', '9');
			selectCanton.options[selectCanton.options.length]= new Option('Sarapiquí', '10');
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "Puntarenas")
		{
			selectCanton.options.length = 0;
			selectCanton.options[selectCanton.options.length]= new Option('(Seleccione)', '0');
			selectCanton.options[selectCanton.options.length]= new Option('Puntarenas', '1');
			selectCanton.options[selectCanton.options.length]= new Option('Esparza', '2');
			selectCanton.options[selectCanton.options.length]= new Option('Buenos Aires', '3');
			selectCanton.options[selectCanton.options.length]= new Option('Montes de Oro', '4');
			selectCanton.options[selectCanton.options.length]= new Option('Osa', '5');
			selectCanton.options[selectCanton.options.length]= new Option('Aguirre', '6');
			selectCanton.options[selectCanton.options.length]= new Option('Golfito', '7');
			selectCanton.options[selectCanton.options.length]= new Option('Coto Brus', '8');
			selectCanton.options[selectCanton.options.length]= new Option('Parrita', '9');
			selectCanton.options[selectCanton.options.length]= new Option('Corredores', '10');
			selectCanton.options[selectCanton.options.length]= new Option('Garabito', '11');
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "Guanacaste")
		{
			selectCanton.options.length = 0;
			selectCanton.options[selectCanton.options.length]= new Option('(Seleccione)', '0');
			selectCanton.options[selectCanton.options.length]= new Option('Liberia', '1');
			selectCanton.options[selectCanton.options.length]= new Option('Nicoya', '2');
			selectCanton.options[selectCanton.options.length]= new Option('Santa Cruz', '3');
			selectCanton.options[selectCanton.options.length]= new Option('Bagaces', '4');
			selectCanton.options[selectCanton.options.length]= new Option('Carrillo', '5');
			selectCanton.options[selectCanton.options.length]= new Option('Cañas', '6');
			selectCanton.options[selectCanton.options.length]= new Option('Abangares', '7');
			selectCanton.options[selectCanton.options.length]= new Option('Tilarán', '8');
			selectCanton.options[selectCanton.options.length]= new Option('Nandayure', '9');
			selectCanton.options[selectCanton.options.length]= new Option('La Cruz', '10');
			selectCanton.options[selectCanton.options.length]= new Option('Hojancha', '11');
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "Cartago")
		{
			selectCanton.options.length = 0;
			selectCanton.options[selectCanton.options.length]= new Option('(Seleccione)', '0');
			selectCanton.options[selectCanton.options.length]= new Option('Cartago', '1');
			selectCanton.options[selectCanton.options.length]= new Option('Paraíso', '2');
			selectCanton.options[selectCanton.options.length]= new Option('La Unión', '3');
			selectCanton.options[selectCanton.options.length]= new Option('Jiménez', '4');
			selectCanton.options[selectCanton.options.length]= new Option('Turrialba', '5');
			selectCanton.options[selectCanton.options.length]= new Option('Alvarado', '6');
			selectCanton.options[selectCanton.options.length]= new Option('Oreamuno', '7');
			selectCanton.options[selectCanton.options.length]= new Option('Guarco', '8');
		}
	}

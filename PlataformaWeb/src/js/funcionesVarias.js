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
		if (selectCrearUsuario.options[selectCrearUsuario.selectedIndex].text == "(Seleccione)")
		{
			selectProvincia.style.display = "none";
			selectCanton.style.display = "none";
		}
		if (selectCrearUsuario.options[selectCrearUsuario.selectedIndex].text == "Jefe de Catastro")
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
			selectCanton.clear();
			selectCanton.add("San José");
			selectCanton.add("Escazú");
			selectCanton.add("Desamparados");
			selectCanton.add("Puriscal");
			selectCanton.add("Tarrazú");
			selectCanton.add("Aserrí");
			selectCanton.add("Mora");
			selectCanton.add("Goicoechea");
			selectCanton.add("Santa Ana");
			selectCanton.add("Alajuelita");
			selectCanton.add("Vásquez de Coronado");
			selectCanton.add("Acosta");
			selectCanton.add("Tibás");
			selectCanton.add("Moravia");
			selectCanton.add("Montes de Oca");
			selectCanton.add("Turrubares");
			selectCanton.add("Dota");
			selectCanton.add("Curridabat");
			selectCanton.add("Pérez Zeledón");
			selectCanton.add("León Cortés");
			
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "Alajuela")
		{
			selectCanton.clear();
			selectCanton.add("Alajuela");
			selectCanton.add("San Ramón");
			selectCanton.add("Grecia");
			selectCanton.add("San Mateo");
			selectCanton.add("Atenas");
			selectCanton.add("Naranjo");
			selectCanton.add("Palmares");
			selectCanton.add("Poas");
			selectCanton.add("Orotina");
			selectCanton.add("San Carlos");
			selectCanton.add("Zarcero");
			selectCanton.add("Valverde Vega");
			selectCanton.add("Upala");
			selectCanton.add("Los Chiles");
			selectCanton.add("Guatuso");
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "Limón")
		{
			selectCanton.clear();
			selectCanton.add("Limón");
			selectCanton.add("Pococí");
			selectCanton.add("Siquirres");
			selectCanton.add("Talamanca");
			selectCanton.add("Matina");
			selectCanton.add("Guácimo");
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "Heredia")
		{
			selectCanton.clear();
			selectCanton.add("Heredia");
			selectCanton.add("Barva");
			selectCanton.add("Santo Domingo");
			selectCanton.add("Santa Bárbara");
			selectCanton.add("San Rafael");
			selectCanton.add("San Isidro");
			selectCanton.add("Belén");
			selectCanton.add("Flores");
			selectCanton.add("San Pablo");
			selectCanton.add("Sarapiquí");
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "Puntarenas")
		{
			selectCanton.clear();
			selectCanton.add("Puntarenas");
			selectCanton.add("Esparza");
			selectCanton.add("Buenos Aires");
			selectCanton.add("Montes de Oro");
			selectCanton.add("Osa");
			selectCanton.add("Aguirre");
			selectCanton.add("Golfito");
			selectCanton.add("Coto Brus");
			selectCanton.add("Parrita");
			selectCanton.add("Corredores");
			selectCanton.add("Garabito");
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "Guanacaste")
		{
			selectCanton.clear();
			selectCanton.add("Liberia");
			selectCanton.add("Nicoya");
			selectCanton.add("Santa Cruz");
			selectCanton.add("Bagaces");
			selectCanton.add("Carrillo");
			selectCanton.add("Cañas");
			selectCanton.add("Abangares");
			selectCanton.add("Tilarán");
			selectCanton.add("Nandayure");
			selectCanton.add("La Cruz");
			selectCanton.add("Hojancha");
		}
		else if (selectProvincia.options[selectProvincia.selectedIndex].text == "Cartago")
		{
			selectCanton.clear();
			selectCanton.add("Cartago");
			selectCanton.add("Paraíso");
			selectCanton.add("La Unión");
			selectCanton.add("Jiménez");
			selectCanton.add("Turrialba");
			selectCanton.add("Alvarado");
			selectCanton.add("Oreamuno");
			selectCanton.add("Guarco");
		}
	}

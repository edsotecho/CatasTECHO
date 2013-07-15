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
		var selectCrearUsuario = document.getElementById("selectRolCrearUsuario");
		var selectProvincia = document.getElementById("selectProvinciaUsuarios");
		var selectCanton = document.getElementById("selectCantonUsuarios");
		if (selectCrearUsuario.options[selectCrearUsuario.selectedIndex].text == "Seleccione")
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
		if (selectProvincia.options[selectProvincia.selectedIndex].text == "San José")
		{
			
		}
	}

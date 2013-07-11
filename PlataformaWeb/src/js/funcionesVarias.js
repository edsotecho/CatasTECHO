// Función que cambia los div de Consultas, Datos y Usuarios

function muestraDiv(valorCambio)
{
	var ConsultasDiv = document.getElementById("divConsultas");
    var DatosDiv = document.getElementById("divDatos");
    var UsuariosDiv = document.getElementById("divUsuarios");
    var ConsultasLink = document.getElementById("linkConsultas");
    var DatosLink = document.getElementById("linkDatos");
    var UsuariosLink = document.getElementById("linkUsuarios");

    if (valorCambio == 1) // Pone el div de Consultas visible
    {
      DatosDiv.style.display = "none";
      UsuariosDiv.style.display = "none";
      ConsultasDiv.style.display = "block";
      DatosLink.setAttribute("class", "");
      UsuariosLink.setAttribute("class", "");
      ConsultasLink.setAttribute("class", "active");
    }
    if (valorCambio == 2) // Pone el div de Datos visible
    {
      UsuariosDiv.style.display = "none";
      ConsultasDiv.style.display = "none"; 
      DatosDiv.style.display = "block";
      UsuariosLink.setAttribute("class", "");
      ConsultasLink.setAttribute("class", "");
      DatosLink.setAttribute("class", "active");
    }
    if (valorCambio == 3) // Pone el div de Usuarios visible
    {
      DatosDiv.style.display = "none";
      ConsultasDiv.style.display = "none";
      UsuariosDiv.style.display = "block";
      DatosLink.setAttribute("class", "");
      ConsultasLink.setAttribute("class", "");
      UsuariosLink.setAttribute("class", "active");
    } 

}

function muestraDivJF(valorCambio)
{
	var ConsultasDiv = document.getElementById("divConsultas");
    var DatosDiv = document.getElementById("divDatos");
    var ConsultasLink = document.getElementById("linkConsultas");
    var DatosLink = document.getElementById("linkDatos");
    
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
}


function cambiaTerritorio()
{ 
    //tomo el valor del select del rol elegido 
    var rol = document.formulario.rol[document.formulario.rol.selectedIndex].value;

    if (rol == 3) 
    { 
    	agregarProvincias();
    }
    else if(rol == 4)
    {
    	agregarCantones();
    }
    else
    { 
       //si no había provincia seleccionada, elimino las provincias del select 
       document.formulario.territorio.length = 1 ;
       //coloco un guión en la única opción que he dejado 
       document.formulario.territorio.options[0].value = "0";
       document.formulario.territorio.options[0].text = "Seleccione el Rol";
    } 
}


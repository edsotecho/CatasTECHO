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
      DatosLink.class = "none";
      UsuariosLink.class = "none";
      ConsultasLink.class = "active";
    }
    if (valorCambio == 2) // Pone el div de Datos visible
    {
      UsuariosDiv.style.display = "none";
      ConsultasDiv.style.display = "none"; 
      DatosDiv.style.display = "block";
      UsuariosLink.class = "none";
      ConsultasLink.class = "none";
      DatosLink.class = "active";
    }
    if (valorCambio == 3) // Pone el div de Usuarios visible
    {
      DatosDiv.style.display = "none";
      ConsultasDiv.style.display = "none";
      UsuariosDiv.style.display = "block";
      ConsultasLink.class = "none";
      DatosLink.class = "none";
      UsuariosLink.class = "active";
    } 

}
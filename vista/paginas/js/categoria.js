function ValidarCategoria()
{
	var alertaCa = document.getElementById("alert");
	var msj = document.getElementById("msj");
	var mensajeCa = document.getElementById("mensaje");
	var nombre = document.getElementById("nombre");
	var descripcion = document.getElementById("descripcion");
	if (nombre.value=="") 
	{
		document.frmCategoria.nombre.focus();
		alertaCa.style.backgroundColor = "#f44336";
		alertaCa.style.display = "block";
		msj.innerHTML='Error!';
		mensajeCa.innerHTML = "Ingrese nombre";
		return false;
	}
	if (descripcion.value=="") 
	{
		document.frmCategoria.descripcion.focus();
		alertaCa.style.backgroundColor = "#f44336";
		alertaCa.style.display = "block";
		msj.innerHTML='Error!';
		mensajeCa.innerHTML = "Ingrese una descripcion";
		return false;
	}
	alertaCa.style.backgroundColor = "#41955D";
	msj.innerHTML='Éxito!';
	mensajeCa.innerHTML = "Categoria registrada";
	return true;
}
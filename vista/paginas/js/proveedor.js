function ValidarProveedor()
{
	var alertaP = document.getElementById("alert");
	var strong = document.getElementById("strong");
	var mensajeP = document.getElementById("mensaje");
	var nit = document.getElementById("nit");
	var nombre = document.getElementById("nombre");
	var telefono = document.getElementById("telefono");
	var direccion = document.getElementById("direccion");
	if (nit.value=="") 
	{
		document.frmProveedor.nit.focus();
		alertaP.style.display = "block";
		alertaP.style.backgroundColor = " #f44336";
		strong.innerHTML = "Error!";
		mensajeP.innerHTML = "Ingrese nit";
		return false;
	}
	if (nombre.value=="") 
	{
		document.frmProveedor.nombre.focus();
		alertaP.style.display = "block";
		alertaP.style.backgroundColor = " #f44336";
		strong.innerHTML = "Error!";
		mensajeP.innerHTML = "Ingrese nombre";
		return false;
	}
	if (telefono.value=="") 
	{
		document.frmProveedor.telefono.focus();
		alertaP.style.display = "block";
		alertaP.style.backgroundColor = " #f44336";
		strong.innerHTML = "Error!";
		mensajeP.innerHTML = "Ingrese telefono";
		return false;
	}
	if (direccion.value=="") 
	{
		document.frmProveedor.direccion.focus();
		alertaP.style.display = "block";
		alertaP.style.backgroundColor = " #f44336";
		strong.innerHTML = "Error!";
		mensajeP.innerHTML = "Ingrese direccion";
		return false;
	}
	strong.innerHTML = "Éxito";
	mensajeP.innerHTML = "Proveedor registrado.";
	alertaP.style.backgroundColor = "green";
	return true;
}
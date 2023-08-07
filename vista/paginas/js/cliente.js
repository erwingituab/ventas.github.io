function ValidarCliente()
{
	var alertaC = document.getElementById("alert");
	var mensajeC = document.getElementById("mensaje");
	var strong = document.getElementById("strong");
	var ci = document.getElementById("ci");
	var nombre = document.getElementById("nombre");
	var telefono = document.getElementById("telefono");
	var direccion = document.getElementById("direccion");
	if (ci.value=="") 
	{
		document.frmCliente.ci.focus();
		alertaC.style.backgroundColor = "#f44336";
		alertaC.style.display = "block";
		strong.innerHTML='Error!';
		mensajeC.innerHTML = "Ingrese ci";
		return false;
	}
	if(nombre.value=="")
	{
		document.frmCliente.nombre.focus();
		alertaC.style.backgroundColor = "#f44336";
		alertaC.style.display = "block";
		strong.innerHTML='Error!';
		mensajeC.innerHTML = "Ingrese nombre";
		return false;
	}
	if (telefono.value=="") 
	{
		document.frmCliente.telefono.focus();
		alertaC.style.backgroundColor = "#f44336";
		alertaC.style.display = "block";
		strong.innerHTML='Error!';
		mensajeC.innerHTML = "Ingrese telefono";
		return false;
	}
	if (direccion.value=="") 
	{
		document.frmCliente.direccion.focus();
		alertaC.style.backgroundColor = "#f44336";
		alertaC.style.display = "block";
		strong.innerHTML='Error!';
		mensajeC.innerHTML = "Ingrese direccion";
		return false;
	}
	alertaC.style.backgroundColor = "#41955D";
	alertaC.style.display = "block";
	strong.innerHTML='Éxito!';
	mensajeC.innerHTML = "Cliente registrado";
	return true;
}
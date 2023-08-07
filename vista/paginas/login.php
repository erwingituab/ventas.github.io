<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ingreso</title>
</head>
<body>	
<form id="frmLogin">
	<div class="titulo">
		<h1>Cybernet
			<img src="vista/images/acrhobol.png" title="ventas"></h1>
		</div>
		<label for="usuario">Usuario</label>
		<input type="text" id="usuario" placeholder="Usuario">
		<label for="clave">Password</label>
		<input type="password" id="clave" placeholder="Password">
		<div class="mensaje" style="display: none;">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			<strong>Error!</strong><p id="error"></p>
		</div>
		<input type="submit" class="submit" value="Ingresar">
	</form>	
</body>
</html>
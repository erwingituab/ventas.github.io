<link rel="stylesheet" href="css/configuracion.css">
<div class="contenedor-form">	
		<?php if ($rol=='Administrador'): ?>			
		<form class="frm1" name="frmEmpresa" id="frmConfiguracion" autocomplete="off" method="post" enctype="multipart/form-data">
			<img src="image/tienda.png" alt="">
				<div class="input">
					<label>Nit</label>
					<input type="text" id="nit" placeholder="Ingrese número de nit">
				</div>
				<div class="input">
					<label>Nombre</label>
					<input type="text" id="nombre" placeholder="Ingrese nombre">
				</div>
				<div class="input">
					<label>Teléfono</label>
					<input type="text" id="telefono" placeholder="Ingrese teléfono">
				</div>
				<div class="input">
					<label>Dirección</label>
					<input type="text" id="direccion" placeholder="Ingrese dirección">
				</div>
				<div class="input">
					<label>Iva</label>
					<input type="text" id="iva" placeholder="Ingrese Impuesto">
				</div>
				<div class="photo">
					<label for="foto">Logo</label>
					<div class="prevPhoto">
						<span class="delPhoto notBlock">X</span>
						<label for="foto"></label>
					</div>
					<div class="upimg">
						<input type="file" name="foto" id="foto">
					</div>
					<div id="form_alert"></div>
				</div>				
				<div class="alert" id="alert">
					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					<strong id="strong">Error!</strong><p class="mensaje" id="mensajeE"></p>
				</div>
				<div class="input">				
					<input type="button" id="submit" class="button button2" value="Registrar" onclick="ValidarEmpresa()">	
				</div>
		</form>	
	<?php endif ?>	
	<form class="frm2" name="frmClave" id="frmUsuario" autocomplete="off">
		<img src="image/usuario.jpg" alt="">					
		<div class="datos">
			<div class="inputs">
			<label>Ci:</label>
			<p><?php echo $ci; ?></p>
		</div>
		<div class="inputs">
			<label>Nombre:</label>
			<p><?php echo $nombre; ?></p>
		</div>
		<div class="inputs">
			<label>Usuario:</label>
			<p><?php echo $usuario; ?></p>
		</div>
		<div class="inputs">
			<label>Rol:</label>
			<p><?php echo $rol; ?></p>
		</div>	
		</div>	
		<fieldset>
			<legend>Cambiar password</legend>
			<input type="password" id="clave" placeholder="Ingrese password">
			<input type="password" id="newclave" placeholder="Nuevo password">
			<input type="password" id="confirmclave" placeholder="Confirmar password" onkeyup="ValidarClaves()">
		</fieldset>
		<div class="mensaje" style="display: none;">
			clave incorrecta
		</div>
		<div class="alert" id="alert2">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			<strong id="strong">Error!</strong><p class="mensaje" id="msjClave"></p>
		</div>
		<div class="input">				
			<input type="button" id="submit" class="button button2" value="Registrar" onclick="ValidarClaves()">	
		</div>
	</form>		
</div>
<script src="js/JQuery.js"></script>
<script src="js/configuracion.js"></script>

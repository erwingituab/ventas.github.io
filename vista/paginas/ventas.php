<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ventas</title>
	<link rel="stylesheet" href="css/ventas.css">
	<link rel="stylesheet" href="css/formVentas.css">
</head>
<body>
	<div class="contenedor-venta">
		<ul class="tabs">
			<li><a href="#tab1">Nueva venta</a></li>
			<li><a href="#tab2">Editar venta</a></li>
			<li><a href="#tab3">Ventas del dia</a></li>
			<li><a href="#tab4">Historico</a></li>
		</ul>
		<div class="secciones">
			<article id="tab1">				
				
				<form id="FrmCreate">					
					<div class="input">
						<label for="cliente">Señor(es):</label>
						<input type="text" placeholder="Buscar nit">
					</div>
					<div class="input">
						<label for="fecha">Fecha:</label>
						<input type="date" id="fecha" readonly="true">
					</div>
					<div class="input">
						<div class="numventa">
							<h1>VENTA</h1><p id="correlativo">1</p>
						</div>
					</div>
					<div class="contenedorcliente">
						<fieldset>
							<legend>Cliente</legend>
							<div class="input">
								<label for="nombre">Nombre</label>
								<input type="text" id="nombre" placeholder="Ingrese nombres y apellidos">
							</div>
							<div class="input">
								<label for="telefono">Teléfono</label>
								<input type="text" id="telefono" placeholder="Ingrese numero de teléfono">
							</div>
							<div class="input">
								<label for="ci">Direccion</label>
								<input type="text" id="direccion" placeholder="Ingrese una direccion">
							</div><br>							
							<input type="button" class="button button2" value="Registrar Cliente" onclick="">
						</fieldset>											
					</div>
					<div class="contenedorproducto">
						<fieldset>
							<legend>Producto</legend>
							<table class="gridproducto">
								<thead>
									<th>Producto</th>
									<th>Precio</th>
									<th>Cantidad</th>
									<th>Sub total</th>
								</thead>
								<tbody>
									<tr>
										<td contenteditable="true" id="item"></td>
										<td></td>
										<td contenteditable="true"></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</fieldset>
					</div>				
					<div class="btn">
						<button type="reset" id="reset"><span class="icon-loop2"></span>Nueva</button>
						<button id="agregar"><span class="icon-cart"></span>Agregar</button>
						<button type="submit" id="registrar"><span class="icon-books"></span>Registrar</button>
					</div>
				</form>
			</article>
			<article id="tab2">
				<div class="titulo">
					<h1>editar venta</h1>
					<form id="frmUpdate"></form>
				</div>
			</article>
			<article id="tab3">
				<div class="titulo">
					<h1>ventas del dia</h1>
					<ul class="salida">
						<li><a title="pdf" href="#" class="pdf"><span class="icon-file-pdf"></span></a></li>
						<li><a title="excel" href="#" class="excel"><span class="icon-file-excel excel"></span></a></li>
						<li><a title="print" href="#" class="print"><span class="icon-printer print"></span></a></li>
					</ul>
				</div>
			</article>
			<article id="tab4">
				<div class="titulo">
					<h1>historico de ventas</h1>
					<ul class="salida">
						<li><a title="pdf" href="#" class="pdf"><span class="icon-file-pdf"></span></a></li>
						<li><a title="excel" href="#" class="excel"><span class="icon-file-excel excel"></span></a></li>
						<li><a title="print" href="#" class="print"><span class="icon-printer print"></span></a></li>
					</ul>					
				</div>
				<form action="">
					<div class="fechas">
						<div class="input">
							<label for="inicial">Fecha Inicial</label>
							<input type="date" id="inicial">
						</div>
						<div class="input">
							<label for="final">Fecha Final</label>
							<input type="date" id="final">
						</div>
					</div>
					<div class="btn">
						<button type="reset" id="reset"><span class="icon-loop2"></span>Nueva</button>
						<button id="agregar"><span class="icon-cart"></span>Agregar</button>
					</div>
				</form>
			</article>
		</div>	
		<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerra-popup" class="btn-cerrar-popup"><span class="icon-cross"></span></a>
			</div>
		</div>	
	</div>
	<script src="js/JQuery.js"></script>	
	<script src="js/ventas.js"></script>
</body>
<!--<a id="reset"><span class="icon-loop2"></span>Nueva</a>
						<a id="agregar"><span class="icon-cart"></span>Agregar</a>
						<a id="registrar"><span class="icon-books"></span>Registrar</a>-->
</html>
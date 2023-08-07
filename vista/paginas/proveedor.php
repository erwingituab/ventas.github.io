<link rel="stylesheet" href="css/usuario.css">
<div class="contenedor-form">
	<form name="frmProveedor">
		<div class="titulo-frm">			
			<h1 id="titulo">Proveedor</h1>
		</div>
		<div class="input">
			<label for="nit">Nit</label>
			<input type="text" id="nit" placeholder="Ingrese número de nit">
		</div>
		<div class="input">
			<label for="nombre">Nombre</label>
			<input type="text" id="nombre" placeholder="Ingrese nombres y apellidos">
		</div>
		<div class="input">
			<label for="telefono">Teléfono</label>
			<input type="text" id="telefono" placeholder="Ingrese numero de teléfono">
		</div>
		<div class="input">
			<label for="direccion">Direccion</label>
			<input type="text" id="direccion" placeholder="Ingrese una direccion">
		</div>		
		<div class="alert" id="alert">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			<strong id="strong">Error!</strong><p class="mensaje" id="mensaje"></p>
		</div>
		<div class="input">				
			<input type="button" class="button button2" value="Registrar" onclick="ValidarProveedor()">			
		</div>			
	</form>
	<div class="data">		
		<div class="buscar">		
			<div class="input">
				<input type="text" placeholder="Buscar proveedor"><span class="icon-search"></span>
			</div>		
			<ul class="salida">
				<li><a href="" class="pdf"><span class="icon-file-pdf"></span></a></li>
				<li><a href="" class="excel"><span class="icon-file-excel excel"></span></a></li>
				<li><a href="" class="print"><span class="icon-printer print"></span></a></li>
			</ul>
		</div>
		<div class="table">
			<table>
				<thead>
					<th>Nit</th>
					<th>Nombre</th>
					<th>Teléfono</th>
					<th>Dirección</th>					
					<th>Acción</th>
				</thead>				
				<tbody>	
					<tr>
						<td>10780686</td>
						<td>Erwin Apace Fabricano</td>
						<td>73751692</td>
						<td>Av. Petrolera km 4</td>						
						<td class="opciones">
							<a id="update" title="editar"><span class="icon-loop2"></span></a>
							<a id="delete" title="eliminar"><span class="icon-bin"></span></a>								
						</td>
					</tr>												
				</tbody>				
			</table>			
		</div>
		<div class="paginador">
			<ul>
				<li><a href="#">|<</a></li>
				<li><a href="#"><<</a></li>
				<li class="pageSelected">1</li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">>></a></li>
				<li><a href="#">>|</a></li>
			</ul>
		</div>
	</div>
</div>
<script src="js/proveedor.js"></script>
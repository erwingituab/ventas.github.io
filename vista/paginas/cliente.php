<link rel="stylesheet" href="css/usuario.css">
<div class="contenedor-form">
	<form name="frmCliente">
		<div class="titulo-frm">			
			<h1 id="titulo">Cliente</h1>
		</div>
		<div class="input">
			<label for="ci">Ci</label>
			<input type="text" id="ci" placeholder="Ingrese número de carnet" tabindex="1">
		</div>
		<div class="input">
			<label for="nombre">Nombre</label>
			<input type="text" id="nombre" placeholder="Ingrese nombres y apellidos" tabindex="2">
		</div>
		<div class="input">
			<label for="telefono">Teléfono</label>
			<input type="text" id="telefono" placeholder="Ingrese numero de teléfono" tabindex="3">
		</div>
		<div class="input">
			<label for="ci">Direccion</label>
			<input type="text" id="direccion" placeholder="Ingrese una direccion" tabindex="4">
		</div>
		<div class="alert" id="alert">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			<strong id="strong">Error!</strong><p id="mensaje" class="mensaje" ></p>
		</div>
		<div class="input">				
			<input type="button" class="button button2" value="Registrar" onclick="ValidarCliente()" tabindex="5">			
		</div>			
	</form>
	<div class="data">		
		<div class="buscar">		
			<div class="input">
				<input type="text" id="buscarcliente" placeholder="Buscar cliente"><span class="icon-search"></span>
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
					<th>Ci</th>
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
<script src="js/cliente.js"></script>
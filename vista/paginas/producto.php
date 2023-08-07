<link rel="stylesheet" href="css/usuario.css">
<div class="contenedor-form">
	<form name="frmProducto">
		<div class="titulo-frm">			
			<h1 id="titulo">Producto</h1>
		</div>		
		<div class="input">
			<label for="codigo">Codigo</label>
			<input type="text" id="codigo" placeholder="Ingrese categoria">
		</div>
		<div class="input">
			<label for="descripcion">Descripción</label>
			<input type="text" id="descripcion" placeholder="Ingrese descripción">
		</div>	
		<div class="input">
			<label for="precio">Precio Unitario</label>
			<input type="text" id="preciounitario" placeholder="Ingrese precio unitario">
		</div>	
		<div class="input">
			<label for="descripcion">Existencia</label>
			<input type="number" id="existencia" value="1" placeholder="Ingrese cantidad">
		</div>
		<div class="input">
			<label for="descripcion">Proveedor</label>
			<select name="" id="idproveedor">
				<option value="">Elija opcion</option>
				<option value="1">acrhobol</option>
			</select>
		</div>
		<div class="input">
			<label for="descripcion">Categoria</label>
			<select name="" id="idcategoria">
				<option value="">Elija opcion</option>
				<option value="1">Abarrotes</option>
			</select>
		</div>
		<div class="photo">
			<label for="foto">Foto</label>
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
			<strong id="strong">Error!</strong><p class="mensaje" id="mensaje"></p>
		</div>
		<div class="input">				
			<input type="button" class="button button2" value="Registrar" onclick="ValidarProducto()">			
		</div>			
	</form>
	<div class="data">		
		<div class="buscar">		
			<div class="input">
				<input type="text" placeholder="Buscar producto"><span class="icon-search"></span>
			</div>
			<div class="input">
				<select name="comCategoria" id="">
					<option value="0">Categoria</option>
					<option value="0">La cancha</option>
				</select>
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
					<th>Codigo</th>
					<th>Descripción</th>					
					<th>Precio</th>
					<th>Imagen</th>
					<th>Existencia</th>								
					<th>Acción</th>
				</thead>				
				<tbody>	
					<tr>						
						<td>001</td>
						<td>Papel Bon oficio</td>
						<td>2</td>
						<td>10</td>
						<td></td>
											
						<td class="opciones">
							<a id="update" title="editar"><span class="icon-loop2"></span></a>
							<a id="delete" title="eliminar"><span class="icon-bin"></span></a>
							<a id="blocked" title="bloquear"><span class="icon-blocked"></span></a>							
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
<script src="js/JQuery.js"></script>
<script src="js/producto.js"></script>
<link rel="stylesheet" href="css/usuario.css">
<div class="contenedor-form">
	<form name="frmCategoria">
		<div class="titulo-frm">			
			<h1 id="titulo">Categoria</h1>
		</div>
		<div class="input">
			<label for="ci">Nombre</label>
			<input type="text" id="nombre" placeholder="Ingrese categoria">
		</div>
		<div class="input">
			<label for="descricpion">Descripción</label>
			<input type="text" id="descripcion" placeholder="Ingrese descripción">
		</div>		
		<div class="alert" id="alert">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			<strong id="msj">Error!</strong><p class="mensaje" id="mensaje"></p>
		</div>
		<div class="input">				
			<input type="button" class="button button2" value="Registrar" onclick="ValidarCategoria()">			
		</div>			
	</form>
	<div class="data">		
		<div class="buscar">		
			<div class="input">
				<input type="text" placeholder="Buscar categoria"><span class="icon-search"></span>
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
					<th>Nombre</th>
					<th>Descripción</th>					
					<th>Acción</th>
				</thead>				
				<tbody>	
					<tr>
						<td>Papeleria</td>
						<td>Hoja de papel Bon Oficio</td>						
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
<script src="js/categoria.js"></script>
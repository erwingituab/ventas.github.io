<?php 
session_start();
if ($_SESSION['active']==true) {
	$saludo = "Bienvenido";
	$idusuario = $_SESSION['idusuario'];
	$ci = $_SESSION['ci'];
	$nombre = $_SESSION['nombre'];	
	$usuario = $_SESSION['usuario'];
	$rol = $_SESSION['rol'];
}
else
{
	session_destroy();
	header('location:../../');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="fonts/style.css">
	<link rel="stylesheet" href="css/index.css">	
	<title>Ventas</title>
</head>
<body>
	<div class="contenedor">
		<header>
			<div class="logo">
				<h1>E&N</h1>
				<p>Cybernet</p>
			</div>			
		</header>					
		<nav>
			<ul>
				<?php if (isset($_GET['pagina'])): ?>
					<?php if ($_GET['pagina']=='inicio'): ?>
						<li><a href="inicio" class="active" title="Inicio"><span class="icono icon-home3"></span><span class="texto">Inicio</span></a></li>
					<?php else: ?>
						<li><a href="inicio" title="Inicio"><span class="icono icon-home3"></span><span class="texto">Inicio</span></a></li>
					<?php endif ?>	
					<?php if ($_GET['pagina']=='usuario'): ?>
						<li><a href="usuario" class="active" title="usuario"><span class="icono icon-user"></span><span class="texto">Usuario</span></a></li>
					<?php else: ?>
						<li><a href="usuario" title="usuario"><span class="icono icon-user"></span><span class="texto">Usuario</span></a></li>
					<?php endif ?>
					<?php if ($_GET['pagina']=='cliente'): ?>
						<li><a href="cliente" class="active" title="cliente"><span class="icono icon-user-tie"></span><span class="texto">Cliente</span></a></li>
					<?php else: ?>
						<li><a href="cliente" title="cliente"><span class="icono icon-user-tie"></span><span class="texto">Cliente</span></a></li>
					<?php endif ?>
					<?php if ($_GET['pagina']=='proveedor'): ?>
						<li><a href="proveedor" class="active" title="proveedor"><span class="icono icon-truck"></span><span class="texto">Proveedor</span></a></li>
					<?php else: ?>
						<li><a href="proveedor" title="proveedor"><span class="icono icon-truck"></span><span class="texto">Proveedor</span></a></li>
					<?php endif ?>
					<?php if ($_GET['pagina']=='categoria'): ?>
						<li><a href="categoria" class="active" title="categoria"><span class="icono icon-price-tags"></span><span class="texto">Categoría</span></a></li>
					<?php else: ?>
						<li><a href="categoria" title="categoria"><span class="icono icon-price-tags"></span><span class="texto">Categoría</span></a></li>
					<?php endif ?>
					<?php if ($_GET['pagina']=='producto'): ?>
						<li><a href="producto" class="active" title="producto"><span class="icono icon-box-add"></span><span class="texto">Producto</span></a></li>
					<?php else: ?>
						<li><a href="producto" title="producto"><span class="icono icon-box-add"></span><span class="texto">Producto</span></a></li>
					<?php endif ?>
					<?php if ($_GET['pagina']=='ventas'): ?>
						<li><a href="ventas" class="active" title="ventas"><span class="icono icon-cart"></span><span class="texto">Ventas</span></a></li>
					<?php else: ?>
						<li><a href="ventas" title="ventas"><span class="icono icon-cart"></span><span class="texto">Ventas</span></a></li>
					<?php endif ?>
					<?php if ($_GET['pagina']=='configuracion'): ?>
						<li><a href="configuracion" class="active" title="configuracion"><span class="icono icon-cogs"></span><span class="texto">Config</span></a></li>
					<?php else: ?>
						<li><a href="configuracion" title="configuracion"><span class="icono icon-cogs"></span><span class="texto">Config</span></a></li>
					<?php endif ?>								
				<?php else: ?>		
					<li><a href="inicio"><span class="icono icon-home3"></span><span class="texto">Inicio</span></a></li>
					<li><a href="usuario"><span class="icono icon-user"></span><span class="texto">Usuario</span></a></li>
					<li><a href="cliente"><span class="icono icon-user-tie"></span><span class="texto">Cliente</span></a></li>
					<li><a href="proveedor"><span class="icono icon-truck"></span><span class="texto">Proveedor</span></a></li>
					<li><a href="categoria"><span class="icono icon-price-tags"></span><span class="texto">Categoria</span></a></li>
					<li><a href="producto"><span class="icono icon-box-add"></span><span class="texto">Producto</span></a></li>
					<li><a href="ventas"><span class="icono icon-cart"></span><span class="texto">Ventas</span></a></li>
					<li><a href="configuracion"><span class="icono icon-cogs"></span><span class="texto">Config</span></a></li>						
				<?php endif ?>
			</ul>
			<a href="#modal" class="salir"><span class="icon-switch"></span><span class="texto">salir</span></a>
		</nav>		
		<div class="main">
			<div class="container-all" id="modal">
				
				<div class="popup">
					<div class="img"></div>
					<div class="container-text">
						<h1>¿Seguro de cerrar sesión? </h1>
						<div class="submit">
							<a href="#" class="primary">Continuar en Cybernet</a>
							<a href="salir">Cerrar sesión</a>
							<div class="logo">
								<h1>E&N</h1>
								<p>Cybernet</p>
							</div>
						</div>
					</div>
					<a href="#" class="btn-close-popup">X</a>
				</div>

			</div>
			<?php 
			if (isset($_GET['pagina'])) {
				if ($_GET['pagina']=='inicio'||$_GET['pagina']=='usuario'
					||$_GET['pagina']=='cliente'||$_GET['pagina']=='proveedor'||$_GET['pagina']=='categoria'
					||$_GET['pagina']=='producto'||$_GET['pagina']=='ventas'||$_GET['pagina']=='configuracion'||$_GET['pagina']=='salir') 
				{
					include"".$_GET['pagina'].".php";
				}
				else
				{
					include "error404.php";
				}
			}
			else
			{
				include "inicio.php";
			}
			?>					
		</div>							
	</div>	
</body>
</html>
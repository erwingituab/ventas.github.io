<html>
	<link rel="stylesheet" href="vista/paginas/css/login.css">
	<script src="vista/paginas/js/JQuery.js"></script>
	<script src="vista/paginas/js/login.js"></script>
</html>
<?php 
require"controlador/CtrlIngreso.php";
$login = CtrlIngreso::Login();
echo $login;
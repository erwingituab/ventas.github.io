<?php 
/**
 * MdlConfiguracion
 */
require_once"conexion.php";
class MdlConfiguracion
{
	static public function RegistrarTienda($table,$tienda)
	{
		$ConexionBD = new ConexionBD();
		$conexion = $ConexionBD->Abrir();
		$sql = mysqli_query($conexion,"INSERT INTO 
			$table(nit,nombre,telefono,direccion,logo,iva,usuarioid) 
			VALUES()");
	}
}
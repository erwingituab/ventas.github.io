<?php 
/**
 * CtrlConfig
 */
require_once"../modelo/MdlConfig.php";
class CtrlConfiguracion
{
	static public function RegistrarTienda()
	{
		$table = "configuracion";
		$tienda = array("nit"=>$_POST['nit'],
						"nombre"=>$_POST['nombre'],
						"telefono"=>$_POST['telefono'],
						"direccion"=>$_POST['direccion'],
						"foto"=>$_FILES['foto'],
						"iva"=>$_POST['iva']);
		$respuesta = MdlConfiguracion::RegistrarTienda($table,$tienda);
	}
}
?>
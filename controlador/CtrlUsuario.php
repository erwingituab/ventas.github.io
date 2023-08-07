<?php 
$action = $_POST['action'];
switch ($action) {
	case '0':
		echo CtrlUsuario::Registrar();
		break;
	case '1':
		// code...
		break;
	case '2':
		// code...
		break;
	default:
		// code...
		break;
}
/**
 * CtrlUsuario
 */
class CtrlUsuario
{
	static public function Registrar()
	{
		require_once"../modelo/MdlUsuario.php";
		$table = "usuario";
		$usuario = array("ci"=>$_POST['ci'],
						"nombre"=>$_POST['nombre'],
						"telefono"=>$_POST["telefono"],
						"direccion"=>$_POST["direccion"],
						"usuario"=>$_POST["usuario"],
						"clave"=>md5($_POST['clave']),
						"rol"=>$_POST['rol'],
						"estatus"=>'1');
		$respuesta = MdlUsuario::Registrar($table , $usuario);
		return $respuesta;
	}
}
?>
<?php 
/**
 * CtrlIngreso
 */
if (isset($_POST['usuario'])&&isset($_POST['password'])) 
{
	echo CtrlIngreso::Ingreso();
}
class CtrlIngreso
{
	static public function Login()
	{
		include "vista/paginas/login.php";
	}
	static public function Ingreso()
	{
		require_once "../modelo/MdlIngreso.php";
		$table = "usuario";
		$usuario = array("usuario"=>$_POST['usuario'],
						"password"=>md5($_POST['password']));
		$respuesta = MdlIngreso::Ingreso($table,$usuario);
		if ($respuesta != null) 
		{
			if ($respuesta['idestatus']==1) 
			{
				session_start();
				$_SESSION['active']	= true;
				$_SESSION['idusuario'] = $respuesta['idusuario'];
				$_SESSION['ci'] = $respuesta['ci'];
				$_SESSION['nombre'] = $respuesta['nombre'];
				$_SESSION['usuario'] = $respuesta['usuario'];
				$_SESSION['rol'] = $respuesta['rol'];
				return 1;
			}
			else 
			{
				return 2;
			}
		}
		else
		{
			return 0;
		}
	}
}
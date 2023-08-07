<?php 
require_once"conexion.php";
/**
 * MdlUsuario
 */
class MdlUsuario
{
	public static function Registrar($table,$usuario)
	{
		$ConexionBD = new ConexionBD();
		$conexion = $ConexionBD->Abrir();
		$query = mysqli_query($conexion,"INSERT INTO usuario(ci,nombre,telefono,direccion,usuario,clave,rolid,estatusid)
														VALUE('".$usuario['ci']."',
															'".$usuario['nombre']."',
															'".$usuario['telefono']."',
															'".$usuario['direccion']."',
															'".$usuario['usuario']."',
															'".$usuario['clave']."',
															'".$usuario['rol']."',
															'".$usuario['estatus']."')");
		if ($query) {
			return 1;
		}
		else
		{
			return 0;
		}
		$ConexionBD->Cerrar($conexion);
	}
}
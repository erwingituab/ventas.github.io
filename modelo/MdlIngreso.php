<?php 
/**
 * MdlIngreso
 */
require_once "conexion.php";
class MdlIngreso
{
	static public function Ingreso($table,$usuario)
	{
		$ConexionBD = new ConexionBD();
		$conexion = $ConexionBD->Abrir();
		$query = mysqli_query($conexion,"SELECT usuario.idusuario,usuario.ci,usuario.nombre,usuario.usuario,rol.nombre'rol',estatus.idestatus 
							FROM usuario INNER JOIN rol ON usuario.rolid=idrol 
							INNER JOIN estatus ON usuario.estatusid=estatus.idestatus
							WHERE usuario='".$usuario['usuario']."' 
							AND clave='".$usuario['password']."'");
		$respuesta = mysqli_num_rows($query);
		if ($respuesta > 0) 
		{
			$usuario = mysqli_fetch_assoc($query);
			return $usuario;
		}
		else
		{
			return null;
		}
	}
}
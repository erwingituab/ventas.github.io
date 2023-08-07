<?php 
/**
 * ConexionBD Ventas
 */
class ConexionBD
{
	private $Servidor;
	private $Usuario;
	private $Pasword;
	private $BasedeDatos;
	function Abrir($Servidor="localhost",$Usuario="root",$Pasword="",$BasedeDatos="ventas")
	{
		$Conexion = @mysqli_connect($Servidor,$Usuario,$Pasword,$BasedeDatos)or die("no se pudo establecer una conexion con el  Servidor, ...Consulte a Soporte técnico.");
		return $Conexion;
	}
	function Cerrar($Conexion)
	{
		$cerrar = mysqli_close($Conexion);
		return $cerrar;
	}
}
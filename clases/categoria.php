<?php 

require_once("conexion.php"); /* require funciona mejor  q un include */

class Categoria{
	var $nombre;

	function __construct(){
		
	}
	function registrar_categoria($nombre){

		$this->nombre = $nombre;
		
		$conexion = new Conexion();
		$conec = $conexion->conectar();

		$sql = "INSERT INTO Categoria (id_Categoria,nomb_Categoria) VALUES (null,'$this->nombre')";
		mysql_query($sql,$conec);
		header("Location: panel_control.php");

	}
	function obtener_categoria(){

		$conexion = new Conexion();
		$conec = $conexion->conectar();

		$sql = "SELECT * FROM Categoria";
		$rs = mysql_query($sql,$conec);

		return $rs;
	}
	function obtener_id_categoria($categoria_producto){

		$conexion = new Conexion();
		$conec = $conexion->conectar();
		
		$sql = "SELECT id_Categoria FROM Categoria WHERE nomb_Categoria='$categoria_producto'";
		$rs=mysql_query($sql,$conec);
		
		while($row=@mysql_fetch_array($rs)){ /*el @ es para no mostrar el error */
			$rs=$row['id_Categoria'];
		}
		return $rs;
	}
}
 ?>
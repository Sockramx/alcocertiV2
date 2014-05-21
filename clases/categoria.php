<?php 

require_once("conexion.php"); /* require funciona mejor  q un include */

class Categoria{
	var $nombre;

	function __construct($nombre){
		$this->nombre = $nombre;
	}
	function registrar_categoria(){

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

		echo $categoria_producto;

		$sql = "SELECT id_Categoria FROM Categoria WHERE nomb_Categoria='$categoria_producto'";
		$rs=mysql_query($sql,$conec);
		echo $rs;
		return $rs;
	}
	function actualizar_categoria(){

	}
	function borrar_categoria(){
		
	}
}
 ?>
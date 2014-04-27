<?php 

include ("conexion.php");

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

	}
	function actualizar_categoria(){

	}
	function borrar_categoria(){
		
	}
}
 ?>
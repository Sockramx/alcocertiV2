<?php 


class Producto{
	var $nombre;
	var $marca;
	var $descripcion;
	var $img_producto;
	var $categoria;
	var $usuario;

	function __construct($nombre,$marca,$descripcion,$img_producto,$id_categoria,$id_usuario){

		$this->nombre = $nombre;
		$this->marca = $marca;
		$this->descripcion = $descripcion;
		$this->img_producto = $img_producto;
		$this->categoria = $id_categoria;
		$this->usuario = $id_usuario;
		
	}
	function registrar_producto(){

		$conexion = new Conexion();
		$conec = $conexion->conectar();

		$sql = "INSERT INTO `Producto` (`id_Producto`, `nomb_Producto`, `marc_Producto`, `descrip_Producto`, `img_Producto`, `id_Categoria`, `id_Usuario`) VALUES (null, '$this->nombre', '$this->marca', '$this->descripcion', '$this->img_producto',$this->categoria,$this->usuario)";
		mysql_query($sql,$conec);  
	}
	function obtener_producto($id_Categoria){

		$conexion = new Conexion();
		$conec = $conexion->conectar();

		$sql = "SELECT * FROM Producto WHERE id_Categoria=".$id_Categoria." ORDER BY nomb_Producto";
		$rs = mysql_query($sql,$conec);
		return $rs;
	}
	function actualizar_producto(){

	}
	function borrar_producto(){}
}

 ?>
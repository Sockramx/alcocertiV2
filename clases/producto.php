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
		echo $this->nombre;
		echo $this->marca;
		echo $this->descripcion;
		echo $this->img_producto;
		echo $this->categoria;
		echo $this->usuario;

		$conexion = new Conexion();
		$conec = $conexion->conectar();

		$sql = "INSERT INTO `Producto` (`id_Producto`, `nomb_Producto`, `marc_Producto`, `descrip_Producto`, `img_Producto`, `id_Categoria`, `id_Usuario`) VALUES (null, '$this->nombre', '$this->marca', '$this->descripcion', '$this->img_producto', 1, 1);";
		mysql_query($sql,$conec);  
	}
	function obtener_producto(){

	}
	function actualizar_producto(){

	}
	function borrar_producto(){}
}

 ?>
<?php 
include ("clases/conexion.php");
include ("clases/producto.php");

$conexion = new Conexion();
$productos = new Producto();

$conec = $conexion->conectar();

$sql = "SELECT * FROM Producto  ORDER BY nomb_Producto";
$rs = mysql_query($sql,$conec);

/*$row = mysql_fetch_assoc($rs);*/

$json = array();
while($row = mysql_fetch_assoc($rs)){
	$json[] = array ('id' => $row['id_Producto'],
		  'nombre' => $row['nomb_Producto'],
		  'marca' => $row['marc_Producto'],
		  'descripcion' => $row['descrip_Producto'],
		  'imagen' => $row['img_Producto'],
		  'id_categoria' => $row['id_Categoria'],
		  'id_usuario' => $row['id_Usuario'],
		);
}

echo json_encode($json,JSON_UNESCAPED_UNICODE);


 ?>
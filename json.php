<?php 
include ("clases/conexion.php");
include ("clases/producto.php");

$conexion = new Conexion();
$productos = new Producto();

if (!empty($_GET)) {
	$get_id_category = mysql_escape_string($_GET['categoria']);
	$conec = $conexion->conectar();

	$sql = "SELECT * FROM Producto WHERE id_Categoria=".$get_id_category." ORDER BY nomb_Producto";

	$rs = mysql_query($sql,$conec);

	if ( $rs ) {
		$json = array('objects' => []);
		while($row = mysql_fetch_assoc($rs)){
			$json['objects'][] = array ('id' => $row['id_Producto'],
				  'nombre' => $row['nomb_Producto'],
				  'marca' => $row['marc_Producto'],
				  'descripcion' => $row['descrip_Producto'],
				  'imagen' => $row['img_Producto'],
				  'id_categoria' => $row['id_Categoria'],
				  'id_usuario' => $row['id_Usuario'],
				);
		}
		echo json_encode($json,JSON_UNESCAPED_UNICODE);
	} else {
		if (!$rs) {
			die('Consulta no válida: ' . mysql_error());
		}		
		echo "Error 401";	
	}
} else {
	echo "Error 401";
}

 ?>
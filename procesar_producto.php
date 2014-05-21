<?php 

session_start();

if(!isset($_SESSION['usuario'])){ 
	header('Location: index.php');
}

include ('clases/producto.php');
include ('clases/usuario.php');
include ('clases/categoria.php'); 


$nombre_usuario=$_SESSION['usuario'];

$nombre_producto = $_POST['nombre_producto'];
$descripcion_producto = $_POST['descripcion_producto'];

$ruta = "imagenes/producto";
$archivo = $_FILES['imagen']['tmp_name'];
$nombreArchivo = $_FILES['imagen']['name'];

move_uploaded_file($archivo,$ruta."/".$nombreArchivo);

$ruta = $ruta."/".$nombreArchivo;

$categoria_producto = $_POST['categoria_producto'];

$marca_producto = $_POST['marca_producto'];

echo $categoria_producto;



/* Obtenemos el id del Usuario */

$usuario = new Usuario($nombre_usuario);
$id_usuario = (int)$usuario->obtener_usuario(); /* convierto la cadena a entero con int */

/*Obtenemos el id de categoria */

$categoria = new Categoria($categoria_producto);
$id_categoria = (int)$categoria->obtener_id_categoria($categoria_producto); /* convierto la cadena a entero con int */

$producto = new Producto($nombre_producto,$marca_producto,$descripcion_producto,$ruta,$id_categoria,$id_usuario);
$producto->registrar_producto();










 ?>

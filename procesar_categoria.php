<?php 

session_start();

if(!isset($_SESSION['usuario'])){ 
	header('Location: index.php');
}

include ("clases/categoria.php");

$nombre_categoria = $_POST['nombre_categoria'];

if(isset($nombre_categoria) && !empty($nombre_categoria)){
	$categoria = new Categoria($nombre_categoria);
	$categoria->registrar_categoria();
	
}else{
	echo "Ingrese los todos los campos";
}
 ?>
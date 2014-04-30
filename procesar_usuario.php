<?php 

session_start();

if(!isset($_SESSION['usuario'])){ 
	header('Location: index.php');
}

include ("clases/usuario.php");
/*Registro de usuario */

$nombre_usuario = $_POST['nombre_usuario'];
$apellido_usuario = $_POST['apellido_usuario'];
$dni_usuario = $_POST['dni_usuario'];
$password_usuario = sha1($_POST['password_usuario']);
$telefono_usuario = $_POST['telefono_usuario'];
$celular_usuario = $_POST['celular_usuario'];


if(isset($nombre_usuario) && !empty($nombre_usuario) && isset($apellido_usuario) && !empty($apellido_usuario) && isset($dni_usuario) && !empty($dni_usuario) && isset($password_usuario) && !empty($password_usuario) && isset($telefono_usuario) && !empty($telefono_usuario) && isset($celular_usuario) && !empty($celular_usuario)){
	
	$usuario = new Usuario($nombre_usuario,$apellido_usuario,$dni_usuario,$password_usuario,$telefono_usuario,$celular_usuario);
	$usuario->registrar_usuario();

}else{
	echo "Ingrese los todos los campos";
}

 ?>
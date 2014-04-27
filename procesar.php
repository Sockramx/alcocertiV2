<?php 
session_start();

include("clases/conexion.php");

$conexion = new Conexion();
$conec = $conexion->conectar();

$usuario = $_POST['usuario'];
$password = $_POST['password'];
 

 /* consulta a la base de datos si el usuario y password estan registrados */
$sql = "SELECT * FROM Usuario WHERE nomb_Usuario='$usuario' AND pass_Usuario='$password'";
/* Guarda los resultados obtenidos en a variable rs */
$rs = mysql_query($sql,$conec);

/* verifica el resultado obtenido es uno */
if(mysql_num_rows($rs)==1){
	/* creamos la variable de sesion */
	$_SESSION['usuario'] = $_POST['usuario'];
	/* redireccionamos al panel de control */
	header('Location: panel_control.php');
}else{
	echo "errrrp";
}


/* todo ok */
 ?>
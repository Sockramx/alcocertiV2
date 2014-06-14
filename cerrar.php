<?php 
session_start();

include ("clases/conexion.php");

session_destroy();
$conexion=new Conexion();
$conexion->cerrar_conexion();
echo "has cerrado sesion ";

 ?>
<a href="index.php">Inicio</a>
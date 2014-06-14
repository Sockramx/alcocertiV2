<?php 

$nombre = $_POST["nombre_txt"];
$apellido = $_POST["apellido_txt"]; 
$correo = $_POST["correo_txt"];
$destino = "ventas@alcocerperu.com";
$asunto = $_POST["asunto_txt"];
$mensaje = $_POST["mensaje"];



$mensaje_envio = "

	<h4> ------- Mensaje enviado desde Alcocerti.com ------- </h4>
	
\r\n";
$mensaje_envio.= $mensaje."\r\n";
$mensaje_envio.= $nombre." ".$apellido."\r\n";


$cabeceras = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type: text/html; charset=iso-8859-1 \r\n";
$cabeceras .= "From: $correo \r\n";

if(mail($destino,$asunto,$mensaje_envio,$cabeceras)){
	$respuesta ="El mensaje ha sido enviado";
	echo $respuesta;
}else{
	$respuesta= "Ocurrio un error no se enviaron los datos";
	echo $respuesta;
}


 ?>
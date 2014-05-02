<?php 
include ("conexion.php");

class Usuario{
	var $nombre;
	var $apellido;
	var $dni;
	var $password;
	var $telefono;
	var $celular;

	function __construct($nombre,$apellido,$dni,$password,$telefono,$celular){

		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->dni = $dni;
		$this->password = $password;
		$this->telefono = $telefono;
		$this->celular = $celular; 
		
	}
	function registrar_usuario(){
	
		$conexion = new Conexion();
		$conec = $conexion->conectar();

		$sql = "INSERT INTO Usuario (id_Usuario,nomb_Usuario,ape_Usuario,dni_Usuario,pass_Usuario,tele_Usuario,celu_Usuario) VALUES (null,'$this->nombre','$this->apellido','$this->dni','$this->password','$this->telefono','$this->celular')";
		mysql_query($sql,$conec);

		header("Location: panel_control.php");

	}
	function obtener_usuario(){

		$conexion = new Conexion();
		$conec = $conexion->conectar();

		$sql = "SELECT id_Usuario FROM Usuario WHERE nomb_Usuario='$this->nombre'";
		$rs=mysql_query($sql,$conec);
		
		return $rs;
	}
	function actualizar_usuario(){

	}
	function borrar_usuario(){
		
	}

}
 ?>
<?php 
class Conexion{
	var $host;
	var $usuario;
	var $password;
	var $db;
	
	
	function __construct($host="localhost",$usuario="root",$password="toor",$db="alcocerti"){
		$this->host = $host;
		$this->usuario = $usuario;
		$this->password = $password;
		$this->db = $db;
	}
	function conectar(){
		
		$conec = mysql_connect($this->host,$this->usuario,$this->password) or die(mysql_error());
		mysql_select_db($this->db,$conec) or die(mysql_error());
		
		return $conec;
	}
}

 ?>
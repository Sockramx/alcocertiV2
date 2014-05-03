<?php 

session_start();

if(!isset($_SESSION['usuario'])){ 
	header('Location: index.php');
}

include ('clases/conexion.php');

$conexion = new Conexion();
$conec = $conexion->conectar();
 ?>

<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="css/panel_control.css"/>

	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/js_panel_control.js"></script>
	<title>Document</title>
</head>
<body>
	<header>
		<p>
		<a href="cerrar.php">cerrar session</a>
		</p>
	</header>
	
	<nav>
		<ul>
			<li id="opc_usuario">Usuarios</li>
			<li id="opc_producto">Productos</li>
			<li id="opc_categoria">Categorias</li>
		</ul>
	</nav>
	<div id="content">
		<section id="algo">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</section>
		<section id="usuario">
			<h2>Registrar Usuario</h2>
			<form action="procesar_usuario.php" method="POST">
				<table>
					<tr>
						<td>Nombre:</td>
						<td><input type="text" name="nombre_usuario"></td>
					</tr>
					<tr>
						<td>Apellido:</td>
						<td><input type="text" name="apellido_usuario"></td>
					</tr>
					<tr>
						<td>DNI:</td>
						<td><input type="text" name="dni_usuario"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password_usuario"></td>
					</tr>
					<tr>
						<td>Telefono:</td>
						<td><input type="text" name="telefono_usuario"></td>
					</tr>
					<tr>
						<td>Celular:</td>
						<td><input type="text" name="celular_usuario"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="registrar"></td>
					</tr>
				</table>
			</form>
		</section>
		<section id="producto">
			<h2>Registrar Producto</h2>
			<form action="procesar_producto.php" method="POST" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Nombre:</td>
						<td><input type="text" name="nombre_producto"></td>
					</tr>
					<tr>
						<td>Descripción:</td>
						<td><textarea name="descripcion_producto" cols="30" rows="10"></textarea></td>
					</tr>
					<tr>
						<td>Imagen:</td>
						<td><input type="file" name="imagen"></td>
					</tr>
					<tr>
						<td>Categoria</td>
						<td>
							<select name="categoria_producto">
								<?php 
									$sql = "SELECT * FROM Categoria ";
									$rs = mysql_query($sql,$conec);
									while($row=mysql_fetch_array($rs)){
										echo "<option>";
										echo $row['nomb_Categoria'];
										echo "</option>";
									}

								 ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Marca:</td>
						<td><input type="text" name="marca_producto"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Registrar"></td>
					</tr>
				</table>
			</form>
		</section>
		<section id="categoria">
			<h2>Registrar Categoria</h2>
			<form action="procesar_categoria.php" method="POST">
				<table>
					<tr>
						<td>Categoria</td>
						<td><input type="text" name="nombre_categoria"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="registrar"></td>
					</tr>
				</table>
			</form>
		</section>
	</div>
</body>
</html>
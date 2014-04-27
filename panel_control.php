<?php 

session_start();

if(!isset($_SESSION['usuario'])){ 
	header('Location: index.php');
}

 ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>
		<a href="cerrar.php">cerrar session</a>
	</p>
	<nav>
		<ul>
			<li>Usuarios</li>
			<li>Productos</li>
			<li>Categorias</li>
		</ul>
	</nav>
	<div id="content">
		<h2>Regostrar Usuario</h2>
		<section id="usuario">
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
			<form action="procesar_producto.php" method="POST">
				<table>
					<tr>
						<td>Nombre:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td>Descripción:</td>
						<td><textarea name="descripcion" id="" cols="30" rows="10"></textarea></td>
					</tr>
					<tr>
						<td>Imagen:</td>
						<td><input type="file"></td>
					</tr>
					<tr>
						<td>Categoria</td>
						<td>
							<select name="categoria" id="">
								<option value="Monitor">Monitor</option>
								<option value="Laptop">Laptop</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Marca:</td>
						<td><input type="text"></td>
						<!-- El campo marca falta crear en la base de datos de producto-->
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
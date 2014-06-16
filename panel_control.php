<?php 

session_start();

if(!isset($_SESSION['usuario'])){ 
	header('Location: index.php');
}

include ('clases/categoria.php');



 ?>

<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="css/panel_control.css"/>

	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/js_panel_control.js"></script>
	<title>Panel de control</title>
</head>
<body>
	<header>
		<li><a class="btn-salir"href="cerrar.php">Salir</a></li>
	</header>
	
	<nav>
		<ul>
			<li id="opc_usuario">Registrar Usuarios</li>
			<li id="opc_producto">Registrar Productos</li>
			<li id="opc_categoria">Registrar Categorias</li>
		</ul>
	</nav>
	<div id="content">
		<section id="algo">
			<img src="imagenes/logo/logo-principal.png">
		</section>
		<section id="usuario">
			<h2>Registrar Usuario</h2>
			<form action="procesar_usuario.php" method="POST">
						<label>Nombre:</label><br>
						<input type="text" name="nombre_usuario"><br>
					
						<label>Apellido:</label><br>
						<input type="text" name="apellido_usuario"><br>
					
						<label>DNI:</label><br>
						<input type="text" name="dni_usuario"><br>
				
						<label>Password:</label><br>
						<input type="password" name="password_usuario"><br>
					
						<label>Telefono:</label><br>
						<input type="text" name="telefono_usuario"><br>
					
						<label>Celular:</label><br>
						<input type="text" name="celular_usuario"><br>
						<input class="btn-form" type="submit" value="registrar"><br>
				
			</form>
		</section>
		<section id="producto">
			<h2>Registrar Producto</h2>
			<form action="procesar_producto.php" method="POST" enctype="multipart/form-data">
				<label>Nombre:</label>
					<input type="text" name="nombre_producto"><br>
					<label>Descripción:</label><br>
					<textarea name="descripcion_producto" cols="30" rows="10"></textarea><br>
					<label>Imagen:</label>
					<input type="file" name="imagen"><br>
					<label>Categoria:</label>
					<select name="categoria_producto"><br>
						<?php 
							$categoria = new Categoria();
							$rs=$categoria->obtener_categoria();
			
							while($row= mysql_fetch_array($rs)){
								echo "<option>";
								echo $row['nomb_Categoria'];
								echo "</option>";
							}
							?>
					</select>
					<br>
					<label>Marca:</label>
					<input type="text" name="marca_producto"><br>
					<input class="btn-form" type="submit" value="Registrar">
					<input class="btn-form" type="reset" value="Nuevo"><br>	
			</form>
		</section>
		<section id="categoria">
			<h2>Registrar Categoria</h2>
			<form action="procesar_categoria.php" method="POST">
				<label>Categoria</label>
				<input type="text" name="nombre_categoria"><br>
				<input class="btn-form" type="submit" value="registrar">
			</form>
		</section>
	</div>
	<footer>
		<h4>AlcocerTi</h4>
	</footer>	
</body>
</html>
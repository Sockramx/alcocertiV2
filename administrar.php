<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/admin.css"/>
	<title>Document</title>
</head>
<body>
	<div>
		<form action="procesar.php" method="POST">
			<table>
				<tr>
					<td>Usuario:</td>
					<td><input type="text" name="usuario"></td>
				</tr>
				<tr> 
					<td>Password:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="ENVIAR"></td>
				</tr>
			</table>
		</form>
	</div>
	
</body>
</html>
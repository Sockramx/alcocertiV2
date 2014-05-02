<?php 

include ('clases/conexion.php');

$conexion = new Conexion();
$conec = $conexion->conectar();
 ?>

<section id="lista_categorias">
	<ul>
		<?php 
			$sql = "SELECT * FROM Categoria ";
			$rs = mysql_query($sql,$conec);
			while($row=mysql_fetch_array($rs)){
				echo "<li>";
				echo $row['nomb_Categoria'];
				echo "</li>";
			}
		 ?>
	</ul>
</section>
<section id="lista_productos">
	<ul>
		<?php 
			$sql = "SELECT * FROM Producto ";
			$rs = mysql_query($sql,$conec);
			while($row=mysql_fetch_array($rs)){
				echo "<li>";
				echo $row['nomb_Producto'];
				echo "</li>";
			}
		 ?>
	</ul>
</section>
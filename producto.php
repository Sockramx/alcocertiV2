<?php 

include ('clases/producto.php');
include ('clases/categoria.php');

$producto = new Producto();
$categoria = new Categoria();

 ?>

<section id="lista_categorias">
	<ul>
		<?php 
			$rs=$categoria->obtener_categoria();
		
			while($row=mysql_fetch_array($rs)){
				echo "<li>";
				echo "<a>";
				echo $row['nomb_Categoria'];
				echo "</a>";
				echo "</li>";
			}
		 ?>
	</ul>
</section>
<section id="content_productos">
	<article id="lista_productos">
		<ul>
			<?php 
				$rs=$producto->obtener_producto();
				
				while($row=mysql_fetch_array($rs)){
					echo "<li>";
					$imagen=$row['img_Producto'];
					echo $row['nomb_Producto'];
					echo "<br>";
					echo "<img src='$imagen'>";
					echo "</li>";
				}
			 ?>

		</ul>
	</article>
</section>

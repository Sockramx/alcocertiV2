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
				$id_Categoria = $row['id_Categoria'];
				$nomb_Categoria = $row['nomb_Categoria'];

				echo "<li id='$id_Categoria'>";
				echo "<a href='#content_productos'>";
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
				
				$rs=$producto->obtener_producto($id_Categoria);
				
				while($row=mysql_fetch_array($rs)){
					$imagen=$row['img_Producto'];
					echo "<li>";
					echo "<img src='$imagen'>";
					echo "<br>";
					echo $row['nomb_Producto'];
					echo "</li>";
				}
			 ?>

		</ul>
	</article>
</section>

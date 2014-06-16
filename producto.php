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

				echo "<li >";
				echo "<a data-id='$id_Categoria' class='categoria' href='#lista_productos'>";
				echo $row['nomb_Categoria'];
				echo "</a>";
				echo "</li>";
			} 	 	
			/*Aqui cargo las categorias mo estacod*/
		 ?>
	</ul>
</section>
<section id="content_productos">
	<article id="lista_productos">
		<ul>
			<p id="logo2">
				<figure>
					<img src="imagenes/logo/logo-principal.png" alt="">
				</figure>

			</p>
			<?php 
			/*
				
				$rs=$producto->obtener_producto($id_Categoria);
				
				while($row=mysql_fetch_array($rs)){
					$imagen=$row['img_Producto'];
					echo "<li>";
					echo "<img src='$imagen'>";
					echo "<br>";
					echo $row['nomb_Producto'];
					echo "</li>";
				}*/
			 ?>

		</ul>
	</article>
</section>

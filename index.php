<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="css/base.css"/>
	<link rel="stylesheet" type="text/css" href="css/producto.css"/>
	<link rel="stylesheet" type="text/css" href="css/servicio.css"/>
	<link rel="stylesheet" href="css/mediaqueries.css"/>
	
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/handlebars-1.0.0-rc.4.js"></script>
	<script type="text/javascript">
	    $.getter = function ( params ) {
	            params.params = params.params || '';
	     
	            $.get(params.url + params.params)
	            .success(function(request){
	                    if ($.isFunction(params.success)) {params.success(request);}
	                    if ($.isFunction(params.complete)) {params.complete(request);}
	            })
	            .error(function(){
	                    if ( $.isFunction(callNotification) ) {callNotification({ 'type': 'error', 'msg' : params.warning})}
	                    if ($.isFunction(params.error)) {params.error();}
	            });
	    }
	</script>
	<script src="js/js.js"></script>
	<title>Alcerti.com | Mayorista en Tecnología</title>
</head>
<body>
	<header>
		<figure id="logo_alcocerti">
			<img src="imagenes/logo/logo-principal.png" alt="logoalcocer">
		</figure>
		<div id="slogan">
			<h1>
				Venta de accesrios y suministros de computo en general.
			</h1>
		</div>
	</header>

	<nav>
		<ul id="menu_principal">
			<li><a href="index.php">Inicio</a></li>
			<li id="producto">Productos</li>
			<li id="servicios">Servicios</li>
			<li id="contacto">Contacto</li>
			<li id="locales">Locales</li>
		</ul>
		<ul id="redes_sociales">
			<li class="btn-facebook btn"><a href="https://www.facebook.com/acocer.ti.7" target="_blank">facebook</a></li>
			<li class="btn-twitter btn"><a href="https://twitter.com/alcocerti" target="_blank">twitter</a></li>
			<li class="btn-google btn"><a href="https://plus.google.com/u/0/102461840679390247422/posts" target="_blank">google+</a></li>
		</ul>
	</nav>
	<div id="content">
		<!-- contenedor principal -->
		<div id="fondo">
			
			<div id="promociones">
				<ul>
					<li>
						<figure>
							<img src="imagenes/promociones/promo1.jpg" alt="">
				 		</figure>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus labore molestiae facere error quaerat! Dolores, delectus quaerat voluptatum ipsum omnis iste labore obcaecati illo nostrum tempora illum placeat veritatis quidem!
						</p>
					</li>
					<li>
						<figure>
							<img src="imagenes/promociones/promo1.jpg" alt="">
						</figure>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus labore molestiae facere error quaerat! Dolores, delectus quaerat voluptatum ipsum omnis iste labore obcaecati illo nostrum tempora illum placeat veritatis quidem!
						</p>
					</li>
				</ul>
			</div>
			<section> 
				<h4>Nuestro equipo de trabajo</h4>
				<article>
					<ul>
						<li>
							<img src="imagenes/iconos/prod.jpg">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								
							</p>	
						</li>
						<li>
							<img src="imagenes/iconos/prod.jpg">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								
							</p>	
						</li>
						<li>
							<img src="imagenes/iconos/prod.jpg">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								
							</p>	
						</li>
						<li>
							<img src="imagenes/iconos/prod.jpg">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								
							</p>	
						</li>
					</ul>
				</article>
			</section>
		</div>
	</div>	
	<footer>
		<h3>Alcocerti</h3>
	</footer>
</body>
</html>





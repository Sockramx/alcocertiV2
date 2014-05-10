<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/base.css"/>
	<link rel="stylesheet" type="text/css" href="css/producto.css"/>
	<link rel="stylesheet" href="css/mediaqueries.css"/>
	
	<script src="js/jquery-1.11.0.min.js"></script>
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

	<!--
	<header>
		<figure id="logo_alcocerti">
			<img src="" alt="logoalcocer">
		</figure>
		<div id="slogan">
			<p>
				Venta de accesrios y suministros de computo en general.
			</p>
		</div>
	</header>
-->
	<nav>
		<ul id="menu_principal">
			<li><a href="index.php">Inicio</a></li>
			<li id="producto">Productos</li>
			<li>Servicios</li>
			<li>Contacto</li>
			<li>Locales</li>
		</ul>
		<ul id="redes_sociales">
			<li>Twitter</li>
			<li>Facebook</li>
			<li>google+</li>
		</ul>
	</nav>
	<div id="content">
		<!-- contenedor principal -->
		<div id="fondo">
			<section>
				<h1>Lo ultimo en Tecnología</h1>
				<figure>
					<img src="" alt="">
				</figure>
				<article>
					<ul>
						<li>i</li>
						<li>d</li>
						<li>w</li>
						<li>i</li>
					</ul>
				</article>
			</section>
		</div>
	</div>	
	<footer>
		<h4>AlcocerTi</h4>

	</footer>
</body>
</html>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="css/base.css"/>
	<link rel="stylesheet" type="text/css" href="css/producto.css"/>
	<link rel="stylesheet" type="text/css" href="css/servicio.css"/>
	<link rel="stylesheet" type="text/css" href="css/contacto.css"/>
	<link rel="stylesheet" href="css/layout.css"/>
	<link rel="stylesheet" href="css/style1.css"/>
	<link rel="stylesheet" href="css/mediaqueries.css"/>
	
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/handlebars-1.0.0-rc.4.js"></script>
	<script src="js/jquery.easing.js"></script>
	<script src="js/script.js"></script>
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




	    	 $(document).ready( function(){	
			// buttons for next and previous item						 
			var buttons = { previous:$('#jslidernews1 .button-previous') ,
							next:$('#jslidernews1 .button-next') };			
			 $('#jslidernews1').lofJSidernews( { interval : 4000,
												direction		: 'opacitys',	
												easing			: 'easeInOutExpo',
												duration		: 900,
												auto		 	: true,
												maxItemDisplay  : 4,
												navPosition     : 'horizontal', // horizontal
												navigatorHeight : 32,
												navigatorWidth  : 80,
												mainWidth		: 980,
												buttons			: buttons } );	
		});
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
				Venta de accesorios y suministros de cómputo en general.
			</h1>
		</div>
	</header>

	<nav>
		<ul id="menu_principal">
			<li><a href="index.php">Inicio</a></li>
			<li id="producto">Productos</li>
			<li id="servicios">Servicios</li>
			<li id="contacto">Contacto</li>
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
				<div id="container">
					
				


					<!------------------------------------- THE CONTENT ------------------------------------------------->
					<div id="jslidernews1" class="lof-slidecontent" style="width:980px; height:340px;">
						<div class="preload"><div></div></div>
					    		 <!-- MAIN CONTENT --> 
					              <div class="main-slider-content" style="width:100%; height:340px;">
					                <ul class="sliders-wrap-inner">
					                    <li>
					                        <img src="imagenes/images/basepromo0.jpg" title="Newsflash 2" >           
					                          <div class="slider-description">
					                            <div class="slider-meta"><a target="_parent" title="Newsflash 1" href="#Category-1">/ PC Compatibles/</a> <i>Todas las marcas</i></div>
					                            <h4>Oferta</h4>
					                            <p>Venta de computadoras de acuerdo a la necesidad del trabajo del cliente
					                            <a class="readmore" href="producto.html">mas información </a>
					                            </p>
					                         </div>
					                    </li>  
					                  </ul>  	
					              </div>
					 		   <!-- END MAIN CONTENT --> 
					           <!-- NAVIGATOR -->
					           	<div class="navigator-content">
					                  <div class="button-next">Next</div>
					                  <div class="navigator-wrapper">
					                        <ul class="navigator-wrap-inner">
					                           <li><img src="imagenes/images/thumbs/min-basepromo0.jpg" /></li>  		
					                        </ul>
					                  </div>
					                  <div  class="button-previous">Previous</div>
					            </div> 
					          <!----------------- END OF NAVIGATOR --------------------->
					          <!-- BUTTON PLAY-STOP -->
					          <div class="button-control"><span></span></div>
					           <!-- END OF BUTTON PLAY-STOP -->        
					</div> 
				</div>



			</div>
			<section> 
				<h4>Nuestras Ofertas</h4>
				<article>
					<ul>
						<li>
							<img src="imagenes/imgweb/epson_l210.jpg">
							<p>
								<strong>Impresora Multifuncional</strong><br>
								<strong>Modelo: L210</strong><br>
								<strong>Marca: EPSON</strong>
							</p>	
						</li>
						<li>
							<img src="imagenes/imgweb/epson_l350.jpg">
							<p>
								<strong>Impresora Multifuncional</strong><br>
								<strong>Modelo: L350</strong><br>
								<strong>Marca: EPSON</strong>
							</p>		
						</li>
						<li>
							<img src="imagenes/imgweb/monitor_lg.jpg">
							<p>
								<strong>Monitor LED</strong><br>
								<strong>Modelo: M35A-B</strong><br>
								<strong>Marca: LG</strong>			
							</p>	
						</li>
						<li>
							<img src="imagenes/imgweb/sidewinderx4.jpg">
							<p>
								<strong>Teclado Gamer</strong><br>
								<strong>Modelo: Sidewinder X4</strong><br>
								<strong>Marca: Microsoft</strong>
								
							</p>	
						</li>
					</ul>
				</article>
			</section>
		</div>
	</div>	
	<footer>
		<ul>
			<li>
				<img src="imagenes/imgweb/epson.jpg" width="320" height="100">
			</li>
			<li>
				<img src="imagenes/imgweb/intel.jpg" width="320" height="100">
			</li>
			<li>
				<img src="imagenes/imgweb/microsoft.png" width="320" height="100">
			</li>
			<li>
				<img src="imagenes/imgweb/toshiba.gif" width="320" height="100">
			</li>
		</ul>
	</footer>
</body>
</html>





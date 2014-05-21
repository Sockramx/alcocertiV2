$(document).ready(function(){
	$("#producto").click(function(){
		$("#content").load("producto.php",function(){
			

			$('.categoria').on("click", function(){
				
				var $this = $(this);
				var id_categoria = $this.data('id');
				console.log(id_categoria);
				$.getter({
					'url' : 'json.php',
					'params' : '?categoria=' + $this.data('id'),
					'success' : function(response) {
							$("#content_productos #lista_productos ul")
								.html(Handlebars
									.compile('\
											{{#objects}}\
												<li>\
													<img src={{ imagen }}>\
													<h4>{{ nombre }}</h4>\
												</li>\
											{{else}}\
											<div>\
												<li>\
													<p>\
													Lo sentimos no hay productos en esta categoria.\
													<p>\
												</li>\
											{{/objects}}\
									')(eval('(' + response + ')'))	
								);

					},
					'error' : function(){
						alert('Lo sentimos no pse pudo completar la operacion');
					}
				});
				return false;
			});
			
		});
	});	
});
/*con esto cargo productos.php en el contenedor principal */
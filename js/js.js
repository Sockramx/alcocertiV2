$(document).ready(function(){
	$("#producto").click(function(){
		$("#content").load("producto.php",function(){
			/*$("#content_productos").load("promocion_producto.php");*/
			$('.categoria').on("click", function(){
/*
				$.ajax({
					datatype: 'json'
					url: ''

				});*/
				
				var $this = $(this);
				var id_categoria = $this.data('id');
				console.log(id_categoria);
				$.getter({
					'url' : 'json.php',
					'params' : '?categoria=' + $this.data('id'),
					'success' : function(response) {
						
							
							$("#content_productos #lista_productos").html(response);
								
					
							
							


												/*
						var $c = $("#content_productos #lista_productos")
						$c.html( html + response)
						alert(response);*/
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
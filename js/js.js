$(document).ready(function(){
	$("#producto").click(function(){
		$("#content").load("producto.php",function(){
			$("#content_productos").load("promocion_producto.php");
		});
	});	
});

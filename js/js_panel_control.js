$(document).ready(function(){
	$("#usuario").hide();
	$("#producto").hide();
	$("#categoria").hide();

	$("#opc_usuario").click(function(){
		$("#usuario").show();
		$("#producto").hide();
		$("#categoria").hide();	
	});
	$("#opc_producto").click(function(){
		$("#producto").show()
		$("#usuario").hide();
		$("#categoria").hide();
	});
	$("#opc_categoria").click(function(){
		$("#categoria").show();
		$("#producto").hide();
		$("#usuario").hide();
	});
});
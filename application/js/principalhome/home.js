$(document).on("ready", function(){

	$("#seguir_leyendo").click(seguir_leyendo);
});

function seguir_leyendo(){
	$("#inf").foundation('reveal', 'open');
}
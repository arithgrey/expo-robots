$(document).on("ready", function(){

	$("body").ready(listalimentacion);
	$("body").ready(iniciomenu);

});


function listalimentacion(){

	url = $(".now").val()+ "index.php/api/targetasbasecontrollerrest/listtargetasbase/format/json";	
	$.get(url).done(function(data){

		alert(data);

	}).fail(function(){

		alert("error");		
	});
}



function listapotencia(){

	url = $(".now").val()+ "index.php/api/targetasbasecontrollerrest/listpotencia/format/json";	
	$.get(url).done(function(data){

		alert(data);

	}).fail(function(){

		alert("error");		
	});
}



function listasensores(){

	url = $(".now").val()+ "index.php/api/targetasbasecontrollerrest/listsensores/format/json";	
	$.get(url).done(function(data){

		alert(data);

	}).fail(function(){

		alert("error");		
	});
}


function listascontrol(){

	url = $(".now").val()+ "index.php/api/targetasbasecontrollerrest/listcontrol/format/json";	
	$.get(url).done(function(data){

		alert(data);

	}).fail(function(){

		alert("error");		
	});
}
function listasdiseñomodular(){

	url = $(".now").val()+ "index.php/api/targetasbasecontrollerrest/listasdmodular/format/json";	
	$.get(url).done(function(data){

		alert(data);

	}).fail(function(){

		alert("error");		
	});
}

function iniciomenu(){
			$(".alimentacion_section").show();
			 $(".potencia_section").hide();
			 $(".sensores_section").hide();
			 $(".control_section").hide();
			 $(".diseñomodular_section").hide();
			 
}
function section(e){
	switch (e){
		case "alimentacion":
			 $(".alimentacion").attr("class" , "alimentacion active");			
			 $(".potencia").attr("class" , "potencia");
			 $(".sensores").attr("class" , "sensores");						
			 $(".control").attr("class" , "control");			 
			 $(".diseñomodular").attr("class" , "diseñomodular");			

			 $(".alimentacion_section").show();
			 $(".potencia_section").hide();
			 $(".sensores_section").hide();
			 $(".control_section").hide();
			 $(".diseñomodular_section").hide();
			 



			 listalimentacion();
			break;
		case "potencia":	

			 $(".potencia").attr("class" , "potencia active");						
			 $(".alimentacion").attr("class" , "alimentacion");						 
			 $(".sensores").attr("class" , "sensores");						
			 $(".control").attr("class" , "control");			 
			 $(".diseñomodular").attr("class" , "diseñomodular");					
			 listapotencia();

			 $(".alimentacion_section").hide();
			 $(".potencia_section").show();
			 $(".sensores_section").hide();
			 $(".control_section").hide();
			 $(".diseñomodular_section").hide();

			break;
		case "sensores":	
			$(".sensores").attr("class" , "sensores active");						
			$(".potencia").attr("class" , "potencia");						
			$(".alimentacion").attr("class" , "alimentacion");						 			
			$(".control").attr("class" , "control");			 
			$(".diseñomodular").attr("class" , "diseñomodular");					

			listasensores();
			
			$(".alimentacion_section").hide();
			$(".potencia_section").hide();
			$(".sensores_section").show();
			$(".control_section").hide();
			$(".diseñomodular_section").hide();


			break;
		case "control":			

			$(".control").attr("class" , "control active");			
			$(".alimentacion").attr("class" , "alimentacion");						 
			$(".sensores").attr("class" , "sensores");									
			$(".diseñomodular").attr("class" , "diseñomodular");					
			$(".potencia").attr("class" , "potencia");						
			
			listascontrol();
			 $(".alimentacion_section").hide();
			 $(".potencia_section").hide();
			 $(".sensores_section").hide();
			 $(".control_section").show();
			 $(".diseñomodular_section").hide();
			break;

		case "diseño_modular":
			$(".diseñomodular").attr("class" , "diseñomodular active");							
			$(".alimentacion").attr("class" , "alimentacion");						 
			$(".sensores").attr("class" , "sensores");						
			$(".control").attr("class" , "control");			 
			
			listasdiseñomodular();
			 $(".alimentacion_section").hide();
			 $(".potencia_section").hide();
			 $(".sensores_section").hide();
			 $(".control_section").hide();
			 $(".diseñomodular_section").show();


			break;
		default: 			
	}
}

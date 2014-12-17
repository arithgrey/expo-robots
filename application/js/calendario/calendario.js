$(document).on("ready", function(){

    $("#calendario_general td a").click(getday);
    getzonasbytipo(""); 
	listmensajes();
	loadtiposzonas();

	$("#registrointemporalbtn").click(registrointemporal);

	$("#mensaje_camp").show();
	$("#mensaje_camp").attr("class","active mensaje_camp");

	

});

var fechas_list = [];
var b = 0; 
function getday(evento){
        dia = evento.target.text;
        
        if($(evento.delegateTarget).attr("class")=="cal_dia_seleccionado")
            $(evento.delegateTarget).attr("class","");

        else
            $(evento.delegateTarget).attr("class","cal_dia_seleccionado");
        fechas_list[b]= dia;
        $('#txt_dias_sel').attr("value",$('.cal_dia_seleccionado').length);
        return false;
}


function loadtiposzonas(){

    url= $(".now").val() +  "index.php/api/zonasrest/loadtiposzonas/format/json";
    $.get(url).done(function(data){


        reporte="";

        for (a = 0; a < data.length; a++) {
            
            reporte+="<option value='"+ data[a].idTipo_zona+ "'>"+ data[a].nombre+"</option>";

        }
        
        $("#tipozona").append(reporte);


    }).fail(function(){

        alert("Error");
    });

}

function getzonasbytipo(e){

	tipozona = e.value;
	if (e == "") {
		tipozona = "all";  
	}

	url = $(".now").val()+ "index.php/api/zonasrest/getzonasbytipo/format/json"; 

	$.get(url , {"tipozona" : tipozona}).done(function(data){

		r="";
		for (var a = 0; a < data.length; a++) {
					
			r += "<option value ='"+ data[a].idzona +"'>"+ data[a].zonanombre +"</option>";
		}
		$("#zona").html(r);

	}).fail(function(){
		alert(error);		
	});


}


function registrointemporal(){

	url = $(".now").val()+ "index.php/api/mensajerest/registrointemporalmsjfb/format/json"; 
	$.post(url , $("#mensajefbform").serialize()  )
		.done(function(data){
			
			if (data == 1) {

				$("#p_repotemporal").html("Mensaje de Facebook Registrado con éxito.!");
				$("#descripcion").val("");


				listmensajes(); 	
			}else{
				$("#p_repotemporal").html("Falla en el registro");	
			}						

	}).fail(function(){
			alert("fail");

	});	

	return false;
}

function listmensajes(){

	url= $(".now").val() +  "index.php/api/mensajerest/listmensajebycuenta/format/json";	
	$.get(url , $("#mensajefbform").serialize() )
		.done(function(data){

		repo ="<table><tr id='title_table_msj' ><p><td>Identificador</td> <td>Descripcion</td> <td>URL Mensaje publicación </td> <td>Fecha de Registro</td><td>Zona</td><td>Detalles</td></p> </tr>";

		for (var a = 0; a < data.length; a++) {
			repo+="<tr><td>"+data[a].idmensaje+"</td>";				
			repo+="<td>"+data[a].mensajedescripcion+"</td>";				
			repo+="<td>"+data[a].urlformada+"</td>";				
			repo+="<td>"+data[a].fecharegistro+"</td>";										
			repo+="<td>"+data[a].zonanombre+"</td>";	
			repo+="<td class='config_msj_id' id='"+ data[a].idmensaje +"' ><a id='"+ data[a].idmensaje +"' >Configuración</a></td></tr>";									
			
		}
		repo+="</table>";
		
		$("#listmensajes").html(repo);

		$(".config_msj_id").click(configmensajeacct);
		

	}).fail(function(){
		alert("Fail ajax");
	});

}
function configmensajeacct(evt ){

		idmensaje = evt.target.id;
		campid  = $("#campid").val();
		url = $(".now").val()+"index.php/api/mensajerest/loaddatamensajebyid/format/json";	

		$.get(url , {"idmensaje": idmensaje , "campid" : campid} ).done(function(data){

			descripcion = data[0].descripcion;
			urlmensaje =  data[0].urlformada;
			fecharegistro  = data[0].fecharegistro;
			status = data[0].status;

			$("#descripcionedit").val(descripcion);
			$("#urlmensajeedit").html(urlmensaje);
			$("#fecharegistro").html(fecharegistro);
			$('#statusmsjedit > option[value="'+status+'"]').attr('selected', 'selected');


		}).fail(function(){

			alert("Error");
		});

		$("#dlg_configmensaje").foundation('reveal','open');		

		$("#idmensajeedit").val(idmensaje);

		$("#updatemensajebtn").click(function(){

			//alert($("#updatemensaje").serialize() ) ;
			url = $(".now").val()+"index.php/api/mensajerest/updatemensajebyidandaccount/format/json";	

			$.post(url , $("#updatemensaje").serialize())
			.done(function(data){
					

				listmensajes();
				$("#dlg_configmensaje").foundation('reveal','close');		

			}).fail(function(){
				alert("Error");
			});


		});

		$("#delmensajebtn").click(function(){


			//alert($("#updatemensaje").serialize() ) ;
			url = $(".now").val()+"index.php/api/mensajerest/delmensajebyid/format/json";	

			$.post(url , {"idmensaje" : idmensaje})
			.done(function(data){
				
					
				if (data == "1") {

					$("#repodel").html("Mensaje eliminado.!");
					$("#dlg_configmensaje").foundation('reveal','close');		
					listmensajes();
	
				}else{
					$("#repodel").html("Falla al intentar eliminar mensaje");
					$("#dlg_configmensaje").foundation('reveal','close');		


				}
				
			}).fail(function(){
				alert("Error");
			});


		});





}


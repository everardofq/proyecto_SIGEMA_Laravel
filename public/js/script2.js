$(document).ready(function(){
	carga(); 
});

function carga()
{
	var tablaDatos = $("#datos");
	var route = "/egresados";

	$("#datos").empty();
	$.get(route,function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.genre+"</td><td><button class='btn btn-primary' onClick='mostrar(this)' value="+value.id+" data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+">Eliminar</button></td> </tr>");
		});
	});
}

function mostrar(btn){
	console.log(btn.value);
	var route = "/egresado/"+btn.value+"/edit";
	$.get(route, function(res){
		$("#genre").val(res.genre);
		$("#id").val(res.id);
	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#genre").val();
	var route = "http://localhost:8000/egresado/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {genre: dato},

		success: function(){
			carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});

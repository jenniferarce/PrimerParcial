function GuardarVoto()
{
		var id=$("#id").val();
		var dni=$("#dni").val();
		var provincia=$("#provincia").val();
		var candidato=$("#candidato").val();
		var sexo=$("#sexo").val();

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarVoto",
			id:id,
			dni:dni,
			provincia:provincia,
			candidato:candidato,
			sexo:sexo	
		}
	});
	funcionAjax.done(function(retorno){
		mostrarvoto();
		$("#informe").html("cantidad de agregados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function BorrarVoto(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarVoto",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		mostrarvoto();
		$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function EditarVoto(idParametro)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerVotosId",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		var voto =JSON.parse(retorno);	
		$("#id").val(voto.id);
		$("#dni").val(voto.dni)
		$("#provincia").val(voto.provincia);
		$("#candidato").val(voto.candidato);
		$("#sexo").val(voto.sexo);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
	votacion();
}


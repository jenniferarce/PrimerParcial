function GuardarVoto()
{
		var id=$("#id").val();
		var dni=$("#dni").val();
		var provincia=$("#provincia").val();
		var localidad=$("#localidad").val();
		var direccion=$("#direccion").val();
		var candidato=$("#candidato").val();
		var sexo=$("input[name='sexo']:checked").val();

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarVoto",
			id:id,
			dni:dni,
			provincia:provincia,
			localidad:localidad,
			direccion:direccion,
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
		alert(retorno);	
		$("#id").val(voto.id);
		$("#dni").val(voto.dni);
		$("#provincia").val(voto.provincia);
		$("#candidato").val(voto.candidato);
		$("#sexo").val(voto.sexo);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);
		alert("error");		
	});	
	votacion();
}


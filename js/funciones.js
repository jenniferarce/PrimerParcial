function mostrarlogin()
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"mostrarlogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		//$("#informe").html("Correcto login!!!");	
	});
	funcionAjax.fail(function(retorno){
		//$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);
	});
}
function votacion()
{

	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"votacion"}
	});

	funcionAjax.done(function(retorno){

		$("#principal").html(retorno);
		//$("#informe").html("a votar!!!");	
	});
	funcionAjax.fail(function(retorno){
		//$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	//deslogear();
}

function mostrarvoto()
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"mostrarvoto"}
	});

	funcionAjax.done(function(retorno){

		$("#principal").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		$("#informe").html(retorno.responseText);	
	});

	

}

function validarLogin()
{
		var varUsuario=$("#dni").val();
		var recordar=$("#recordarme").is(':checked');

	var funcionAjax=$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			recordarme:recordar,
			usuario:varUsuario}
		});
	funcionAjax.done(function(retorno){
		if(retorno="No-esta"){
			mostrarlogin();
			$("#usuario").html(retorno);
		}
		else{}
	});
	funcionAjax.fail(function(retorno){

	});
}

function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/logout.php",
		type:"post",	
	});
	funcionAjax.done(function(retorno){
			MostarBotones();
			mostrarlogin();
			$("#usuario").val("Sin usuario.");
			$("#BotonLogin").html("Login<br>-Sesión-");
			$("#BotonLogin").removeClass("btn-danger");
			$("#BotonLogin").addClass("btn-primary");
			
	});	
}
function MostarBotones()
{		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarBotones"}
	});
	funcionAjax.done(function(retorno){
		//$("#botonesABM").html(retorno);
		//$("#informe").html("Correcto BOTONES!!!");	
	});
}
/*function contarVotos()
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"contarVotos",
			cont:valor}
	});

	funcionAjax.done(function(retorno){

		$("#principal").html(retorno);
		$("#informe").html("Votos: "+ retorno);	
	});
	funcionAjax.fail(function(retorno){
		$("#informe").html(retorno.responseText);	
	});

}*/
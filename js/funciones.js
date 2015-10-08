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
}

function mostrarvoto()
{

}


function validarLogin()
{
		var varUsuario=$("#dni").val();
		//var varClave=$("#clave").val();
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
			//MostarLogin();
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
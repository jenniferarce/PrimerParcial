<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/voto.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'mostrarlogin':
			include("partes/formIngreso.php");
		break;
	case 'votacion':
			include("partes/formVotar.php");
		break;
	case 'mostrarvoto':
			include("partes/formListado.php");
		break;
	case 'BorrarVoto':
			$voto = new voto();
			$voto->id=$_POST['id'];
			$cantidad=$voto->BorrarVoto();
			echo $cantidad;
	break;
	case 'GuardarVoto':
			$voto = new voto();
			$voto->id=$_POST['id'];
			$voto->dni=$_POST['dni'];
			$voto->provincia=$_POST['provincia'];
			$voto->candidato=$_POST['candidato'];
			$voto->sexo=$_POST['sexo'];
			$cantidad=$voto->GuardarVoto();
			echo $cantidad;
	break;
	case 'TraerVotos':
			//$voto = voto::TraerUnVoto($_POST['id']);	
			$voto=voto::TraerVotos();	
			echo json_encode($voto) ;

	break;
	/*case 'contarVotos':
			$voto = new voto();
			$voto->cont=$_POST['cont'];
			document.cookie=cont;
			//$cantidad=$voto->BorrarVoto();
			echo $cantidad;
	break;*/
	default:
		# code...
		break;
}

 ?>
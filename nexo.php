<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/voto.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'mostrarlogin':
			include("partes/login.php");
		break;
	case 'votacion':
			include("partes/formVotar.php");
		break;
	case 'mostrarvoto':
			include("partes/formListado.php");
		break;
	default:
		# code...
		break;
}

 ?>
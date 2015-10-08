<?php 
$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'mostrarlogin':
			include("partes/login.php");
		break;
	case 'mostrarvoto':
			include("");
		break;
	default:
		# code...
		break;
}

 ?>
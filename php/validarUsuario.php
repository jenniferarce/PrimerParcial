<?php 
session_start();
$usuario=$_POST['usuario'];
$recordar=$_POST['recordarme'];

$retorno;
if($usuario>=1000000 && $usuario<=99999999)
//if(usuario::validarusuario($_POST['usuario'],$_POST['clave'])
//if($_POST['usuario']=="jenn" && $_POST['clave']=="1234")
{

	/*if($recordar=="true")
	{
		setcookie("registro",$usuario,  time()+36000 , '/');
		
	}else
	{
		setcookie("registro",$usuario,  time()-36000 , '/');
		
	}*/
	$_SESSION['registrado']=$usuario;
	$retorno=$usuario;
}else
{
		$retorno= "No-esta";
}
echo $retorno;
?>
<?php
class voto
{
	public $id;
	public $dni;
	public $sexo;
	public $candidato;

	public static function insertarVoto($d,$s,$c)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("CALL insertarVoto('$d','$s','$c');");
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}
	
}


?>
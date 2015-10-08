<?php
class voto
{
	public $id;
	public $dni;
	public $candidato;
	public $sexo;

	public static function insertarVoto($dni,$candidato,$sexo)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("CALL insertarVoto(:dni,:candidato,:sexo );");
		$consulta->bindvalue(':dni',$dni,PDO::PARAM_STR);
		$consulta->bindvalue(':candidato',$candidato,PDO::PARAM_STR);
		$consulta->bindvalue(':sexo',$sexo,PDO::PARAM_STR);
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

	public function validarDni($dni)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * from votos where dni=:dni;");
		$consulta->bindvalue(':dni',$dni,PDO::PARAM_STR);
		$consulta->execute();
		$buscado=$consulta->fetchObject('voto');
		return $buscado;
	}
	
}


?>
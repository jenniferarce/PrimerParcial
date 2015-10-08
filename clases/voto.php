<?php
class voto
{
	public $id;
	public $dni;
	public $provincia;
	public $candidato;
	public $sexo;
	public $cont;

	 public function InsertarVoto()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into votos (dni,provincia,candidato,sexo)values(:dni,:provincia,:candidato,:sexo)");
				$consulta->bindvalue(':dni',$dni,PDO::PARAM_INT);
				$consulta->bindValue(':provincia',$this->provincia, PDO::PARAM_STR);
				$consulta->bindValue(':candidato', $this->candidato, PDO::PARAM_STR);
				$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }
	 	public function BorrarVoto()
	 {
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("DELETE from votos WHERE id=:id");	
				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();
	 } 
	 public function ModificarVoto()
	 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE votos set dni=:dni,provincia=:provincia,candidato=:candidato, sexo=:sexo WHERE id=:id");
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
			$consulta->bindvalue(':dni',$dni,PDO::PARAM_INT);
			$consulta->bindValue(':provincia',$this->provincia, PDO::PARAM_STR);
			$consulta->bindValue(':candidato', $this->candidato, PDO::PARAM_STR);
			$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
			return $consulta->execute();
	 }

	public function GuardarVoto()
	 {

	 	if($this->id>0)
	 		{
	 			$this->ModificarVoto();
	 		}else {
	 			$this->InsertarVoto();
	 		}

	 }
	
		public static function TraerVotos()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * from votos");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "voto");		
	}
	public function validarDni($dni)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * from votos where dni=$dni");
		$consulta->bindvalue(':dni',$dni,PDO::PARAM_INT);
		$consulta->execute();
		$buscado=$consulta->fetchObject('voto');
		return $buscado;
	}

	/*public static function insertarVoto($dni,$candidato,$sexo)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("CALL insertarVoto(:dni,:candidato,:sexo );");
		$consulta->bindvalue(':dni',$dni,PDO::PARAM_STR);
		$consulta->bindvalue(':candidato',$candidato,PDO::PARAM_STR);
		$consulta->bindvalue(':sexo',$sexo,PDO::PARAM_STR);
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}*/

	/*	public static function TraerUnVoto($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * from votos where id = $id");
			$consulta->execute();
			$buscado= $consulta->fetchObject('voto');
			return $buscado;							
	}*/
}
?>
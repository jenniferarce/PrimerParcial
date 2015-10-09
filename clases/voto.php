<?php
class voto
{
	public $id;
	public $dni;
	public $provincia;
	public $localidad;
	public $direccion;
	public $candidato;
	public $sexo;
	public $cont;

	 public function InsertarVoto()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("CALL InsertarVoto(:dni,:provincia,:localidad,:direccion,:candidato,:sexo)");
				$consulta->bindvalue(':dni',$this->dni,PDO::PARAM_INT);
				$consulta->bindValue(':provincia',$this->provincia, PDO::PARAM_STR);
				$consulta->bindValue(':localidad',$this->localidad, PDO::PARAM_STR);
				$consulta->bindValue(':direccion',$this->direccion, PDO::PARAM_STR);
				$consulta->bindValue(':candidato', $this->candidato, PDO::PARAM_STR);
				$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);

				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }
	public function BorrarVoto()
	 {
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL BorrarVoto(:id)");	
				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();
	 } 
	 public function ModificarVoto()
	 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL ModificarVoto(:dni,:provincia,:localidad,:direccion,:candidato,:sexo,:id)");
			$consulta->bindvalue(':dni',$this->dni,PDO::PARAM_INT);
			$consulta->bindValue(':provincia',$this->provincia, PDO::PARAM_STR);
			$consulta->bindValue(':localidad',$this->localidad, PDO::PARAM_STR);
			$consulta->bindValue(':direccion',$this->direccion, PDO::PARAM_STR);
			$consulta->bindValue(':candidato',$this->candidato, PDO::PARAM_STR);
			$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
			return $consulta->execute();
			return $objetoAccesoDato->RetornarUltimoIdInsertado();
			//("CALL ModificarVoto('$this->dni','$this->provincia','$this->localidad','$this->direccion','$this->candidato','$this->sexo',':idd'");
			//"UPDATE votos set dni=:dni,provincia=:provincia,localidad=:localidad,direccion=:direccion,candidato=:candidato,sexo=:sexo where id=:id");
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
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerVotos()");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "voto");		
	}

	public static function TraerVotosId($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerVotosId(:id)");
			$consulta->bindvalue(':id',$id,PDO::PARAM_INT);
			$consulta->execute();
			$buscado= $consulta->fetchObject('voto');
			return $buscado;			

	}
	public function validarDni($dni)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta=$objetoAccesoDato->RetornarConsulta("CALL validarDni(:dni)");
		$consulta->bindvalue(':dni',$this->dni,PDO::PARAM_INT);
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

}
?>
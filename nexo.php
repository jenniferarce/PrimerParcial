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
			$voto->localidad=$_POST['localidad'];
			$voto->direccion=$_POST['direccion'];
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
	case 'TraerVotosId':
		$voto = voto::TraerVotosId($_POST['id']);	 
		echo json_encode($voto);
	break;
	case 'VerEnMapa':
		include("partes/formMapa.php");
	break;
	case 'guardarMarcadores':
        session_start();
        if(isset($_POST["marcadores"]))
        {
            $filename = "ArchivosTxt/marcadores" . getdate()[0] . ".txt";

            $_SESSION['file'] = $filename;
            $puntos = $_POST["marcadores"];

            $file = fopen($filename, "w");

            foreach ($puntos as $valor)
            {
                $lat =  $valor["lat"];
                $lng =  $valor["lng"];
                $nombre =  $valor["nombre"];
                fwrite($file, $lat.">".$lng.">".$nombre . PHP_EOL);
            }
        fclose($file);

        echo "Marcadores guardados con exito";
        }
        else
            echo "No ingreso marcador/es a guardar";
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
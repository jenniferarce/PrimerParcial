<?php 
session_start();
if(isset($_SESSION['registrado']))
{
	require_once("clases/AccesoDatos.php");
	require_once("clases/voto.php");
	$arrayDeVotos=voto::TraerVotos();
	echo "<h2> Bienvenido: ". $_SESSION['registrado']."</h2>";

 ?>
<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>DNI</th><th>Provincia</th><th>Localidad</th><th>Direccion</th><th>Candidato</th><th>Sexo</th><th>Mapa</th>
		</tr>
	</thead>
	<tbody>

		<?php 
		
foreach ($arrayDeVotos as $voto) {
	echo"<tr>
			<td><a onclick='EditarVoto($voto->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorrarVoto($voto->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
			<td>$voto->dni</td>
			<td>$voto->provincia</td>
			<td>$voto->localidad</td>
			<td>$voto->direccion</td>
			<td>$voto->candidato</td>
			<td>$voto->sexo</td>
			<td><a onclick='VerEnMapa('$voto->provincia','$voto->direccion','$voto->localidad','$voto->id')' class='btn btn-info'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Ver mapa</a></td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>

<?php 	}else	{
		echo "<h4 class='widgettitle'>No estas registrado</h4>";
	}

	 ?>
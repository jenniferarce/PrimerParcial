<?php 
session_start();
if(isset($_SESSION['registrado']))
{
	require_once("../clases/AccesoDatos.php");
	require_once("../clases/voto.php");
	$arrayDeVotos=voto::TraerTodoLosVotos();
	echo "<h2> Bienvenido: ". $_SESSION['registrado']."</h2>";

 ?>
<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Provincia</th><th>Candidato</th><th>Sexo</th>
		</tr>
	</thead>
	<tbody>

		<?php 

//SEGUIR!!!!!!!!!************************************

foreach ($arrayDeVotos as $voto) {
	echo"<tr>
			<td><a onclick='Editarvoto($voto->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='Borrarvoto($voto->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
			<td>$voto->provincia</td>
			<td>$voto->candidato</td>
			<td>$voto->sexo</td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>

<?php 	}else	{
		echo "<h4 class='widgettitle'>No estas registrado</h4>";
	}

	 ?>
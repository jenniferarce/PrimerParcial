<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<!-- disable iPhone inital scale -->
<meta name="viewport" content=" initial-scale=1.0">

<title>UTN FRA</title>

<!-- main css -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/media-queries.css" rel="stylesheet" type="text/css">
<link href="css/ingreso.css" rel="stylesheet">

<!-- media queries css -->
 <link rel="stylesheet" href="bower_components/bootstrap-css/css/bootstrap.min.css">
 <script src="bower_components/jquery/dist/jquery.min.js"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script> <!--para google maps-->


 <link rel="icon" href="http://www.octavio.com.ar/favicon.ico">
 <script type="text/javascript" src="js/funciones.js"></script>
 <script type="text/javascript" src="js/funcionesABM.js"></script>
 <script type="text/javascript" src="js/funcionesMapa.js"></script>
 <script type="text/javascript" src="js/geolocalizacionCommon.js"></script>
 <script type="text/javascript" src="js/moduloGeolocalizacion.js"></script>

<script type="text/javascript">

/*function contador()
{
	$(document).ready(function(){
    $("#Contador").submit(function() {
     //Check whether the cookie is already set
     var cookiename='cont';

      //$.cookie('cont',null,{path:'/'});
     if($.cookie(cookiename))
     {
      //set cont cookie with incremented cookie value
      $.cookie('cont',(parseInt($.cookie('cont')) + 1),{expires:1,path:'/'});
     }
     else
      {
      //set cont to 1 for first if the cookie is not already set
      $.cookie('cont',1,{expires:1,path:'/'});
      }
});
});

}*/


</script>


</head>

<body>




<div id="pagewrap">

	<header id="header">

		<hgroup>
			<h1 id="site-logo"><a href="#">Primer Parcial</a></h1>
			<h2 id="site-description">Lab 4 2C 2015</h2>
		</hgroup>

		<nav>
			<ul id="main-nav" class="clearfix">
				<li><a onclick="mostrarlogin()" class="btn">Ingreso</a></li>
				<li><a onclick="votacion()" class="btn">Ir a VOTACIÓN</a> </li>
				<li><a onclick="mostrarvoto()" class="btn">Listado de Votaciones</a> </li>
				
			</ul>
			<!-- /#main-nav --> 
		</nav>

		<form id="searchform">
			
		</form>

	</header>
	<!-- /#header -->
	
	<div id="content" >

		<article  class="post clearfix">

			<header  >
				<h1 class="post-title"><a href="#">Jennifer.Arce</a></h1>
				<p class="post-meta"><time class="post-date" datetime="2011-05-08" pubdate>2015</time> <em>en</em> <a href="#">UTN FRA</a></p>
			</header>
			<hr>
			<div id="principal">

<?php

?>
			</div>		

		</article>
		<!-- /.post -->

	</div>
	<!-- /#content --> 
	
	
	<aside id="sidebar">

		<div id="botonesABM">
				<!--contenido dinamico cargado por ajax-->
		</div>
		<!-- /.widget -->

		<section class="widget clearfix" >
			<h4 class="widgettitle">Contador de votos</h4>
				<div id="Contador">
				<!--contenido dinamico cargado por ajax-->
				<!--<?php  echo "<h3> document.cookie </h3>";?>-->  

				<!--<input type="text" class="form-control" disabled>
				<input type="submit" id="cont" value="Contar" onclick="contador()"> -->

				</div> <!-- ¿¿??-->
			
		</section>
		<!-- /.widget -->
						
	</aside>
	<!-- /#sidebar -->

	<footer id="footer">
	
		<p>templete by <a href="http://www.octavio.com.ar">Octavio Villegas</a></p>

	</footer>
	<!-- /#footer --> 
	
</div>
<!-- /#pagewrap -->

</body>
</html>
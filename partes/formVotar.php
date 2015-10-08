
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

<?php 
session_start();
if(isset($_SESSION['registrado'])){  ?>
    <div class="container">

      <form class="form-ingreso" onsubmit="insertarVoto();return false">
        <h2 class="form-ingreso-heading">voto</h2>
        <input type="text"  maxlength="20"  id="provincia" title="Se necesita un nombre de provincia" class="form-control" placeholder="Provincia" required autofocus>
        <select name="candidato" id="candidato">
          <option selected value="Macri">Macri</option>
          <option value="Massa">Massa</option>
          <option value="Scioli">Scioli</option>

        </select>
        <input type="radio" name="sexo" id="sexo" value="Masculino" class="form-control">Masculino
        <input type="radio" name="sexo" id="sexo" value="Femenino">Femenino<br>

         <i class="glyphicon glyphicon-user form-control-feedback"></i>
       <input type="submit" value="Guardar">
       
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>

    </div> <!-- /container -->

  <?php }else{    echo"<h3>usted no esta logeado. </h3>";?>         
   
  <?php  }  ?>
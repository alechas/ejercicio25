<html>

	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

<div class="CajaInicio">
<form action="index.php" method="post" id="FormIngreso">
<label> Ingrese los datos de un rectangulo <br></label>

<?php
if(isset($_POST["altura"]))
{

	$altura = $_POST['altura'];	
	$longitud = $_POST['longitud'];	

}
$altura = 10;
$longitud = 10;
?>

<label> Altura <br></label>
<input type = "text" name = "altura" text =Altura>

<label> Longitud <br></label>
<input type="text" name = "longitud">
<br>
<br>
<br>



<svg width=$altura height=$longitud>
  <rect width=$altura height=$longitud style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
</svg>

</form>

</div>

</html>
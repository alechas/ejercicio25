<html>

	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

<div class="CajaInicio">
<form action="index.php" method="post" id="FormIngreso">
<label> Ingrese los datos de un rectangulo <br></label>



<label> Altura <br></label>
<input type = "text" name = "altura" text =Altura>

<label> Longitud <br></label>
<input type="text" name = "longitud">
<br>
<br>
<br>

<?php
if(isset($_POST['altura']))
{
	echo $_POST['altura'];
}

?>

<svg width="400" height="110">
  <rect width="300" height="100" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
</svg>

</form>

</div>

</html>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

<div class="CajaInicio">
<form action="calcular.php" method="post" id="FormIngreso">
<label> Ingrese los datos de un rectangulo <br></label>

<label> Altura <br></label>
<input type = "text" name = "altura" text =Altura>

<label> Longitud <br></label>
<input type="text" name = "longitud">

<?php
var ctx=c.getContext("2d");
ctx.rect(20,20,150,100);
ctx.stroke();
?>

<input type="submit">
</form>

</div>

</html>
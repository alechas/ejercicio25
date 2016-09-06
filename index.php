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

<svg width= Value="<?php $_POST['altura']?>" height=Value="<?php $_POST['altura']?>">
  <rect width=Value="<?php $_POST['altura']?>" height=Value="<?php $_POST['altura']?>" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
</svg>

<input type="submit" class="MibotonUTNMenuInicio">

</form>

</div>

</html>
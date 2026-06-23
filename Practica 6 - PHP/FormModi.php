<?php

include("conexion.inc");

$id = $_POST['id'];

$vSql = "SELECT * FROM ciudades
WHERE id='$id'";

$vResultado = mysqli_query($link,$vSql);

$fila = mysqli_fetch_array($vResultado);

?>

<form action="Modi.php" method="POST">

<input type="hidden" name="id"
value="<?php echo $fila['id']; ?>">

Ciudad:

<input type="text"
name="ciudad"
value="<?php echo $fila['ciudad']; ?>">

<br><br>

País:

<input type="text"
name="pais"
value="<?php echo $fila['pais']; ?>">

<br><br>

Habitantes:

<input type="text"
name="habitantes"
value="<?php echo $fila['habitantes']; ?>">

<br><br>

Superficie:

<input type="text"
name="superficie"
value="<?php echo $fila['superficie']; ?>">

<br><br>

<input type="submit"
value="Guardar">

</form>
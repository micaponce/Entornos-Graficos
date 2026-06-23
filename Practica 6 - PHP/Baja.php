<html>
<body>

<?php

include("conexion.inc");

$id = $_POST['id'];

$vSql = "SELECT * FROM ciudades
WHERE id='$id'";

$vResultado = mysqli_query($link,$vSql);

if(mysqli_num_rows($vResultado)==0)
{
 echo "Ciudad inexistente";
}
else
{
 $vSql = "DELETE FROM ciudades
 WHERE id='$id'";

 mysqli_query($link,$vSql);

 echo "Ciudad eliminada";
}

mysqli_close($link);

?>

<br>
<a href="Menu.html">Volver</a>

</body>
</html>
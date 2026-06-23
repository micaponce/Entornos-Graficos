<?php

include("conexion.inc");

$id = $_POST['id'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];

$vSql = "UPDATE ciudades
SET ciudad='$ciudad',
pais='$pais',
habitantes='$habitantes',
superficie='$superficie'
WHERE id='$id'";

mysqli_query($link,$vSql);

echo "Ciudad modificada";

mysqli_close($link);

?>
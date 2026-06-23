<html>
<body>

<?php

include("conexion.inc");

$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vMetro = $_POST['metro'];

$vSql = "INSERT INTO ciudades
(ciudad,pais,habitantes,superficie,tieneMetro)
VALUES
('$vCiudad','$vPais','$vHabitantes','$vSuperficie','$vMetro')";

mysqli_query($link,$vSql)
or die(mysqli_error($link));

echo "Ciudad agregada correctamente";

mysqli_close($link);

?>

<br>
<a href="Menu.html">Volver</a>

</body>
</html>
<?php

include("conexion.inc");

$vSql = "SELECT * FROM ciudades";

$vResultado = mysqli_query($link,$vSql);

echo "<table border='1'>";

echo "
<tr>
<th>ID</th>
<th>Ciudad</th>
<th>Pais</th>
<th>Habitantes</th>
<th>Superficie</th>
<th>Tiene Metro</th>
</tr>";

while($fila=mysqli_fetch_array($vResultado))
{
 echo "<tr>";

 echo "<td>".$fila['id']."</td>";
 echo "<td>".$fila['ciudad']."</td>";
 echo "<td>".$fila['pais']."</td>";
 echo "<td>".$fila['habitantes']."</td>";
 echo "<td>".$fila['superficie']."</td>";
 echo "<td>".$fila['tieneMetro']."</td>";

 echo "</tr>";
}

echo "</table>";

mysqli_close($link);

?>
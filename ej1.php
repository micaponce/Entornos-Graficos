<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
 <td><?php echo ($fila[0]); ?></td>
 <td><?php echo ($fila[1]); ?></td>
 <td><?php echo ($fila[2]); ?></td>
</tr>
<tr>
 <td colspan="5">
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>

/*Recorre todas las filas obtenidas por una consulta SQL. 
En cada iteración guarda una fila en la variable $fila y 
permite mostrar o procesar sus datos hasta que no queden más registros. */
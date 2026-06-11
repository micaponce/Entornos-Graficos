<html>
<head>
    <title>Documento 1</title>
</head>
<body>

<?php
echo "<table width = 90%  border='1'>";

$row = 5;
$col = 2;

for ($r = 1; $r <= $row; $r++) {
    echo "<tr>";

    for ($c = 1; $c <= $col; $c++) {
        echo "<td>&nbsp;</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>

#salida: una tabla con 5 filas y 2 columnas, 
#cada celda vacía y con un borde de 1 píxel.

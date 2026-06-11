
<?php
echo "El $flor $color \n"; #este no se muestra porque no se han definido las variables $flor y $color
include 'datos.php';
echo " El $flor $color"; # este si se muestra porque se han definido las variables $flor y $color en el archivo datos.php
?>


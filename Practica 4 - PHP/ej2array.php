<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12];
?>
#crea un array asociativo con dos elementos, uno con clave "x" y 
#otro con clave 12. Luego imprime ambos elementos.
#salida: bar1

<?php
$matriz = array(
   "unamatriz" => array(
      6 => 5,
      13 => 9,
      "a" => 42
   )
);
echo $matriz["unamatriz"][6];  
echo $matriz["unamatriz"][13]; 
echo $matriz["unamatriz"]["a"];
?>

#crea un array asociativo con un elemento que es a su vez un array asociativo.
#luego imprime los tres elementos del array interno.    
#salida: 5 9 42

<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42;
unset($matriz[5]);
unset($matriz);
?>
#crea un array asociativo con dos elementos, luego agrega un elemento sin clave y otro con clave "x".
#luego elimina el elemento con clave 5 y finalmente elimina todo el array.
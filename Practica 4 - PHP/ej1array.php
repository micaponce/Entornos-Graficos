<?php
$a=array('color'=>'rojo',
 	 'sabor' => 'dulce', 
 	'forma' => 'redonda',
 	 'nombre' => 'manzana', 
 	4
 	 ); 
?>
#crea un array asociativo con 4 elementos y un elemento más sin clave.

<?php
$a['color']= 'rojo';
$a['sabor']= 'dulce';
$a['forma']= 'redonda';
$a['nombre']= 'manzana';
$a[]= 4;
?>
#crea un array asociativo con 4 elementos y un elemento más sin clave.
#este ultimo se va armando paso a paso, asignando a cada clave su valor.

#los dos codigos son equivalentes

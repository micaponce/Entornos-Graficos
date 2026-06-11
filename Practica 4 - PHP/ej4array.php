<?php
function comprobar_nombre_usuario($nombre_usuario){ 
//compruebo que el tamaño del string sea válido. 
if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
 	echo $nombre_usuario . " no es válido<br>";
  	return false;
 } 
//compruebo que los caracteres sean los permitidos
 $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789- _"; 
for ($i=0; $i<strlen($nombre_usuario);$i++){
 	if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
 	          echo $nombre_usuario . " no es valido<br>";
	}
}
echo $nombre_usuario . "es valido<br>";
return true;
}
?>
#SCRIPT DE PRUEBA:
<?phP
comprobar_nombre_usuario("Ana");  
comprobar_nombre_usuario("A"); 
comprobar_nombre_usuario("Juan_23"); 
comprobar_nombre_usuario("Juan@23");
?>

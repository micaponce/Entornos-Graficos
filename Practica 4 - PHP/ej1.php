/*Identificar: variables y su tipo; los operadores; las funciones y 
sus parámetros; las estructuras de control; cual es la salida por
 pantalla*/ 
<?php
/*FUNCION DOBLE CON PARAMETRO $i*/
function doble($i) { 
    return $i*2;
} 
/*salida: el valor recibido multiplicado por 2*/

/*VARIABLES  */
$a = TRUE; #valor booleano, verdadero
$b = "xyz"; #valor string, cadena de caracteres
$c = 'xyz'; #valor string, cadena de caracteres
$d = 12; #valor entero, número sin decimales

echo gettype($a); #salida: el tipo de dato de la variable $a, en este caso booleano
echo gettype($b); #salida: el tipo de dato de la variable $b, en este caso string
echo gettype($c); #salida: el tipo de dato de la variable $c, en este caso string
echo gettype($d); #salida: el tipo de dato de la variable $d, en este caso integer

#estructura de control if para verificar si $d es un entero, si es así, 
#se le suma 4
if (is_int($d)) { 
     $d += 4; 
} #salida: el valor de $d se incrementa en 4, por lo que su nuevo valor es 16.
if (is_string($a)) { 
    echo "Cadena: $a"; 
} 
#salida: no se muestra nada porque $a no es una cadena, es un valor booleano

$d = $a ? ++$d : $d*3; #operador ternario:si $a es verdadero, se incrementa $d en 1, 
#de lo contrario se multiplica $d por 3. En este caso, como 
#$a es verdadero, $d se incrementa en 1, por lo que su nuevo valor es 17.

$f = doble($d++); #llamada a funcion: se llama a la función doble con el valor actual de 
#$d (17) y luego se incrementa $d en 1. La función devuelve el 
#resultado de multiplicar 17 por 2, que es 34, y se asigna a $f.
# Después de esta línea, $d tendrá el valor de 18.

$g = $f += 10; #asignacion: se suma 10 al valor de $f (34), lo que da como resultado 44,
 # y se asigna a $g. Además, el operador += también actualiza el valor de $f, por lo que
    #$f también tendrá el valor de 44 después de esta línea.
echo $a, $b, $c, $d, $f , $g; #salida: 1xyzxyz183444
?>

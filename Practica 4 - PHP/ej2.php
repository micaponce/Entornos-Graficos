#Indicar si los siguientes códigos son equivalentes:
#a
<?php
$i=1;
while($i<=10){
    print $i++;
}
?> 
#salida: 12345678910

<?php
$i=1;
while($i<=10):
    print $i;
    $i++;
endwhile;
?>
#salida: 12345678910

<?php
$i=0;
do{
    print ++$i;
}while($i<10); 
?>
#salida: 12345678910

/*los 3 codigos son equivalentes */

#b
<?php
for ($i=1;$i<=10;$i++){
    print $i;
}
?>

#salida: 12345678910

<?php
for($i=1;$i<=10;print $i, $i++);
?>  
#salida: 12345678910
<?php
for($i=1;;$i++){
    if($i>10) {
        break;
    }
    print $i;
}
?>
#salida: 12345678910
<?php
$i=1;
for(;;){
    if($i>10) {
        break;
    }
    print $i;
    $i++;
}
?>
#salida: 12345678910
#los 4 codigos son equivalentes


#c
<?php
if($i==0){
    print "i equals 0"; 
} elseif($i==1){
    print "i equals 1";
    } elseif($i==2){
        print "i equals 2";
    }
?>

#compara los valores de $i con 0, 1 y 2, 
#y muestra un mensaje correspondiente dependiendo del valor de $i.
#salida: si $i es igual a 0, se muestra "i equals 0"; 
#si $i es igual a 1, se muestra "i equals 1";
#si $i es igual a 2, se muestra "i equals 2";
#si $i no es igual a ninguno de esos valores, no se muestra nada.

<?php
switch($i){
    case 0:
        print "i equals 0";
        break;
    case 1:
        print "i equals 1";
        break;
    case 2:
        print "i equals 2";
        break;
}   
?>

#compara el valor de $i con los casos 0, 1 y 2,
#y muestra un mensaje correspondiente dependiendo del valor de $i.
#salida: si $i es igual a 0, se muestra "i equals 0";
#si $i es igual a 1, se muestra "i equals 1";
#si $i es igual a 2, se muestra "i equals 2";
#si $i no es igual a ninguno de esos valores, no se muestra nada.
#los 2 codigos son equivalentes
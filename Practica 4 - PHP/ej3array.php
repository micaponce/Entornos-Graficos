<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas,
con $fun[minutes] minutos y $fun[seconds] segundos,
del $fun[mday]/$fun[mon]/$fun[year]";
?>

#Ejemplo de uso de arrays asociativos en PHP para mostrar la fecha y hora actual.

<?php
function sumar($sumando1,$sumando2){
   $suma = $sumando1 + $sumando2;
   echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
?>
#Ejemplo de función en PHP para sumar dos números y mostrar el resultado.
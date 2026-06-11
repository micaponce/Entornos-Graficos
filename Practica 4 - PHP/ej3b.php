<html>
<head><title>Documento 2>/title></head>
<body>
<?php
if (!isset($_POST[‘submit’])){
?>
<form action =”<?php echo $_SERVER[‘PHP_SELF];?>” method=”post”>
Edad: <input name = “age” size=”2”>
<input type=”submit” name=”submit” value=”ir”>
</form>
<?php
} #Fin del primer bloque
else {
$age = $_POST[‘age’];
if ($age>=21) {
echo "Mayor de edad";
}
else{
echo "Menor de edad";
}
}
?>
</body></html>

#salida: un formulario que solicita la edad y 
#muestra un mensaje según si es mayor o menor de edad.

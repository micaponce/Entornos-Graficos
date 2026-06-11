<?php
$fecha = date("d-m-Y");
$hora = date("H:i:s");
$destino = $_POST['email_amigo'];
$asunto = "Te recomiendo visitar este sitio";
$mensaje = "
Hola.
".$_POST['nombre']." te recomienda visitar nuestro sitio web.
Fecha: $fecha
Hora: $hora
";
mail($destino,$asunto,$mensaje);
echo "La recomendación fue enviada correctamente.";
?>

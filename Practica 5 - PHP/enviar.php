<?php 
$fecha = date("d-m-Y"); 
$hora = date("H:i:s"); 
$destino = "webmaster@misitio.com";
$asunto = "Consulta desde la pagina web"; 
$desde = "From:" . $_POST['email']; 
$comentario = "
Nombre: $_POST[nombre]
Email: $_POST[email]
Consulta: $_POST[texto]
Enviado: $fecha a las $hora
";
mail($destino,$asunto,$comentario,$desde);
echo "Su consulta ha sido enviada correctamente.";
?>

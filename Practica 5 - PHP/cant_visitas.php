<?php
sesión_start();
?>
<html><body>
<?php
echo "Has visitado " .
$_SESSION["contador"] .
" páginas";
?>
<br><br>
<a href="cuenta.php">Volver</a>
</body></html>

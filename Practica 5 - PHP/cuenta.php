<?php
session_start();

if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
}
?>

<html>
<body>
    <h2>Página principal</h2>
    <a href="cant_visitas.php">Ir a otra página</a>
</body>
</html>
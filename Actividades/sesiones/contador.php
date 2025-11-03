<?php
session_name("LOGIN");

 session_start();









?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>
<?php

echo "Hola".$_SESSION['Nombre']. "";


?>
    <br><br>
    
    <br>
    <a href="cerrar.php">Eliminar sesión</a>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida y carga de archivos</title>
</head>
<body>
    <h3>Subir archivo con PHP</h3>
    <form action="carga.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fichero">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
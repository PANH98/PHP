<?php

if (!isset($_FILES['fichero']) || $_FILES['fichero']['error'] !== UPLOAD_ERR_OK) {
    echo "No se recibió un archivo válido";
    exit();
}

$tipo = mime_content_type($_FILES['fichero']['tmp_name']);
if ($tipo !== "image/jpeg" && $tipo !== "image/png") {
    echo "Tipo de fichero no admitido";
    exit();
}

if (($_FILES['fichero']['size'] / 1024) > 3072) {
    echo "El archivo supera el peso permitido";
    exit();
}

if (!file_exists("archivos")) {
    if (!mkdir("archivos", 0777, true)) {
        echo "Error al crear el directorio";
        exit();
    }
}

chmod("archivos", 0777);

if (move_uploaded_file($_FILES['fichero']['tmp_name'], "archivos/" . $_FILES['fichero']['name'])) {
    echo "Archivo subido con éxito";
} else {
    echo "Error al subir el archivo";
}

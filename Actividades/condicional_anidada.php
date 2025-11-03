<?php
$edad = 60;
$sexo = "M";

if ($sexo == "M") {
    if ($edad >= 60) {
        echo "La persona tiene derecho a jubilarse";
    } else {
        echo "La persona aún no alcanza la edad requerida";
    }
} elseif ($sexo == "F") {
    if ($edad >= 54) {
        echo "La persona tiene derecho a jubilarse";
    } else {
        echo "Esta persona aún no alcanza la edad requerida";
    }
} else {
    echo "Sexo no válido";
}
?>

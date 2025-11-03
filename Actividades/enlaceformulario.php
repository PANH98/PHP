<?php

#$nombre= $_POST['nombre'];
#$asignatura=$_POST['asignatura'];
#$frutas=$_POST['frutas'];
#echo $nombre. "-". $asignatura."-".$frutas;

#Selección normal
##var_dump($_POST['asignatura']);

##Seleccion en bucle
foreach($_POST['asignatura'] as $asignatura){
    echo $asignatura."<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

$fresa=$_POST['frutas'];
foreach($fresa as $fruta){
    echo $fruta."<br>";
}
<?php

$edad = 18;

$resultado = match (true){
$edad >= 60 => "Eres de la tercera edad",
$edad >= 30 => "Eres adulto",
$edad >= 18 => "Eres un joven",
default  => "Eres un niño"
};

echo $resultado;
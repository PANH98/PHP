<?php


$a=8;
$x=10;  
$y= 9;
$z= 8;

$resultado = match($a) {


$x=> "Valor igual a x",
$y => "Valor igual a y",
8=> "Hola mundo",
default => "No coincide con ninguna variable"



};

echo $resultado;
<?php

$productos = [
["código" => "A0001","Descripción" => "Mouse"],
["código" => "A0002","Descripción" => "Teclado"],
["código" => "A0003","Descripción" => "Monitor"],
["código" => "A0004","Descripción" => "Impresor"]


];

foreach($productos as $prod){
echo $prod["código"]."-".$prod["Descripción"]."<br>";


}
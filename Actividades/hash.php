<?php

$clave="HolaMundo123";

echo hash("md5",$clave)."<br>";


foreach (hash_algos() as $algoritmos){
  echo $algoritmos
  ."<br>";
}


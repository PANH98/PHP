<?php

$pc=["SO","SSD","GPU","RAM","CPU"];

foreach($pc as $componente){
    echo $componente."<br>";
    if ($componente =="GPU"){
        continue;
    }
}
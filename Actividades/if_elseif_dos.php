<?php

$cantidad=3;

$total= $cantidad * 700;

if($cantidad<5){
    $total= $total - ($total*0.10);

}elseif($cantidad >=5 && $cantidad <10){

    $total= $total - ($total*0.20);
} elseif ($cantidad >=10){
    $total= $total - ($total*0.20);

}

echo "El total a pagar es $".$total;
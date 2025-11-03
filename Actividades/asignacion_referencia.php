<?php

$texto="México";

$variable_1=$texto;
$variable_2= &$texto;

echo $variable_2;

$texto="Pedro Antonio";

echo $variable_2;



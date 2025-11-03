<?php

$numero=NULL;

if(is_null($numero)){
echo "es nula";
}else{
 echo "tiene valor";
}

### EJEMPLO CON UNSET### 
# $numero="9";
# unset($numero);
# if(is_null($numero)){
#    echo "Es nula";
#} else {
# echo "No es nula";
#}


####EJEMPLO CON EMPTY###
# $numero="9";
# 
# if(empty($numero)){
#    echo "Es nula";
#} else {
# echo "No es nula";
#}

##Añadiento un get en empty##
# $numero=$_GET['numero'];
# 
# if(empty($numero)){
#    echo "Es nula";
#} else {
# echo "No es nula";
#}

####Ejemplo con isset-####
# $numero= NULL;
# 
# if(isset($numero)){
#    echo "Es nula";
#} else {
# echo "No es nula";
#}



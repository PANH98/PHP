<?php
# $_FILES:Accede a la información del archivo

#Aqui se mostrarán las limitantes que deben de poner para realizar la carga del archivo

##name del archivo
echo $_FILES['fichero']['name']."<br>";

## ruta del archivo
echo $_FILES['fichero']['tmp_name']."<br>";

##Tipo de archivo 
echo $_FILES['fichero']['type']."<br>";

## Validar si se subio correctamente 
echo $_FILES['fichero']['error']."<br>";

##Tamaño
echo $_FILES['fichero']['size']."<br>";



##CARGA DE ARCHIVOS##

## 1.- CREA UNA CARPETA DENTRO DEL DIRECTORIO RAIZ

## UNA VEZ CREADO USA EL CÓDIGO PHP DE CARGA Y CREA EL SIGUIENTE CÓDIGO 

## <?php 
## if(!file_exists("archivos")){


## file_exist: valida si la ruta existe ##


## Se añade el simbolo ! para identificar si existe la carpeta deseada donde guardamos los archivos, si existe avanzamos, en caso contrario, usaremos el comando mkdir para crear la carpeta de forma automática.##


##el código 0777 consiste en brindar los permisos de lectura y escritura a la carpeta##

## Podemos crear una condicional que marque un error al momento de intentar crear la carpeta.###

## Para que el código 0777 se active de forma correcta tenemos que usar el comando chmod.##

##     if(!mkdir ("archivos",0777)){
##        echo "Error al crear el directorio";
## exit(); } 
##      }
##
##   chmod("archivos",0777);
##
##  if(move_uploaded_file($_FILES['fichero']['tmp_name'], "archivos/".$_FILES['fichero']['name'])){

## echo "Archivo subido con exito";


##  move_uploaded_file consiste en realizar el movimiento a la carpeta destino ##


##        } else{


##  echo "Archivo subido con exito";
##                   }
##
##
##
##
##
##
##
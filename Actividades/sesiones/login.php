<?php

if(!preg_match("/^[a-zA-Z]{3,10}$/",$_POST['usuario'])){
  echo "El usuario no coinciden con el formato solicitado";
  exit();
}




if($_POST['usuario']=="Pedro" && $_POST['clave']=="1234"){
session_name("LOGIN");

 session_start();





$_SESSION["Nombre"]="Pedro";
$_SESSION["Apellido"]="Nava";
$_SESSION["País"]="México";

###echo "Sesion iniciada";

header("Location: contador.php");


}else{
 echo "Datos incorrectos";

}
<?php
//setcookie("Nombre", value, expiracion,dir,dominio,secure,httponly);


setcookie("Idioma", "es", time()+60*60*24*30,"/","localhost",false,false);
?>



<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Cookies</title>
  </head>
  <body>
    <h1>
        <?php 
    echo $_COOKIE['Idioma']; ?>
    




    </h1>


  </body>
</html>

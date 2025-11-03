<?php
$tutor_2 = [
"nombre"=> "Maria",
"apellido" => "Solis",
"edad"=>20,
"cursos"=> ["PHP","Java","CSS"]





];

$tutor_2["cursos"][0] = "C#";


echo $tutor_2["cursos"][0];
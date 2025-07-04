<?php

$url5 = "http://localhost/Restaurante/apiREST/usuarios.php?API=A";

$cliente5 = curl_init($url5);

curl_setopt($cliente5, CURLOPT_RETURNTRANSFER, true);

$respuesta5 = curl_exec($cliente5);


$resp5 = json_decode($respuesta5);

curl_close($cliente5);




?>
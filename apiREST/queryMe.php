<?php



$url4 = "http://localhost/Restaurante/apiREST/mensajes.php?API=A";


$cliente4 = curl_init($url4);


curl_setopt($cliente4, CURLOPT_RETURNTRANSFER, true);

$respuesta4 = curl_exec($cliente4);


$resp4 = json_decode($respuesta4);

curl_close($cliente4);









?>
<?php


$li2 = "http://localhost/Restaurante/apiREST/testimonios.php?API=C";


$cliente12 = curl_init($li2);

curl_setopt($cliente12, CURLOPT_RETURNTRANSFER, true);

$respuesta2 = curl_exec($cliente12);

$res12 = json_decode($respuesta2);

curl_close($cliente12);


?>
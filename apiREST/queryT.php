<?php



$li = "http://localhost/Restaurante/apiREST/testimonios.php?API=A";

$cliente11 = curl_init($li);

curl_setopt($cliente11, CURLOPT_RETURNTRANSFER, true);

$respuesta11 = curl_exec($cliente11);

$res11 = json_decode($respuesta11);

curl_close($cliente11);

?>
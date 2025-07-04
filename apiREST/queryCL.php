<?php


$url9 = "http://localhost/Restaurante/apiREST/controlador.php?op=F";


$cliente4 = curl_init($url9);

curl_setopt($cliente4,CURLOPT_RETURNTRANSFER, true);

$respuesta4 = curl_exec($cliente4);

$resC = json_decode($respuesta4);

curl_close($cliente4);



?>
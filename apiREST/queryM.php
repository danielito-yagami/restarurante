<?php


$url3 = "http://localhost/Restaurante/apiREST/menus.php?API=1";

$cliente3 = curl_init($url3);

curl_setopt($cliente3, CURLOPT_RETURNTRANSFER, true);

$respuesta3 = curl_exec($cliente3);
//Con true lo regresa como arreglo y con false como propiedad de un objeto
$resp3 = json_decode($respuesta3);


curl_close($cliente3);




?>
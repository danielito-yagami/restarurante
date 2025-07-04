<?php

$url7 = "http://localhost/Restaurante/apiREST/usuarios.php?API=1";

$cliente7 = curl_init($url7);

curl_setopt($cliente7, CURLOPT_RETURNTRANSFER, true);

$respuesta7 = curl_exec($cliente7);

$res7 = json_decode($respuesta7);

curl_close($cliente7);


?>
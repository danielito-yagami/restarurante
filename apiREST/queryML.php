<?php


$url33 = "http://localhost/Restaurante/apiREST/menus.php?API=3";


$cliente15 = curl_init($url33);

curl_setopt($cliente15, CURLOPT_RETURNTRANSFER, true);

$comida = curl_exec($cliente15);

$comidas = json_decode($comida);

curl_close($cliente15);


?>
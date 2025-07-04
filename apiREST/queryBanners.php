

<?php

//definiendo la url 

$url = "http://localhost/Restaurante/apiREST/controlador.php?op=6";


$res = curl_init($url);


curl_setopt($res,CURLOPT_RETURNTRANSFER,true);

$respuesta = curl_exec($res);

$datos = json_decode($respuesta, true);


//Cerrando la conexion 

curl_close($res);

?>
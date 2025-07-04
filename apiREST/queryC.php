<?php


//Consumir una API con PHP

//definiendo la URL de la API

//http://localhost/Restaurante/apiREST/controlador.php?op=1
//$url="localhost:3000/apiREST/controlador.php?op=1";
$url = "http://localhost/Restaurante/apiREST/controlador.php?op=1";

$cliente = curl_init($url);


curl_setopt($cliente,CURLOPT_RETURNTRANSFER,true);

$respuesta = curl_exec($cliente);


$res = json_decode($respuesta, true);

//Este arreglo $res es un arreglo matricial 
//Se envian todos los valores 

//Cerrrando la conexion 

curl_close($cliente);

//construyendo el formato JSON



?>
<?php


//Consumir una API con PHP

//definiendo la URL de la API

//http://localhost/Restaurante/apiREST/controlador.php?op=1
//$url="localhost:3000/apiREST/controlador.php?op=1";
$url2 = "http://localhost/Restaurante/apiREST/controlador.php?op=A";

$cliente2 = curl_init($url2);


curl_setopt($cliente2,CURLOPT_RETURNTRANSFER,true);

$respuesta2 = curl_exec($cliente2);

//El error estaba aqui en la decodificacion de la respuesta
$res2 = json_decode($respuesta2, true);

//Este arreglo $res es un arreglo matricial 
//Se envian todos los valores 

//Cerrrando la conexion 

curl_close($cliente2);

//construyendo el formato JSON



?>
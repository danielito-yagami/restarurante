<?php
session_start();



if(isset($_POST)) {

    $usuario = (isset($_POST["user"])) ? $_POST["user"]: "";
    
    $password = (isset($_POST["password"])) ? $_POST["password"]: "";

    //$password = md5($password);
    
//No usando JS para mas seguridad 

//haciendo la parte de la API


$arreglo = array("user"=>$usuario, "pass"=>$password);

$body = json_encode($arreglo);

$urly = "http://localhost/Restaurante/apiREST/usuarios.php?API=D";

$clientey = curl_init($urly);

curl_setopt($clientey,CURLOPT_RETURNTRANSFER, true);

curl_setopt($clientey, CURLOPT_POSTFIELDS, $body);

$respuestay = curl_exec($clientey);

$respy = json_decode($respuestay);

print_r($respy);

curl_close($clientey);


if($respy->Resultado == 1){

    //Creando vsriables de sesion 
    //para proteccion de la pagina web
    $_SESSION["user"] = $usuario;
    $_SESSION["logueado"] = true;
    header('Location: ../rx/index.php');

}else{

   header('Location: ../rx/login.php');

}
}


?>

<?php

header('Content-Type: application/json');

require_once("../inc/config/conexion.php");
require_once("./consultasT.php");

//Instanciando las clases a usar para la API 

$testimonios = new Testimonio();


//parte del cuerpo 

$body = json_decode(file_get_contents("php://input"),true);

//Definiendo los parametros get de la API

switch($_GET["API"]){

case "A":

    $resultados = $testimonios->getTestimonios();

    echo json_encode($resultados);


break;

case "B":

    $resultados = $testimonios->getTestimonioById($body["id"]);

    echo json_encode($resultados);

    break;


case "C":
    
    $res = $testimonios->getTestimonioLimit();

    echo json_encode($res);

    break;


case "D":

    $res = $testimonios->insertarT($body['nombre'], $body['ap'],$body['am'],$body['comentario']);

    $respuesta = array("res"=>"registro insertado");


    echo json_encode($respuesta);

    break;


case "E":
    
    $res = $testimonios->editarT($body['id'],$body['nombre'], $body['ap'],$body['am'],$body['comentario']);

    $respuesta = array("res"=>"registro editado");

    echo json_encode($respuesta);

    break;


case "F":

    $res = $testimonios->borrarT($body['id']);

    $respuesta = array("res"=>"registro eliminado");

    echo json_encode($respuesta);

    break;
    
}

?>




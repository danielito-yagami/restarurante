<?php



header('Content-Type: application/json');

require_once("../inc/config/conexion.php");
require_once("./consultasMe.php");


$mensajes = new Mensajes();

$body = json_decode(file_get_contents("php://input"),true);


//parte del SWITCH


switch($_GET['API']){

case "A":

$respuesta = $mensajes->getMensajes();

echo json_encode($respuesta);


break;


case "C":

$respuesta = $mensajes->borrarMensaje($body['id']);


$res = array("valor"=>"Comentario borrado");

echo json_encode($res);

break;

case "D":

$respuesta = $mensajes->insertMensaje($body['nombre'], $body['email'], $body['mensaje']);

$res = array("valor"=>"Comentario enviado gracias");

echo json_encode($res);

break;    


}



?>
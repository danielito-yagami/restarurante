<?php



header('Content-Type: application/json');

require_once("../inc/config/conexion.php");
require_once("./consultasU.php");
require_once("./consultasL.php");
//Instanciando las clases a usar para la API 

$usuarios = new Usuarios();
$login = new Login();

//parte del cuerpo 

$body = json_decode(file_get_contents("php://input"),true);

//switch

switch($_GET['API']){

case "A":

$res = $usuarios->getUsuarios();

echo json_encode($res);

break;

case "B":
$res = $usuarios->insertarUsuario($body['nombre'],$body['ap'],$body['am'],$body['email'],$body['password'],$body['rol']);

//$valor = array("valor"=>"Registro agregado");

echo json_encode($res);

break;

case "C":


$res = $usuarios->eliminarUsuario($body['id']);

echo json_encode($res);

break;


case "D":

$res = $login->LoginX($body['user'],$body['pass']);

echo json_encode($res);

break;

case "E":


break;
case  1:

    $res = $usuarios->getRol();

    echo json_encode($res);

    break;
}










?>
<?php

header('Content-Type: application/json');

require_once("../inc/config/conexion.php");
require_once("./consultasM.php");


$menus = new Menu();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["API"]){


    case 1:


    $res = $menus->getMenus();

    echo json_encode($res);

    break;


    case 2:

    $res = $menus->getMenu($body['id']);

    echo json_encode($res);

    break;


    case 3:

    $res = $menus->getMenusL();

    echo json_encode($res);

    break;

    case 4:

    $res = $menus->eMenu($body['id'],$body['nombre'],$body['ingredientes'],$body['foto'],$body['precio']);

    $respuesta = array("valor"=>"Registro editado");

    echo json_encode($respuesta);

    break;


    case 5:

        $res = $menus->iMenu($body['nombre'],$body['ingredientes'],$body['foto'],$body['precio']);

        $respuesta = array("valor"=>"Registro insertado");
    
        echo json_encode($respuesta);
    
    break;



    case 6:

        $res = $menus->bMenu($body['id']);

        $respuesta = array("valor"=>"Registro borrado");

        echo json_encode($respuesta);



    break;

}




?>
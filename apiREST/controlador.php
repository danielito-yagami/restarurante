<?php


header('Content-Type: application/json');

require_once("../inc/config/conexion.php");

require_once("./consultas.php");
require_once("./consultasColaborador.php");


//Instanciando la clase consultas


$consultas = new Consultas();
$colaborador = new Colaborador();

$body = json_decode(file_get_contents("php://input"),true);

//Usando un swicth para manejar los casas

switch($_GET["op"]){

    case "1":

        $datos = $consultas->ALL();


        echo json_encode($datos);

        break;

    case "2":

        $insertar = $consultas->Escribir($body['titulo'],$body['descripcion'],$body['link']);

        //Encriptando el json

        //Guardando una variable para usar en JS despues

        $res = array("valor"=>"Registro guardado");

        echo json_encode($res);

        break;

    case "3":
        
        $borrar = $consultas->Borrar($body['id']);

        $res =  array("valor"=>"Registro eliminado");

        echo  json_encode($res);

        break;

    case "4":

        $editar = $consultas->Editar($body["id"],$body['titulo'],$body['descripcion'],$body['link']);

        $res = array("valor"=>"Registro editado con  exito");

        echo json_encode($res);

        break;


    case "5":
        
        $dato = $consultas->Consultar($body["id"]);

        echo json_encode($dato);

        break;

    case "6":

        $respuesta = $consultas->ConsultaBanner();

        echo  json_encode($respuesta);


        break;

    case "A":

        $respuesta = $colaborador->getColaborador();

        echo json_encode($respuesta);

        break;


    case "B":
        $respuesta = $colaborador->insertarC($body['nombre'],$body['ap'],$body['am'],$body['email'],$body['img'],$body['des'],$body['insta'],$body['face'],$body['link']);
        /**
         * "Pedro Ruiz Inclan",
            *"foto.jpg",
            *"El chef de comida picante",
            *"pedro@gmail.com",
            *"link de insta",
            *"link de linkedin",
            *"link de facebook"
         * 
         * 
         */

        echo json_encode($respuesta);


        break;


    case "C":

        $respuesta = $colaborador->consultarC($body['id']);


        echo json_encode($respuesta);



        break;

    case "D":

        $respuesta = $colaborador->actualizarC($body['id'],$body['nombre'],$body['ap'],$body['am'],$body['email'],$body['img'],$body['des'],$body['insta'],$body['facebook'],$body['link']);

        $res = array("valor"=>"Registro editado con  exito");
        echo json_encode($res);


        break;

    case "E":

        $res = $colaborador->deleteC($body["id"]);

        $res = array("valor"=>"Registro eliminado con exito");

        echo json_encode($res);

        break;

    case "F":

        $res = $colaborador->consultaCL();

        echo json_encode($res, true);

        break;
}

?>
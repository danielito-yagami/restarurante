<?php

class Mensajes extends Conexion{

public $conexion;
public $sql;



function getMensajes(){

$this->conexion = parent::Conect();

$this->sql = "CALL getMensajes()";

$query = mysqli_query($this->conexion, $this->sql);

if(mysqli_num_rows($query)>0){


    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);


    $this->conexion->close();

    $this->sql = "";

    return $row;


}else {

    return "No hay datos";

}


}

function getMensaje($id){


}

function insertMensaje($nombre,$correo, $mensaje ){

$this->conexion = parent::Conect();

$this->sql = "CALL insertMensaje('$nombre','$correo','$mensaje')";

mysqli_query($this->conexion, $this->sql);


$this->conexion->close();

$this->sql = "";

return true;


}

function borrarMensaje($id){

$this->conexion = parent::Conect();

$this->sql = "CALL borrarMensaje(".$id.")";

mysqli_query($this->conexion, $this->sql);


$this->conexion->close();

$this->sql = "";

return true;



}


}





?>
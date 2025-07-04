<?php


class Testimonio extends Conexion{


//definiendo las propiedades 

public $conexion;

public $sql;


public function getTestimonios(){

$this->conexion = parent ::Conect();

$this->sql = "CALL consultaT()";

$query = mysqli_query($this->conexion, $this->sql);


//Si la consulta tiene resultados 


if(mysqli_num_rows($query)>0){
//Creando una respuesta con sus propiedades 

$resp = mysqli_fetch_all($query, MYSQLI_ASSOC);

//cerrando la conexion
$this->conexion->close();

$this->sql = "";

return $resp;


}else {




}


}
/////////////////////////////////////////////////////////////////////////////////////////

public function getTestimonioById($id){

$this->conexion = parent::Conect();

$this->sql = "CALL consultaTid(".$id.")";

$query = mysqli_query($this->conexion, $this->sql);

if(mysqli_num_rows($query)>0){


    $row = mysqli_fetch_assoc($query);

    $this->conexion->close();

    $this->sql = "";

    return $row;


}else{


}


}
//////////////////////////////////////////////////////////////////////////
public function getTestimonioLimit(){


    $this->conexion = parent::Conect();
    $this->sql = "CALL consultaTLimite()";


    $query = mysqli_query($this->conexion, $this->sql);


    if(mysqli_num_rows($query)>0){

        $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $this->conexion->close();

        $this->sql = "";

        return $row;

    }else {


    }

}
/////////////////////////////////////////////////////////////////////////////////////
public function borrarT($id){


$this->conexion = parent::Conect();

$this->sql = "CALL borrarT(".$id.")";

$query = mysqli_query($this->conexion, $this->sql);



$this->conexion->close();

$this->sql ="";


return true;



}
////////////////////////////////////////////////////////////////////////////////////////////////

public function editarT($id, $nombre, $ap, $am, $comentario){

$this->conexion = parent::Conect();

$this->sql = "CALL editarT(".$id.",'".$nombre."','".$ap."','".$am."','".$comentario."')";

$query = mysqli_query($this->conexion, $this->sql);



    $this->conexion->close();

    $this->sql = "";


    return true;



}

//////////////////////////////////////////////////////////////////////////////////

public function insertarT($nombre, $ap, $am, $comentario){


$this->conexion = parent::Conect();

$this->sql = "CALL insertarT('".$nombre."','".$ap."','".$am."','".$comentario."')";

$query = mysqli_query($this->conexion,$this->sql);


    $this->conexion->close();

    $this->sql = "";

    return true;



}

}




?>
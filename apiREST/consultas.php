
<?php
//Clase donde van las consultas y se implementara la API REST en JS y EN PHP
class Consultas extends Conexion{


public $conexion;

public $sql;

public function ALL(){

//regresa el valor de la funcion Connect de la cual hereda
$this->conexion = parent::Conect();


//Sentencia de Store Procedure para consultar todos

$this->sql  = "CALL qy()";

$query = mysqli_query($this->conexion,$this->sql);


if(mysqli_num_rows($query)>0){

$res = $query->fetch_all(PDO::FETCH_ASSOC);

//cerrando la conexion

$this->conexion->close();

//Regresando todos los arreglos

return $res;

//Seteando todo a vacio

$this->$sql = '';
$this->conexion ='';

}

}

//Funcion para insert en la base de datos usando la api

public function Escribir($titulo, $descripcion, $link){

$this->conexion = parent::Conect();


$this->sql = "CALL escribir('".$titulo."','".$descripcion."','".$link."')";

$query = mysqli_query($this->conexion,$this->sql);

//Comprobando que si se haya escrito


//SOlo manda el return true si el insert funciono


return true;

$this->conexion->close();

$this->sql = "";

}

function Borrar($id){


$this->conexion = parent::Conect();

$this->sql = "CALL borrar(".$id.")";

mysqli_query($this->conexion,$this->sql);


$this->conexion->close();

$this->sql = "";


return true;




}


function Editar($id, $titulo, $descripcion,$link){

$this->conexion = parent::Conect();

$this->sql = "CALL editar(".$id.",'".$titulo."','".$descripcion."','".$link."')";

mysqli_query($this->conexion,$this->sql);

return true;

$this->conexion->close();

$this->sql = "";

}

function Consultar($id){

$this->conexion = parent::Conect();

$this->sql=  "CALL consulta(".$id.")";

$query = mysqli_query($this->conexion,$this->sql);


if(mysqli_num_rows($query)>0){

    $row = mysqli_fetch_assoc($query);

    $this->conexion->close();

    return $row;
}

}

//Consulta con limit para los banners 

function ConsultaBanner(){

$this->conexion = parent::Conect();

$this->sql = "CALL consultaLimit()";

$query =  mysqli_query($this->conexion,$this->sql);

if(mysqli_num_rows($query)>0){


    $row = mysqli_fetch_assoc($query);

    $this->conexion->close();

    return $row;
}

}


}




?>


<?php
//Heredando de la clase padre conexion 


class Colaborador extends Conexion{

//propiedades de la clase colaborador

public $conexion;

public $sql;


//Funcion para jalar todos los datos de la ba 


public function getColaborador(){


$this->conexion = parent::Conect();

$this->sql = "CALL consultaCHEFS()";

$query = mysqli_query($this->conexion,$this->sql);

if(mysqli_num_rows($query)>0){

$respuestas = mysqli_fetch_all($query);




$this->conexion->close();

$this->conexion = '';

$this->sql ='';

return $respuestas;

}else {



}



}


/*
Funcion para borrar de la api
*/

function deleteC($id){


    $this->conexion = parent::Conect();

    $this->sql = "CALL borrarC(".$id.")";

    $query = mysqli_query($this->conexion,$this->sql);


    $this->conexion->close();

    $this->sql = '';

    return true;






}

//Funcion para actualizar un colaborador

/*

CALL actualizarC(5,
'Loco', 
'Capcom', 
'Garcia', 
'juanpg@gmail',
'foto.jpg',
'Chef de marvel',
'instagram',
'facebook',
'link3');
*/ 


function actualizarC($idchef, $nombre, $apP, $apM, $email, $foto, $des, $insta, $face, $link){


$this->conexion = parent::Conect();


$this->sql = "CALL actualizarC(".$idchef.",'".$nombre."','".$apP."','".$apM."','".$email."','".$foto."','".$des."','".$insta."','".$face."','".$link."')";

$query =mysqli_query($this->conexion,$this->sql);

$this->conexion->close();

$this->sql = '';

return $query;


}


//Funcion INSERTAR CHEF

function insertarC($nombre, $apP, $apM, $email, $foto, $des, $insta, $face, $link){


    $this->conexion = parent::Conect();


    $this->sql = "CALL insertarCHEF('".$nombre."','".$apP."','".$apM."','".$email."','".$foto."','".$des."','".$link."','".$insta."','".$face."')";

  

    $query = mysqli_query($this->conexion,$this->sql);

    return true;

    $this->conexion->close();

    $this->sql = '';


    

}

//Funcion para consultar un chef por ID 


function consultarC($idchef){


    $this->conexion = parent::Conect();

    $this->sql = "CALL consultaC(".$idchef.")";


    $query = mysqli_query($this->conexion,$this->sql);


    if(mysqli_num_rows($query)>0){


        $row = mysqli_fetch_assoc($query);

        $this->conexion->close();

        $this->sql = "";

        return $row;

    }else {



        return false;
    }



}

public function consultaCL(){


    $this->conexion = parent::Conect();

    $this->sql = "CALL consultaClimite()";

    $query = mysqli_query($this->conexion,$this->sql);

    if(mysqli_num_rows($query)> 0){


        //para crear un array asociativo con las propiedades de los objetos CHEFS
        $row = mysqli_fetch_all($query,MYSQLI_ASSOC);

        $this->conexion->close();

        $this->sql = "";


        return $row;

    }else {



    }



}



}





?>
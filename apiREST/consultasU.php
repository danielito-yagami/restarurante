<?php

class Usuarios extends Conexion{

public $sql;
public $conexion;


public function getUsuarios(){

$this->conexion = parent::Conect();
$this->sql = "CALL consultasU()";

$query = mysqli_query($this->conexion,$this->sql);

if(mysqli_num_rows($query)>0){

$row = mysqli_fetch_all($query,MYSQLI_ASSOC);

$this->conexion->close();
$this->sql = "";


return $row;

}else {


return "No hay datos";

}

}
public function getUsuario($id){


    $this->conexion = parent::Conect();
    $this->sql = "";

    $query = mysqli_query($this->conexion,$this->sql);
    $this->conexion->close();
    $this->sql = "";
}
public function insertarUsuario($nombre, $apP,$apM, $email, $password, $rol){


    $this->conexion = parent::Conect();

    //Aqui se encripta el password 
    //En la version web no se usara el encriptado md5
    $encript = md5($password);

    $this->sql = "CALL insertarU('".$nombre."','".$apP."','".$apM."','".$email."','".$encript."','".$rol."')";
                  
    $query = mysqli_query($this->conexion,$this->sql);


    if(mysqli_num_rows($query)>0){

    $row = mysqli_fetch_assoc($query);
    

    $this->conexion->close();
    $this->sql = "";

    return $row;
    }

}

public function actualizarUsuario($id, $nombre, $apP, $apM, $email, $rol){


    $this->conexion = parent::Conect();
    $this->sql = "";
    $query = mysqli_query($this->conexion,$this->sql);



    $this->conexion->close();
    $this->sql = "";
}

public function eliminarUsuario($id){

    $this->conexion = parent::Conect();
    $this->sql = "CALL borrarU(".$id.")";

    $query = mysqli_query($this->conexion,$this->sql);


    if(mysqli_num_rows($query)>0){

        $row = mysqli_fetch_assoc($query);

        $this->conexion->close();

        $this->sql = "";

        return $row;


    }else {



    }
}

public function getRol(){

    
    $this->conexion = parent::Conect();
    $this->sql = "CALL consultaRol()";
    $query = mysqli_query($this->conexion,$this->sql);


    if(mysqli_num_rows($query)>0){

        $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $this->conexion->close();
        $this->sql = "";

        return $row;

    }else {
    
    }

}






}


?>
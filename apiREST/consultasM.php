<?php

//Modelado para usar los endpoints de la API



class Menu extends Conexion{


//propiedades de la clase 

public $sql;
public $conexion;




public function getMenus(){

$this->conexion = parent::Conect();

$this->sql = "CALL consultaComidas()";


$query = mysqli_query($this->conexion, $this->sql);


if(mysqli_num_rows($query)>0){


    $menus = mysqli_fetch_all($query,MYSQLI_ASSOC );

    $this->conexion->close();

    $this->sql = "";

    return $menus;


}else {

    echo "No hah resultados en la Base de datos";

}

}

public function getMenu($id){

$this->sql = "CALL consultaComida(".$id.")";

$this->conexion = parent::Conect();

$query = mysqli_query($this->conexion,$this->sql);

if(mysqli_num_rows($query)>0){


    $row = mysqli_fetch_assoc($query);

    $this->conexion->close();

    $this->sql= "";

    return $row;

}else {


    echo "No hay resultados";
}


}

public function getMenusL(){


    $this->conexion = parent::Conect();

    $this->sql = "CALL consultaComidasL()";
    
    
    $query = mysqli_query($this->conexion, $this->sql);
    
    
    if(mysqli_num_rows($query)>0){
    
    
        $row = mysqli_fetch_all($query,MYSQLI_ASSOC );
    
        $this->conexion->close();
    
        $this->sql = "";
    
        return $row;
    
    
    }else {
    
        echo "No hah resultados en la Base de datos";
    
    }

}


public function eMenu($idcomidax,$nombrex,$ingredientesx,$fotox,$preciox){

$this->conexion=parent::Conect();

$this->sql = "CALL editarComida(".$idcomidax.",'".$nombrex."','".$ingredientesx."','".$fotox."',".$preciox.")";


mysqli_query($this->conexion, $this->sql);

$this->conexion->close();

$this->sql = "";

return true;

}

public function iMenu($nombrex,$ingredientesx,$fotox,$preciox){

    
$this->conexion=parent::Conect();

$this->sql = "CALL insertarComida('".$nombrex."','".$ingredientesx."','".$fotox."',".$preciox.")";


mysqli_query($this->conexion, $this->sql);

$this->conexion->close();

$this->sql = "";

return true;


}

public function bMenu($id){


    $this->conexion=parent::Conect();

    $this->sql = "CALL borrarComida(".$id.")";
    
    
    mysqli_query($this->conexion, $this->sql);
    
    $this->conexion->close();
    
    $this->sql = "";
    
    return true;


}


}



?>
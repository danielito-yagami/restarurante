<?php


//Creando la conexion a la base de datos 
//Creando la clase conexion para no estar repitiendo codigo


class Conexion{

//Propiedades de la clase conexion 


public $dbhost, $dbuser, $dbpass, $dbname, $puerto;


//Metodo Constructor 

function __construct()
{
    
}

function Conect(){

$this->dbhost = "Localhost";

//$this->dbuser = "daxdev_restaurante";
$this->dbuser = "root";
$this->dbpass = "1234";
//$this->dbpass = "W89o*xz72";
//$this->dbname = "daxdev_restaurante";
$this->dbname = "restaurante";
$this->puerto = 3306;
//$this->puerto = 3308;
$conx = new mysqli($this->dbhost,$this->dbuser, $this->dbpass, $this->dbname, $this->puerto);

//Verificando si la conexion tiene errores o se puede conectar


if(mysqli_connect_errno()){

echo "<h2>No se pudo conectar a la base de datos codigo 0000</h2>";
exit();

}else{



return $conx;

}


}



}







?>
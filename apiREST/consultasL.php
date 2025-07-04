<?php

class login extends Conexion{

public $conexion;
public $sql;


public function LoginX($email, $password){

$this->conexion = parent::Conect();

$this->sql = "CALL loginX('".$email."','".$password."')";

$query = mysqli_query($this->conexion, $this->sql);

$row = mysqli_fetch_assoc($query);


$this->conexion->close();

$this->sql = "";

return $row;


}


}



?>
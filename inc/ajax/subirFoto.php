<?php


//Se esperan dos variables la foto y su nombre

//manejando el isset para comprobar que llegaron los datos




    $nombreFoto = $_POST["nombre"];



    $foto = $_FILES['foto']['tmp_name'];



$directorio = "../../img/colaboradores/";

//Para evitar ataques DDOS

$ruta = $directorio.basename($nombreFoto);

if($foto != ""){


    if(move_uploaded_file($foto, $ruta)){

        echo "El nombre de la foto es".$nombreFoto."\n";
        
        echo $ruta;

        
    }else{

        echo "No se pudo subir la imagen";

        return 2;
    }



}







?>
<?php

//recibiendo las 2 variables 



if(isset($_POST['nombre'])){


    $nombre = $_POST['nombre'];


}

if(isset($_FILES['foto'])){


    $foto = $_FILES['foto']['tmp_name'];
    echo $foto;
}




$directirio = "../../img/menu/";


$ruta = $directirio.basename($nombre);


if($foto !=""){

//para subir la imagen 

if(move_uploaded_file($foto, $ruta)){

echo "El nombre de la foto es ".$nombre."\n";
echo $ruta;

}else{


    echo "no se pudo subir la img";
}

}

?>
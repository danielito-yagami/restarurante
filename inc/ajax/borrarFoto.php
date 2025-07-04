<?php

//parte de ajax para borrar la imagen 


//definiendo la variable 

if(isset($_POST['id'])){

    $id = $_POST['id'];


}else {


    echo "Error de servidor";
}

//Creando el json para php

//Creando un array
$json = array("id"=>$id);
//Creando el json del array
$body = json_encode($json);




//Ahora usando la API para obtener el nombre de la foto

//definiendo la url

$liga3 = "http://localhost/Restaurante/apiREST/controlador.php?op=C";

$cliente10 = curl_init($liga3);

//Para metodo post va esto primero 

curl_setopt($cliente10, CURLOPT_RETURNTRANSFER, true);

curl_setopt($cliente10, CURLOPT_POSTFIELDS, $body);

$respuestaX = curl_exec($cliente10);

$resx = json_decode($respuestaX);


curl_close($cliente10);


//nombre de la imagen 


$imagen = $resx->img;


//buscando la imagen en la carpeta de imagenes

//definiendo la ruia de la img

$direccion = "../../img/colaboradores/";

if(isset($imagen)){

    if(file_exists($direccion.$imagen)){

        //Borrando la imagen
        unlink($direccion.$imagen);
    }else {

        echo "la imagen no existe";
    }


}

?>
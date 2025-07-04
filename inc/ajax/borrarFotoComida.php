<?php


if(isset($_POST['id'])){


    $id = $_POST['id'];


}

//definienndo un arreglo para enviarlo como json 

$arreglo = array("id"=>$id);

$body = json_encode($arreglo);


//Consumiendo la API para borrar la imagen 


$liga4 = "http://localhost/Restaurante/apiREST/menus.php?API=2";

$cliente14 = curl_init($liga4);

curl_setopt($cliente14, CURLOPT_RETURNTRANSFER, true);

curl_setopt($cliente14, CURLOPT_POSTFIELDS, $body);

$comida = curl_exec($cliente14);

$imagen = json_decode($comida);


curl_close($cliente14);




$nImg = $imagen->foto;






$direccion2 = "../../img/menu/";

if(isset($nImg)){

    if(file_exists($direccion2.$nImg)){


        unlink($direccion2.$nImg);

    }else{


        echo "La imagen no existe";
    }


}

?>
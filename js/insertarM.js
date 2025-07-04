//Creando la insercion 


$("#menubtn").on('click',function(e){

e.preventDefault()

let nombre = $("#imn").val()
let ingredientes = $("#imin").val()
let precio = $("#imp").val()

let archivo = $("#fotomenu")[0].files[0]


let foto = ""
let nfoto = ""

//Sin subir foto 
try{

    nfoto = archivo['name']

    let fecha = new Date().getFullYear()
    
    foto = fecha+"-"+nfoto

}catch(error){

nfoto =""

foto ="foto.jpg"


}

//Subiendo foto 

if (foto == "foto.jpg"){





}else {

let formData = new FormData()

formData.append("nombre",foto)
formData.append("foto",archivo)

let url ="../inc/ajax/subirFotoComida.php"


$.ajax({

    url:url,
    type:'POST',
    cache:false,
    processData:false,
    contentType:false,
    data:formData


})
.done(function(datos){


    console.log(datos);

})
.fail(function(error){


    console.log(error)

})

}



if(nombre == "" || ingredientes == "" || precio == ""){

alert("No puedes dejar ningun campo vacio")



}
//Cuando se envian los datos a la API
else{


let objeto = {


    nombre:nombre,
    ingredientes:ingredientes,
    precio:precio,
    foto:foto



}

let json = JSON.stringify(objeto)


let url = "http://localhost/Restaurante/apiREST/menus.php?API=5"




fetch(url, {

    method : 'POST',
    headers:{"Content-Type":"application/json"},
    body: json

})

.then(datos=>{


    return datos.json()
})
.then(datos=>{


    alert(datos.valor)

    window.location.href = ""
})
.catch(error=>{



    console.log(error)
})

}
})
//Funcion de borrar

//Para poder obtener el id  del elemento que se quiere borrar o editar

$("#tabla").on('click',function(e){



//pqra obtener el id del elemento
let elemento = e.target

if(elemento.id){




  
//Para partir cadenas de los elementos

let boton = elemento.id.split(".")

//Donde va a separar los botones y determinar que tipo se servicio se va a consumir
if(boton[0] == "editar"){


//Usando el id con el store procedure de una consulta

let id = boton[1]

const obj = {id:id}

json = JSON.stringify(obj)

url = url = "http://localhost/Restaurante/apiREST/controlador.php?op=5"

fetch(url,{

    method: 'POST',
    headers:{"Content-Type":"application/json"},
    body: json
})
.then(function(res){


    return res.json()
})
.then(res=>{

let id = res.idBanners
let titulo = res.titulo
let  descripcion = res.descripcion
let link =  res.link

$("#ei").val(id)

$("#etitulo").val(titulo)

$("#edescripcion").val(descripcion)

$("#elink").val(link)

})
.catch((error=>{


    console.log(error)
}))



}else if(boton[0]== "borrar"){


let opcion = confirm("Se borrara el registro : "+boton[1])

if(opcion == true){

//Primero se borra la imagen del servidor usando AJAX


    

//Ahora se consume la api REST FULL


let id = boton[1]

obj = {

    id:id
}

json =  JSON.stringify(obj)

//usando fecth para borrar un registro 

url = "http://localhost/Restaurante/apiREST/controlador.php?op=3"

fetch(url,{

    method: 'POST',
    headers:{

        "Content-Type":"application/json"
    },
    body:json


})
.then(function(res){

    return res.json()
})
.then(res=>{


    alert(res.valor)

    window.location.href = "http://localhost/Restaurante/rx/index.php"
})
.catch((error)=>{

    console.log(error)
})




}else if (opcion == false){

    console.log("No se borra el registro")

}

} 



}else{

    console.log("el elemento no tiene id")
}






})



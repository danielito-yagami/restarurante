//Para obtener el id 

$("#comentario").on('click', (e)=>{


e.preventDefault()


let elemento  = e.target


let id = elemento.id


let idx = id.split(".")


//enviandolo a la API 

let obj = {id:idx[1]}

let json =  JSON.stringify(obj)

url = "http://localhost/Restaurante/apiREST/mensajes.php?API=C"


let opcion = confirm("Quieres borrar el comentario: "+idx[1]+" ?")


if(opcion){




fetch(url, {

    method: 'POST',
    headers:{

        "Content-Type":"application/json"
    },
    body:json

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

else{


    console.log("debug")
}
})


//usando el boton 


$("#btnC").on('click',(e)=>{

e.preventDefault()


let nombre = $("#nombrex").val()

let email = $("#emailx").val()

let mensaje = $("#mensajex").val()

let obj ={


    nombre: nombre,
    email: email,
    mensaje: mensaje


}

let json = JSON.stringify(obj)

console.log(json)

let url = "http://localhost/Restaurante/apiREST/mensajes.php?API=D";


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
    nombre = $("#nombrex").val("")

    email = $("#emailx").val("")

    mensaje = $("#mensajex").val("")
})
.catch(error=>{console.log(error)})
})
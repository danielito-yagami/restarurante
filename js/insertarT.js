//Creando la funcion para insertar 


$("#testimoniobtn").on('click', (event)=>{


event.preventDefault()

let nombre = $("#itn").val()
let ap = $("#itap").val()
let am = $("#itam").val()
let testimonio = $("#itt").val()
let nada = ""

if(nombre == "" || ap == "" || am == "" || testimonio == ""){

alert("No puedes dejar vacio ningun campo")

}

else {

//creando un objeto de tipo objetc


let obj = {

nombre:nombre,
ap:ap,
am:am,
comentario:testimonio


}

let json = JSON.stringify(obj)

let url = "http://localhost/Restaurante/apiREST/testimonios.php?API=D"


fetch(url,{

    method : 'POST',
    headers:{"Content-Type":"application/json"},
    body: json



})
//Inicio de las promesas 


.then((datos)=>{


    return datos.json()

})
.then((datos)=>{


    alert(datos.res)

    window.location.href =nada

})
.catch((error)=>{

    console.log(error)
})
}

})
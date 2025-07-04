

//Para asignar el evento a borrar y a editar


$("#cola").on('click', function(e){


let el = e.target

if(el.id){


let funcion = el.id.split(".")

//Aqui se dividen las funciones editar y borrar 


if(funcion[0] == "eColaborador"){



let idx = funcion[1]



//Usando la api para consultar los datos 

const obj3 = {


    id:idx
}

let json2 = JSON.stringify(obj3)

url2 = "http://localhost/Restaurante/apiREST/controlador.php?op=C"

fetch(url2,{

    method: 'POST',
    headers:{

        "Content-Type":"application/json"
    },
    body:json2

})
.then(function(res){

    return res.json()
})
.then(res=>{


    //definiendo las variables a editar 
    let codigo = res.idChef
    let nombre = res.nombreC
    
    let n = nombre.split(" ")

    let nombrex = n[0]
    let ap = n[1]
    let am = n[2]
    let email = res.email
    let des = res.descripcion
    let link1 = res.linkInsta
    let link2 = res.linkLink
    let link3 = res.linkFace
    let foto = res.img

    $("#codigo").text(codigo)
    $("#en").val(nombrex)
    $("#eap").val(ap)
    $("#eam").val(am)
    $("#eemail").val(email)
    $("#edes").val(des)
    $("#elI").val(link1)
    $("#efacebook").val(link3)
    $("#elL").val(link2)
    $("#imgN").text(foto)

//Modificando el atributo de source 



$("#imagenChef").attr({"src":"../img/colaboradores/"+foto,"width":"200px","height":"200px"})


})
.catch((error=>{


    console.log(error)
}))

}
//Fin del IF para editar 

else if(funcion[0] == "bColaborador"){


let idBorrar = funcion[1]


let opcion = confirm("¿Desea borrar el colaborador? : "+idBorrar)

if(opcion == true){


//Primero se borra la imagen del servidor 


let formData = new FormData()

formData.append("id", idBorrar)

let dir = "../inc/ajax/borrarFoto.php"

$.ajax({

    url: dir,
    type: "POST",
    contentType:false,
    processData: false,
    cache:false,
    data: formData


})
.done(data =>{

    console.log(data)

})
.fail(error =>{

    console.log(error)
})


//Creando el JSON para enviar a la API

let obj = {


    id:idBorrar
}

let json = JSON.stringify(obj)

urlB = "http://localhost/Restaurante/apiREST/controlador.php?op=E"


fetch(urlB, {

    method: 'POST',
    headers:{

        "Content-Type":"application/json"
    },
    body:json

})
.then(function(res){

    return res.json()
})
.then(function(res){

    alert(res.valor)
    window.location.href = ""
})
.catch(error =>{


    console.log(error)
})
}else{



}


}



}

})
//boton 


$("#editarbtn1").on('click', function(e){



    e.preventDefault()



    let id = $("#codigo").text()
 
    let nombre = $("#en").val()
    let ap = $("#eap").val()
    let am = $("#eam").val()
    let email = $("#eemail").val()
    let des = $("#edes").val()
    let insta = $("#elI").val()
    let face = $("#efacebook").val()
    let link =$("#elL").val()
    //La foto como tal
    let file  = $("#fotoE")[0].files[0]
    let imgdefault = $("#imgN").text()
    //determinando los 2 casos 
    //caso 1 si la imagen se actualiza 
    //caso 2 si la imagen no se actualiza

    //inicializando la variable
    let img = ""
    let nfoto = ""

    //usando el try and catch para atrapar los errores 
    try{

        nfoto = file['name']

        let fecha = new Date().getFullYear()

        img = nombre+"-"+email+fecha+"-"+nfoto

    }catch(error){

            nfoto = ""

            img = imgdefault

    }

//Caso donde no se actualiza la imagen en el servidor 
    if(nfoto == ""){


console.log("Sin actualizar la foto")

    }
//Caso donde se actualiza la imagen en el servidor 
else {

    console.log("Actualizando la foto")

    //Primero usando AJAX para borrar la foto 

    let formData = new FormData()

    formData.append("id",id)


    let direccion = "../inc/ajax/borrarFoto.php"
    let direccion2 = "../inc/ajax/subirFoto.php"
    $.ajax({

    url:direccion,
    type:"POST",
    cache:false,
    contentType:false,
    processData:false,
    data:formData

    })
    .done(data =>{

        console.log(data)
    })
    .fail(error=>{


        console.log(error)
    })

    //Otra peticion AJAX para subir la nueva foto

    let formData2 = new FormData()

    formData2.append("nombre",img)
    formData2.append("foto",file)


    $.ajax({

        url:direccion2,
        type:"POST",
        cache:false,
        contentType:false,
        processData:false,
        data:formData2


    })
    //Resolucion de promesas ajax

    .done(data=>{

        console.log(data)
    })
    .fail(error=>{


        console.log(error)
    })


    }

    const objeto = {


        id:id,
        nombre:nombre,
        ap:ap,
        am:am,
        email:email,
        img:img,
        des:des,
        insta:insta,
        facebook:face,
        link:link
    }


    let json = JSON.stringify(objeto)




    liga = "http://localhost/Restaurante/apiREST/controlador.php?op=D"



    fetch(liga,{


        method: 'POST',
        headers:{
    
            "Content-Type":"application/json"
        },
        body:json
    })
    .then(function(r){

        return r.json()
    })
    .then(r=>{

        if(r){

            alert("Registro editado")
            window.location.href = ""
        }else{

            alert("Error en la edicion")
        }

    })
    .catch((error)=>{


        console.log("error en la edicion",error)
    })


})
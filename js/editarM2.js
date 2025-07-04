

$("#eMenu").on('click', function(e){


    e.preventDefault()


    let id =  $("#idme").text()
    let nombre =  $("#emn").val()
    let ingredientes =  $("#emin").val()
    let precio = $("#emp").val()
 

    //para la parte de la foto 

    let archivo = $("#efotomenu")[0].files[0]

    let imgdefault = "foto.jpg"

    let img = ""

    let nfoto = ""

    //usando el try y el catch para cachar el nombre de la foto

    try{


        nfoto = archivo['name']

        let fecha = new Date().getFullYear()


        img = fecha+"-"+nfoto

    }catch(error){

        nfoto = ""

        img = imgdefault

    }


   


    //usando ajax para guardar la foto en el server


    if(nfoto == ""){


       console.log("no foto")

    }else {

        console.log("foto nueva")
        //2 peticiones AJAX 
        //1 para borrar la foto antigua
        //2 para subir la foto nueva
        let formData = new FormData()

        formData.append("id",id)

        link1 = "../inc/ajax/borrarFotoComida.php"


        $.ajax({


            url:link1,
            type:"POST",
            cache:false,
            contentType:false,
            processData:false,
            data:formData


        })

        .done(datos=>{


            console.log(datos)

        })
        .fail(error=>{

            console.log(error)
        })

        //Insertando la nueva foto 


        let formData2 = new FormData()

        formData2.append("nombre", img)
        formData2.append("foto", archivo)

        let link3 = "../inc/ajax/subirFotoComida.php"

        $.ajax({

            url:link3,
            type:"POST",
            cache:false,
            contentType:false,
            processData:false,
            data:formData2


        })
       .done(function(datos){



       })

       .fail(error=>{

        console.log(error)
       })
    }



    let obj ={

        id:id,
        nombre:nombre,
        ingredientes:ingredientes,
        precio:precio,
        foto:img


    }
    

    let json = JSON.stringify(obj)


    let url = "http://localhost/Restaurante/apiREST/menus.php?API=4"

   

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

        window.location.href=""
    })
    .catch(error=>{

        console.log(error)
    })
  


})
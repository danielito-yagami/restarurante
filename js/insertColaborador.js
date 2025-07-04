
//Parte del boton insertar 


$("#registroC").on('click', function(e){


    e.preventDefault()

    //definiendo los datos que son los mismos que en la api estan definidos

    let nombre = $("#in").val()
    let ap = $("#iap").val()
    let am = $("#iam").val()
    let email = $("#iemail").val()

    let des = $("#ides").val()
    let insta = $("#ilI").val()
    let link = $("#ilL").val()
    let facebook = $("#ifacebook").val()


    //Para no dejar campos vacios

    if(nombre == "" || ap == "" || am == "" || email =="" || des == "" || insta == "" || link == "" || facebook == ""){

        alert("No puedes dejar campos vacios")

    }

    else {


    //validar si se tiene una imagen vacia o no 

    


        
    //Para obtener la propiedades de la foto 
    let file = $("#fotoC")[0].files[0]

    //Inicializando la variable
    let img = ""

    //usando un try cacth 

    try{

        
    //nombre de la foto en javascript
   
    //Creando un id para la foto 

    //Para obtener el año actual
  

        let nfoto = file['name']

        let fecha = new Date().getFullYear()

        img = nombre+"-"+email+"-"+fecha+"-"+nfoto

    }catch(error){

        nfoto = ""

        img = "Sin foto"


        console.log(nfoto)

    }

    if(img == "Sin foto"){

    console.log("Entro en sin foto")

    }else{


    //declarando la variable de la imagen 

    

   
    console.log("Caso con foto usando AJAX")

    //Usando el formdata para mandar por AJAX al servidor 

    let formData = new FormData()

    //Enviando la imagen al servidor 

    
    formData.append("nombre",img)
    formData.append("foto",file)
    

    let url2 = "../inc/ajax/subirFoto.php"

    //usando AJAX para mandar la foto y su nombre

    $.ajax({

        url:url2,
        type:'POST',
        cache:false,
        processData:false,
        contentType:false,
        data:formData

    })
    //Conecto con exito al servidor 
    .done(function(data){

        console.log(data)

    })
    //fallo la conexion al servidor
    .fail(function(error){

        console.log(error)
    })


}

console.log("Inicia el consumo de la api")
        //Creando un objeto para el tipo de datos JSON 
        //recordando que los valores son los que se usan en el API

        const objeto2 = {

            nombre : nombre,
            ap : ap,
            am : am,
            email : email,
            img : img,
            des:des,
            insta:insta,
            link:link,
            face:facebook




        }



        //Convirtiendo este objeto a un JSON para poder enviarlo a la API

        json2 = JSON.stringify(objeto2)
     
        

        //definiendo la url para la insercion de datos de acuerdo a la API

        url = "http://localhost/Restaurante/apiREST/controlador.php?op=B"

        //usando fecth pata enviar los datos a la API

        fetch(url,{


            method: 'POST',
            headers:{"Content-Type":"application/json"},
            body: json2

        })
        .then(function(res){


            return res.json();

        })
        .then(res=>{

            if(res){
            alert("Registro agregado con exito")
            //Redirigiendo a index
            window.location.href = ""
            }
            else{

                alert("Error al registar")
            }
            
        })

        .catch((error)=>{

            console.log(error)
        })

    }

})


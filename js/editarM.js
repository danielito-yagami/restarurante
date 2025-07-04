$("#menuTabla").on('click', function(e){


e.preventDefault()

let elemento = e.target


if(elemento.id){

  
    let el = elemento.id.split(".")


    if(el[0]=="bMenu"){

        let id = el[1]


        let opcion = confirm("Eliminar esta comida : "+id+" ?")

        if(opcion){

            let obj = {


                id:id
            }


            //Parte donde se borra la imagen 

            let formdata = new FormData()

            formdata.append("id", id)

            let diraajax = "../inc/ajax/borrarFotoComida.php"


            $.ajax({

                url: diraajax,
                type: "POST",
                contentType:false,
                processData: false,
                cache:false,
                data: formdata


            })
            .done(datos=>{

                console.log(datos)

            })

            .fail(error=>{


                console.log(error)
            })

            let json = JSON.stringify(obj)

            let url = "http://localhost/Restaurante/apiREST/menus.php?API=6"

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

        }else{



        }





    }else{
      

     
        //Poniendo los atributos 


        let id = el[1]

        let obj = {

        id:id

       }

       let json = JSON.stringify(obj)

       url = "http://localhost/Restaurante/apiREST/menus.php?API=2"

       fetch(url,{

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

    
        


        let id = datos.idcomida
        let nombre = datos.nombre
        let ingredientes = datos.ingredientes
        let precio = datos.precio
        let foto = datos.foto
        


        $("#emn").val(nombre)
        $("#emin").val(ingredientes)
        $("#emp").val(precio)
        $("#idme").text(id)


        if(foto == "foto.jpg" || foto == ""){



            //modificando los atributos de la imagen
            $("#comidaf").attr({"src":"../img/comidadefecto.jpg"})

        }else {

            $("#comidaf").attr({"src":"../img/menu/"+datos.foto})

        }


       })

    }


}else {




}


})
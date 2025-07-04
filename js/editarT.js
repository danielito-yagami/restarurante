//para obtener el id 


$("#tablaT").on('click',function(evento){


let elemento = evento.target

if(elemento.id){





    let arreglo = elemento.id.split(".")

    let id = arreglo[1]


    if(arreglo[0] =="editarT"){


        let obj = {id:id}

        let json = JSON.stringify(obj)

        let url = "http://localhost/Restaurante/apiREST/testimonios.php?API=B"

        fetch(url, {

            method : 'POST',
            headers:{"Content-Type":"application/json"},
            body: json

        })
        .then(datos =>{


            return datos.json()
        })
        .then(datos=>{

            let nombreC = datos.nombreT.split(" ")
            let n = nombreC[0]
            let ap = nombreC[1]
            let am = nombreC[2]
            
            $("#etn").val(n)
            $("#etap").val(ap)
            $("#etam").val(am)
            $("#ett").val(datos.comentario)
            $("#numero2").text(datos.idComentario)
        })
        .catch(error=>{

            console.log(error)
        })

     

    }else if(arreglo[0]=="borrarT"){


        let opcion = confirm("¿Desea borrar el colaborador? : "+id)

        if(opcion == true){

            let obj2 = {id:id}

        

            let json2 = JSON.stringify(obj2)
    
    
            let url2 = "http://localhost/Restaurante/apiREST/testimonios.php?API=F"
    
            fetch(url2,{
    
    
                method : 'POST',
                headers:{"Content-Type":"application/json"},
                body: json2
    
            })
            .then(data=>{
    
                return data.json()
    
            })
            .then(data=>{
    
    
                alert(data.res)
                window.location.href = ""
    
            })
            .catch(error=>{
    
                console.log(error)
    
            })
            

        }

       
        

    }


}else{


}


})
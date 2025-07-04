


//Borrando usuarios

$("#users").on('click',(e=>{


    e.preventDefault();



    let element = e.target

    let arreglo = element.id

    let id = arreglo.split(".")

    if(id[0] == "borrarU"){

        let idUser = id[1]
        let opcion = confirm("¿Estás seguro de que deseas borrar a este usuario? "+ idUser);


        if(opcion){


            let obj = {id:idUser}

            let json = JSON.stringify(obj)

            let url = "http://localhost/Restaurante/apiREST/usuarios.php?API=C"

            fetch(url,{

                method : 'POST',
                headers:{"Content-Type":"application/json"},
                body: json

            })
            .then(datos=>{

                return datos.json()
            })
            .then(datos=>{


                let info = datos.Resultado

                if(info == 0){


                    alert("Usuario borrado con éxito")
                    window.location.reload()
                }else{

                    alert("No se pudo borrar el usuario")
                }
            })
            .catch(error=>{


                console.log(error)
            })


        }else{



        }

    }else{



    }

    




}))
//La parte del opcion 

let rol = $("#seleccion")


rol.on('change', function(){

   let  valor = $(this).val()

   //usando esta tecnica para obtener el valor de la opcion seleccionada
   $("#r").text($(this).val())

})




$("#registroU").on('click', (e)=>{

//consumiendo la API
e.preventDefault()
let rol = $("#r").text()
let nombre = $("#inu").val()
let ap = $("#iapu").val()
let am = $("#iamu").val()
let email = $("#iemailu").val()
let password = $("#ipassu").val()


if(nombre == "" || email =="" || password == "default" || rol == "" || ap == "" || am == ""){

alert("Campos obligatorios")

return;

}else{



    let obj = {

        nombre:nombre,
        ap:ap,
        am:am,
        email:email,
        password:password,
        rol:rol
        
        
        }
        
        let json = JSON.stringify(obj)
        
        console.log(json)
        
        let url = "http://localhost/Restaurante/apiREST/usuarios.php?API=B"
        
        
        
        
        fetch(url, {
        
           //Cuando se consulta se envia vacio
        
           method : 'POST',
           headers:{"Content-Type":"application/json"},
           body: json
           
        
        })
        
        .then(datos=>{
        
            return datos.json()
        })
        .then(datos=>{
        
            //Parte para verificar las respuestas de la API 

            let valor = datos.Resultado
            if(valor == 0){

                alert("El correo ya esta registrado intenta otro correo")

            }else if(valor == 2){

                alert("Error en el servidor")
            
            }else{

                alert("Usuario agregado")
                window.location.href = ""

            }


            
           
        })
        
        .catch(error=>{
        
        
            console.log(error)
        })
        
        

}



})


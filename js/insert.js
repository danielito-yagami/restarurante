

//Creando el boton para la funcion 



$("#crearbtn").on('click',function(e){

//Para evitar que la pagina se recargue 
//e.preventDefault()


let titulo = $("#ibt").val()
let descripcion = $("#ibd").val()
let lin = $("#ibl").val()





if(titulo == "" ||  descripcion == "" || lin == ""){

alert("Ingresa todos los datos")

}

else {

//Creando un objeto para insertar usando la api

const obj ={

    titulo:  titulo,
    descripcion:descripcion,
    link:lin

}

json = JSON.stringify(obj)


//usando FECTH para insertar usando la api

url = "http://localhost/Restaurante/apiREST/controlador.php?op=2"

fetch(url,{


method : 'POST',
headers:{"Content-Type":"application/json"},
body: json


})
//Respuestas de las promesas

.then(function(res){
    
    
    return res.json()
    
})
.then(

    res=>{

       
        
        alert(res.valor)
    }
)
.catch((error)=>{

    console.log(error)
})
}





})
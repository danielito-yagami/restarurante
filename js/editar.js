


$("#btnEditar").on('click',function(){

let id = $("#ei").val()

let titulo = $("#etitulo").val()

let des = $("#edescripcion").val()

let  link = $("#elink").val()

//Crear el objeto 


const objx = {

    id:id,
    titulo:titulo,
    descripcion:des,
    link:link
}


json = JSON.stringify(objx)

url = url = "http://localhost/Restaurante/apiREST/controlador.php?op=4"

fetch(url,{

  method:'POST',
  headers:{"Content-Type":"application/json"},
  body: json   
})
.then(function(res){

    return res.json()
})
.then(res=>{


    alert(res.valor)

})
.catch((error)=>{

    console.log(error)
})
})
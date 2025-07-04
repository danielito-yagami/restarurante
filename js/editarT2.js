$("#etestimoniobtn").on('click',function(e){

    let nombre = $("#etn").val()
    let ap = $("#etap").val()
    let am = $("#etam").val()
    let testimonio = $("#ett").val()
    let id = $("#numero2").text()

   
    e.preventDefault()

    let obj = {

        id:id,
        nombre: nombre,
        ap: ap,
        am: am,
        comentario: testimonio


    }

    let json = JSON.stringify(obj)

    url = "http://localhost/Restaurante/apiREST/testimonios.php?API=E"


    fetch(url,{

    method : 'POST',
    headers:{"Content-Type":"application/json"},
    body: json
    })
    .then(datos=>{

        return datos.json()
    })
    .then(datos=>{


        alert(datos.res)
        window.location.href =""
    })
    .catch(error=>{

        console.log(error)
    })

})
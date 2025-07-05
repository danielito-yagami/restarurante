
$("#banner").css({"display":"none"})
$("#colaboradores").css({"display":"none"})
$("#usuarios").css({"display":"none"})
$("#menu").css({"display":"none"})
$("#testimonios").css({"display":"none"})
$("#comentarios").css({"display":"none"})

$("#ocultar").on('click',function(){

$("#mensajeInicio").css({"display":"none"})
$("#banner").css({"display":"block"})
})


$("#btn-banner").on('click',function(e){
//Para no recargar la pagina
e.preventDefault()
$("#mensajeInicio").css({"display":"none"})
$("#banner").css({"display":"block"})
$("#colaboradores").css({"display":"none"})
$("#usuarios").css({"display":"none"})
$("#menu").css({"display":"none"})
$("#testimonios").css({"display":"none"})
$("#comentarios").css({"display":"none"})
})


$("#btn-menu").on('click',function(e){
//Para no recargar la pagina
e.preventDefault()
$("#mensajeInicio").css({"display":"none"})
$("#banner").css({"display":"none"})
$("#colaboradores").css({"display":"none"})
$("#usuarios").css({"display":"none"})
$("#menu").css({"display":"block"})
$("#testimonios").css({"display":"none"})
$("#comentarios").css({"display":"none"})
})



$("#btn-colaboradores").on('click',function(e){
//Para no recargar la pagina
e.preventDefault()
$("#mensajeInicio").css({"display":"none"})
$("#banner").css({"display":"none"})
$("#colaboradores").css({"display":"block"})
$("#usuarios").css({"display":"none"})
$("#menu").css({"display":"none"})
$("#testimonios").css({"display":"none"})
$("#comentarios").css({"display":"none"})
})




$("#btn-usuarios").on('click',function(e){
//Para no recargar la pagina
e.preventDefault()
$("#mensajeInicio").css({"display":"none"})
$("#banner").css({"display":"none"})
$("#colaboradores").css({"display":"none"})
$("#usuarios").css({"display":"block"})
$("#menu").css({"display":"none"})
$("#testimonios").css({"display":"none"})
$("#comentarios").css({"display":"none"})
})


$("#btn-testimonios").on('click',function(e){
//Para no recargar la pagina
e.preventDefault()
$("#mensajeInicio").css({"display":"none"})
$("#banner").css({"display":"none"})
$("#colaboradores").css({"display":"none"})
$("#usuarios").css({"display":"none"})
$("#menu").css({"display":"none"})
$("#testimonios").css({"display":"block"})
$("#comentarios").css({"display":"none"})
})



$("#btn-comentarios").on('click',function(e){
//Para no recargar la pagina
e.preventDefault()
$("#mensajeInicio").css({"display":"none"})
$("#banner").css({"display":"none"})
$("#colaboradores").css({"display":"none"})
$("#usuarios").css({"display":"none"})
$("#menu").css({"display":"none"})
$("#testimonios").css({"display":"none"})
$("#comentarios").css({"display":"block"})
})
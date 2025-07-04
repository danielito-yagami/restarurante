

<br>

<div class="row justify-content-center">
<div class="card">

<div class="card-header">
<button id="agregarT"class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarTestimonios">Agregar testimonios</button>

<div class="card-body">

<div
    class="table-responsive-sm"
>
    <table
        class="table table-light"
    >
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Testimonio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody id="tablaT">
            <?php foreach ($res11 as $valor):?>
            <tr class="">
                <td scope="row"><?php echo $valor->idComentario ;?></td>
                <td scope="row"><?php echo $valor->nombreT ;?></td>
                <td scope="row"><?php echo $valor->comentario ;?></td>
                <td scope="row">
                <button type="submit"id="<?php echo "borrarT.$valor->idComentario";?>" class="btn btn-danger p-2"
                    ><i  id="<?php echo "borrarT.$valor->idComentario";?>"class="fa-solid fa-trash white"></i>
                    </button>
                    <button 
                    data-bs-toggle="modal" 
                    data-bs-target="#editarTestimonios"
                    id="<?php echo "editarT.$valor->idComentario";?>" class="btn btn-info p-2"
                    >
                    <i id="<?php echo "editarT.$valor->idComentario";?>"class="fa-solid fa-pencil white"></i>
                </button>
                </td>
            </tr>
           <?php endforeach?>
        </tbody>
    </table>
</div>



</div>
</div>
</div>

</div>




<!--------------------MODAL AGREGAR REGISTRO-------------------------->


<div class="modal fade" id="agregarTestimonios" tabindex="-1" aria-labelledby="modal" aria-hidden="true">

<div class="modal-dialog">

<div class="modal-content">
<div class="modal-header">
    <!---Aqui va titulo del modal-------->
    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

</div>
<!---------parte del cuerpo--------------->
<div class="modal-body">

<!-----------Formulario --------------------------->

<div class="card">

<h4 class="text-center bg bg-primary white p-4">Nuevo testimonio</h4>

<div class="card-body">

<form action=""  method="post">

<div class="mb-3">
    <label for="titulo" class="form-label">Nombre: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="itn"
        aria-describedby="tituloId"
        placeholder="nombre del cliente"
    />
    <label for="titulo" class="form-label">apellido Paterno: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="itap"
        aria-describedby="tituloId"
        placeholder="Apellido Paterno"
    />
    <label for="titulo" class="form-label">apellido Paterno: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="itam"
        aria-describedby="tituloId"
        placeholder="Apellido Materno"
    />
</div>


<div class="mb-3">
    <label for="descripcion" class="form-label">Testimonio: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="itt"
        aria-describedby="descripcionId"
        placeholder="Testimonio del cliente"
    />
   
</div>


<hr>
<!-------------Boton de envio------------------->
<button id="testimoniobtn"class="btn btn-success">Crear testimonio</button>
<!-----------------------Fin de boton de banner ----------->
</form>

</div>

</div>

<!-----------Formulario --------------------------->


</div>
</div>
</div>
</div>




<!------------------------------------------------------------------------>


<!--------------------MODAL EDITAR REGISTRO-------------------------->


<div class="modal fade" id="editarTestimonios" tabindex="-1" aria-labelledby="modal" aria-hidden="true">

<div class="modal-dialog">

<div class="modal-content">
<div class="modal-header">
    <!---Aqui va titulo del modal-------->
    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

</div>
<!---------parte del cuerpo--------------->
<div class="modal-body">

<!-----------Formulario --------------------------->

<div class="card">

<h4 class="text-center bg bg-primary white p-4">Editar testimonio</h4>
<p id="numero2" class="white"></p>
<div class="card-body">

<form action=""  method="post">

<div class="mb-3">
    <label for="titulo" class="form-label">Nombre: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="etn"
        aria-describedby="tituloId"
        placeholder="nombre del cliente"
    />
    <label for="titulo" class="form-label">apellido Paterno: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="etap"
        aria-describedby="tituloId"
        placeholder="Apellido Paterno"
    />
    <label for="titulo" class="form-label">apellido Paterno: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="etam"
        aria-describedby="tituloId"
        placeholder="Apellido Materno"
    />
</div>


<div class="mb-3">
    <label for="descripcion" class="form-label">Testimonio: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="ett"
        aria-describedby="descripcionId"
        placeholder="Testimonio del cliente"
    />
   
</div>


<hr>
<!-------------Boton de envio------------------->
<button id="etestimoniobtn"class="btn btn-success">Editar testimonio</button>
<!-----------------------Fin de boton de banner ----------->
</form>

</div>

</div>

<!-----------Formulario --------------------------->


</div>
</div>
</div>
</div>

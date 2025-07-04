
<br>

<?php //print_r($resp3);?>

<div class="card">
    <div class="card-header">
    <button id="agregarM"class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarMenu">Agregar comida</button>

    </div>
    <div class="card-body">
       

    <div
        class="table-responsive"
    >
        <table
            class="table table-light"
        >
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">ingredientes</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody id="menuTabla">
                <?php foreach ($resp3 as $receta):?>
                <tr class="">
                    <td scope="row"><?php echo $receta->idcomida?></td>
                    <td scope="row"><?php echo $receta->nombre?></td>
                    <td scope="row"><?php echo $receta->ingredientes?></td>
                    
                    <?php if($receta->foto != "foto.jpg"):?>
                    <td scope="row"><img src="../img/menu/<?php echo $receta->foto?>" alt="" width="150px" height="150px"></td>
                    <?php else:?>
                    <td scope="row"><img src="../img/comidadefecto.jpg" alt="" width="150px" height="150px"></td>
                    <?php endif;?>
                    <td scope="row"><?php echo $receta->precio?></td>
                    <td scope="row">
                    <button type="submit"id="<?php echo "bMenu.$receta->idcomida";?>" class="btn btn-danger p-2"
                    ><i  id="<?php echo "bMenu.$receta->idcomida";?>"class="fa-solid fa-trash white"></i>
                    </button>
                    <button 
                    data-bs-toggle="modal" 
                    data-bs-target="#editarMenu"
                    id="<?php echo "eMenu.$receta->idcomida";?>" class="btn btn-info p-2"
                    >
                    <i id="<?php echo "eMenu.$receta->idcomida";?>"class="fa-solid fa-pencil white"></i>
                </button>
                </td>
                </tr>
               <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    


    </div>
</div>





<!--------------------MODAL AGREGAR REGISTRO-------------------------->


<div class="modal fade" id="agregarMenu" tabindex="-1" aria-labelledby="modal" aria-hidden="true">

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

<h4 class="text-center bg bg-primary white p-4">Nueva Comida</h4>

<div class="card-body">

<form action=""  method="post">

<div class="mb-3">
    <label for="titulo" class="form-label">Nombre: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="imn"
        aria-describedby="tituloId"
        placeholder="nombre de la comida"
    />
    <label for="titulo" class="form-label">Ingredientes: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="imin"
        aria-describedby="tituloId"
        placeholder="Lista de ingredientes"
    />
    <label for="titulo" class="form-label">Precio: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="imp"
        aria-describedby="tituloId"
        placeholder="Precio que tendra"
    />
</div>

<label for="foto">Foto:</label>
<input type="file" name="" id="fotomenu" class="form-control">

<hr>
<!-------------Boton de envio------------------->
<button id="menubtn"class="btn btn-success">Crear comida</button>
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


<div class="modal fade" id="editarMenu" tabindex="-1" aria-labelledby="modal" aria-hidden="true">

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

<h4 class="text-center bg bg-primary white p-4">Editar Comida</h4>
<p id="numero2" class="white"></p>
<div class="card-body">


<img id ="comidaf"src="" alt="" width="190px" height="190px">

<form action=""  method="post">

<p id="idme" class="white"></p>
<div class="mb-3">
    <label for="titulo" class="form-label">Nombre: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="emn"
        aria-describedby="tituloId"
        placeholder="nombre de la comida"
    />
    <label for="titulo" class="form-label">Ingredientes: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="emin"
        aria-describedby="tituloId"
        placeholder="Lista de ingredientes"
    />
    <label for="titulo" class="form-label">Precio: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="emp"
        aria-describedby="tituloId"
        placeholder="Precio que tendra"
    />
</div>


<label for="foto">Foto:</label>
<input type="file" name="" id="efotomenu" class="form-control">

<hr>
<!-------------Boton de envio------------------->
<button id="eMenu"class="btn btn-success">Editar comida</button>
<!-----------------------Fin de boton de banner ----------->
</form>

</div>

</div>

<!-----------Formulario --------------------------->


</div>
</div>
</div>
</div>

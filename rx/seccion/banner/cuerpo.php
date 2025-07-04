

<?php
/*
$sql="CALL qy()";

$con = new Conexion();
//Funcion conect para conectar con la base de datos
$conexion = $con->Conect();

$query = mysqli_query($conexion,$sql);

*/
//Variable del json 
//echo $res;
?>
<br>

<div id="listar"class="row justify-content">



<div class="card">
    <div class="card-header">

   
    <button id="agregar"class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarmodal">Agregar registros</button>

    </div>
    <div class="card-body">
    <div
        class="table-responsive-sm"
    >
        <table
            class="table table-light"
        >
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripcion</th>
                    <th scope¿="col">Enlace</th>
                    <th scope¿="col">Acciones</th>
                </tr>
            </thead>
            <tbody id="tabla">
<!-----Consumiendo los datos en la base de datos--------------------->
<!--------Usando un Fore Each para cada  registro de la base de datos-->
                <?php foreach($res as $row):?>
                    <tr class="">
                    <td scope="row"><?php echo $row[0]?></td>
                    <td scope="row"><?php echo $row[1]?></td></td>
                    <td scope="row"><?php echo $row[2]?></td>
                    <td scope="row"><?php echo $row[3]?></td>
                    <td scope="row">
                    <button type="submit"id="<?php echo "borrar.$row[0]";?>" class="btn btn-danger p-2"
                    ><i  id="<?php echo "borrar.$row[0]";?>"class="fa-solid fa-trash white"></i>
                    </button>
                    <button 
                    data-bs-toggle="modal" 
                    data-bs-target="#editarmodal"
                    id="<?php echo "editar.$row[0]";?>" class="btn btn-info p-2"
                    >
                    <i id="<?php echo "editar.$row[0]";?>"class="fa-solid fa-pencil white"></i>
                </button>
<!------------------------------------------------------------------------>


                    </td>
                </tr>
                <?php endforeach;?>
<!------------------Fin del consumo de la api




                <!---- Parte de php con el ciclo while--
                <?php //Validacion de los datos con mysqli num rows?>
                <?php //if(mysqli_num_rows($query) > 0):?>
                <?php //while($res = mysqli_fetch_assoc($query)):?>
                <tr class="">
                    <td scope="row"><?php echo $res['idBanners']?></td>
                    <td scope="row"><?php echo $res['titulo']?></td></td>
                    <td scope="row"><?php echo $res['descripcion']?></td>
                    <td scope="row"><?php echo $res['link']?></td>
                    <td scope="row">
                    <button class="btn btn-danger p-2"
                    data-bs-toggle="modal" 
                    data-bs-target="#borrarmodal"><i class="fa-solid fa-trash white"></i>
                    </button>
                    <button class="btn btn-success p-2"
                    data-bs-toggle="modal" 
                    data-bs-target="#editarmodal">
                    <i class="fa-solid fa-pencil white"></i>
                    </button>
                    </td>
                </tr>
                <?php //endwhile;?>
                <?php //endif;?>
                ----------------------------->               
            </tbody>
        </table>
    </div>
       
    </div>
    <div class="card-footer text-muted"></div>
</div>


</div>


<!--------------------MODAL AGREGAR REGISTRO-------------------------->


<div class="modal fade" id="agregarmodal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">

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

<h4 class="text-center bg bg-primary white p-4">Nuevo registro</h4>

<div class="card-body">

<form action=""  method="post">

<div class="mb-3">
    <label for="titulo" class="form-label">Titulo: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="ibt"
        aria-describedby="tituloId"
        placeholder="Escribe el titulo del banner"
    />
   
</div>


<div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="ibd"
        aria-describedby="descripcionId"
        placeholder="Escribe la descripcion del banner"
    />
   
</div>


<div class="mb-3">
    <label for="link" class="form-label">Enlace:</label>
    <input
        type="text"
        class="form-control"
        name=""
        id="ibl"
        aria-describedby="linkId"
        placeholder="Escribe el link"
    />
   
</div>
<hr>
<!-------------Boton de envio------------------->
<button id="crearbtn"class="btn btn-success">Crear banner</button>
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






<div class="modal fade" id="editarmodal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">

<div class="modal-dialog">

<div class="modal-content">
<div class="modal-header">

    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

</div>

<div class="modal-body">



<div class="card">

<h4 class="text-center bg bg-primary white p-4">Editar registro</h4>

<div class="card-body">

<form action=""  method="post">
<p id="ei"></p>
<div class="mb-3">
    <label for="titulo" class="form-label">Titulo: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="etitulo"
        aria-describedby="tituloId"
        placeholder="Escribe el titulo del banner"
    />
   
</div>


<div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="edescripcion"
        aria-describedby="descripcionId"
        placeholder="Escribe la descripcion del banner"
    />
   
</div>


<div class="mb-3">
    <label for="link" class="form-label">Enlace:</label>
    <input
        type="text"
        class="form-control"
        name=""
        id="elink"
        aria-describedby="linkId"
        placeholder="Escribe el link"
    />
   
</div>
<hr>

<button id="btnEditar"class="btn btn-success">Editar banner</button>

</form>

</div>

</div>





</div>
</div>
</div>
</div>







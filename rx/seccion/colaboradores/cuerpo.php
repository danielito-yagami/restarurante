

<br>
<div class="card">



<div class="card-body">
       
<button id="formularioC"class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chefs">Agregar chefs</button>

<div class="table-responsive">
    <table
       
        class="table table-light"
    >
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Foto</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Email</th>
                <th scope="col">Redes Sociales</th>
            
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody  id="cola">
            <?php foreach ($res2 as $col) : ?>
            <tr class="">
                <!--id chef--->
                <td scope ="row"><?php echo $col[0]; ?></td>
                <!---Nombre completo --->
                <td scope ="row"><?php echo $col[1]; ?></td>
                <!------Foto ---------->
                <?php if($col[2] !== "Sin foto"):?>
                <td scope ="row"><img id="chefFoto" src="../img/colaboradores/<?php echo $col[2];?>" alt="Usuario con foto" width="100" height="100"></td>
                <?php else: ?>
                <td scope ="row"><img id="chefFoto" src="../img/USUARIOdefecto.jpg" alt="usuario defecto" width="100" height="100"></td>
                <?php endif; ?>
                <td scope ="row"><?php echo $col[3]; ?></td>
                <td scope ="row"><?php echo $col[4]; ?></td>
                <td scope ="row">
                <?php echo $col[5]; ?>
                <br>
                <?php echo $col[6]; ?>
                <br>
                <?php echo $col[7]; ?>
                </td>

           
                <td scope="row">
                    <button type="submit"id="<?php echo "bColaborador.$col[0]";?>" class="btn btn-danger p-2"
                    ><i  id="<?php echo "bColaborador.$col[0]";?>"class="fa-solid fa-trash white"></i>
                    </button>
                    <button 
                    data-bs-toggle="modal" 
                    data-bs-target="#editarC"
                    id="<?php echo "eColaborador.$col[0]";?>" class="btn btn-info p-2"
                    >
                    <i id="<?php echo "eColaborador.$col[0]";?>"class="fa-solid fa-pencil white"></i>
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


<div class="modal fade" id="chefs" tabindex="-1" aria-labelledby="modal" aria-hidden="true">

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

<div class="row d-flex">

<hr>
<h5>Informacion personal</h5>

<label for="nombreId" class="form-label">Nombre: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="in"
        aria-describedby="nombreId"
        placeholder="Escribe el nombre del colaborador"
    />


    <label for="iap" class="form-label">Apellido Paterno: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="iap"
        aria-describedby="apId"
        placeholder="Escribe el apellido paterno"
    />
    <label for="iam" class="form-label">Apellido Materno: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="iam"
        aria-describedby="amId"
        placeholder="Escribe el apellido materno"
    />
    <label for="iemail" class="form-label">Correo electronico: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="iemail"
        aria-describedby="amId"
        placeholder="Escribe el correo electronico"
    />

    <label for="acerca" class="form-label">Descripcion: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="ides"
        aria-describedby="amId"
        placeholder="Acerca del colaborador..."
    />

</div>

<hr>
<h5>Redes sociales</h5>

<div class="row d-flex">
    <label for="instagram" class="form-label">Instagram:</label>
    <input
        type="text"
        class="form-control"
        name=""
        id="ilI"
        aria-describedby="descripcionId"
        placeholder="Link de instagram"
    />

    <label for="facebook" class="form-label">Facebook:</label>
    <input
        type="text"
        class="form-control"
        name=""
        id="ifacebook"
        aria-describedby="descripcionId"
        placeholder="Link de Facebook"
    />

    <label for="linkedin" class="form-label">Linkedin:</label>
    <input
        type="text"
        class="form-control"
        name=""
        id="ilL"
        aria-describedby="descripcionId"
        placeholder="Link de linkedin"
    />

    <label for="foto">Foto:</label>
    <input type="file" name="" id="fotoC" class="form-control">
   
</div>


<hr>
<!-------------Boton de envio------------------->
<button id="registroC"class="btn btn-success">Crear registro</button>
<!-----------------------Fin de boton de banner ----------->
</form>

</div>

</div>

<!-----------Formulario --------------------------->


</div>
</div>
</div>
</div>


<!----------------------------------------------------boton editar ----------------------->


<div class="modal fade" id="editarC" tabindex="-1" aria-labelledby="modal" aria-hidden="true">

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

<h4 class="text-center bg bg-primary white p-4">Editar registro</h4>

<div class="card-body">

<form action=""  method="post">

<div class="row d-flex bg bg-light">

<hr>
<h5>Informacion personal</h5>
<div class="row">
<div class="col-8">
<p id="codigo"class="white"></p>
<label for="foto">Foto:</label>
<br>
<img src="" alt="Foto" width="50" height="50" id="imagenChef">
</div>    
</div>

<input type="file" name="" id="fotoE" class="form-control">
<p id="imgN"class="white"></p>
<label for="nombreId" class="form-label">Nombre: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="en"
        aria-describedby="nombreId"
        placeholder="Escribe el nombre del colaborador"
    />


    <label for="iap" class="form-label">Apellido Paterno: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="eap"
        aria-describedby="apId"
        placeholder="Escribe el apellido paterno"
    />
    <label for="iam" class="form-label">Apellido Materno: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="eam"
        aria-describedby="amId"
        placeholder="Escribe el apellido materno"
    />
    <label for="iemail" class="form-label">Correo electronico: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="eemail"
        aria-describedby="amId"
        placeholder="Escribe el correo electronico"
    />

    <label for="acerca" class="form-label">Descripcion: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="edes"
        aria-describedby="amId"
        placeholder="Acerca del colaborador..."
    />

</div>

<hr>
<h5>Redes sociales</h5>

<div class="row d-flex bg bg-light">
    <label for="instagram" class="form-label">Instagram:</label>
    <input
        type="text"
        class="form-control"
        name=""
        id="elI"
        aria-describedby="descripcionId"
        placeholder="Link de instagram"
    />

    <label for="facebook" class="form-label">Facebook:</label>
    <input
        type="text"
        class="form-control"
        name=""
        id="efacebook"
        aria-describedby="descripcionId"
        placeholder="Link de Facebook"
    />

    <label for="linkedin" class="form-label">Linkedin:</label>
    <input
        type="text"
        class="form-control"
        name=""
        id="elL"
        aria-describedby="descripcionId"
        placeholder="Link de linkedin"
    />

   
   
</div>


<hr>
<!-------------Boton de envio------------------->
<button id="editarbtn1"class="btn btn-success">Editar colaborador</button>
<!-----------------------Fin de boton de banner ----------->
</form>

</div>

</div>

<!-----------Formulario --------------------------->


</div>
</div>
</div>
</div>


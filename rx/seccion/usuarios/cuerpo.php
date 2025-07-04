

<br>
<div class="card">
   <div class="card-header">
   <button id="userA"class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarU">Agregar usuarios</button>

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
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody id="users">
            <?php if($resp5 == "No hay datos"):?>
            <h4 class="text-center">No hay usuarios</h4>
            <?php else:?>
            <?php foreach($resp5 as $user):?>
                <tr class="">
                    <td scope="row"><?php echo $user->idUsuario;?></td>
                    <td scope="row"><?php echo $user->nombre?></td>
                    <td scope="row"><?php echo $user->email;?></td>
                    <td scope="row"><?php echo $user->contrasena;?></td>
                    <td scope="row"><?php echo $user->rol;?></td>
                    <td scope="row">
                        <button type="submit"id="<?php echo "borrarU.$user->idUsuario";?>" class="btn btn-danger p-2"
                    ><i  id="<?php echo "borrarU.$user->idUsuario";?>"class="fa-solid fa-trash white"></i>
                    </button>
                   
                </td>
                </tr>
                <?php endforeach;?>
                <?php endif;?>
            </tbody>
        </table>
     </div>
        
    </div>
</div>




<!--------------------MODAL AGREGAR REGISTRO-------------------------->


<div class="modal fade" id="agregarU" tabindex="-1" aria-labelledby="modal" aria-hidden="true">

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
        id="inu"
        aria-describedby="nombreId"
        placeholder="Escribe el nombre del usuario"
    />


    <label for="iap" class="form-label">Apellido Paterno: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="iapu"
        aria-describedby="apId"
        placeholder="Escribe el apellido paterno"
    />
    <label for="iam" class="form-label">Apellido Materno: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="iamu"
        aria-describedby="amId"
        placeholder="Escribe el apellido materno"
    />
    <label for="iemail" class="form-label">Correo electronico: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="iemailu"
        aria-describedby="amId"
        placeholder="Escribe el correo electronico"
    />

    <label for="acerca" class="form-label">Password: </label>
    <input
        type="text"
        class="form-control"
        name=""
        id="ipassu"
        aria-describedby="amId"
        placeholder="Escribe tu password"
    />

    <select name="" id="seleccion" class="form-select">

    
    <option id="opt"value="default">Selecciona el Rol</option>

    <?php foreach( $res7 as $rol):?>
    <option id="opt"value="<?php echo $rol->rol?>"><?php echo $rol->rol?></option>
    <?php endforeach;?>
   
</select>
    <p class="white" id="r"></p>
</div>

<hr>

</div>


<hr>
<!-------------Boton de envio------------------->
<button id="registroU"class="btn btn-success">Crear usuario</button>
<!-----------------------Fin de boton de banner ----------->
</form>

</div>

</div>

<!-----------Formulario --------------------------->


</div>
</div>
</div>
</div>

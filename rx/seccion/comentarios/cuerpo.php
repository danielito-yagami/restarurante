
<br>


<div class="card">
   <div class="card-header">


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
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody id="comentario">
                <?php if($resp4 == "No hay datos"):?>
            
                    <h4 class="text-center">No hay comentarios</h4>
                <?php else:?>
                <?php foreach($resp4 as $com):?>
                <tr class="">
                    <td scope="row"><?php echo $com->idMensaje;?></td>
                    <td scope="row"><?php echo $com->nombre;?></td>
                    <td scope="row"><?php echo $com->email;?></td>
                    <td scope="row"><?php echo $com->mensaje;?></td>
                    <td scope="row">
                    <button type="submit"id="<?php echo "bMensaje.$com->idMensaje";?>" class="btn btn-danger p-2"
                    ><i  id="<?php echo "bMensaje.$com->idMensaje";?>"class="fa-solid fa-trash white"></i>
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


<?php 
//Recuperando la variable de sesion 

session_start();



if( ($_SESSION["logueado"] != 1) || (empty($_SESSION["logueado"])) ){

header("Location:./login.php");

}else{




include("../apiREST/queryC.php");

include("../apiREST/queryColaboradores.php");
include("../apiREST/queryT.php");
include("../apiREST/queryM.php");
include("../apiREST/queryMe.php");
include("../apiREST/queryU.php");
include("../apiREST/queryR.php");

}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Administrador del sitio web</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />


        <link rel="stylesheet" 
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" 
         referrerpolicy="no-referrer" />
        

        <link rel="stylesheet" href="../css/styles.css">
       
    </head>

    <body>
      

<!--------------Header---Menu------------>
<?php include("../rx/templates/header/header.php");?>
<!---------------------------------------->
<br><br><br><br>
<br>
<div id="mensajeInicio"class="row align-items-md-stretch justify-content-center">
    <div class="col-md-8">
        <div
            class="h-100 p-5 bg-light border rounded-3"
        >
            <h2>Bienvenid@ al administrador <?php echo $_SESSION["user"]?></h2>
            <p>
                Este espacio es para administrar su sitio web
            </p>
          <button id="ocultar"class="btn btn-outline-primary">Iniciar ahora</button>
        </div>
    </div>
   
</div>

<div id="menuX"class="row">
    <div class="col-md-12">
        <div class="h-100 p-5">
          

        <div id="banner">
        <h3 class="text-center sombra white bg bg-primary p-3">Seccion de Banners</h3>
        <?php include("../rx/seccion/banner/cuerpo.php");?>
        </div>
        <div id="colaboradores">
        <h3 class="text-center sombra white bg bg-primary p-3">Seccion de Colaboradores</h3>
        <?php include("../rx/seccion/colaboradores/cuerpo.php");?>
        </div>
        <div id="testimonios">
        <h3 class="text-center sombra white bg bg-primary p-3">Seccion de Testimonios</h3>
        <?php include("../rx/seccion/testimonios/cuerpo.php");?>
        </div>
        <div id="menu">
        <h3 class="text-center sombra white bg bg-primary p-3">Seccion de Menu</h3>
        <?php include("../rx/seccion/menu/cuerpo.php");?>

        </div>
        <div id="comentarios">
        <h3 class="text-center sombra white bg bg-primary p-3">Seccion de bandeja de comentarios</h3>

        <?php include("../rx/seccion/comentarios/cuerpo.php");?>
        </div>
        <div id="usuarios">
        <h3 class="text-center sombra white bg bg-primary p-3">Seccion de Usuarios</h3>
        <?php include("../rx/seccion/usuarios/cuerpo.php");?>
        </div>
       
    </div>
   
</div>


<br><br><br><br><br>

<!----------------footer----------------------------->
<?php include("../rx/templates/footer/footer.php");?>
<!--------------------------------------------------->

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/insert.js"></script>
        <script src="../js/borrar.js"></script>
        <script src="../js/ocultar.js"></script>
        <script src="../js/editar.js"></script>
        <script src="../js/insertColaborador.js"></script>
        <script src="../js/editarC.js"></script>
        <script src="../js/editarC2.js"></script>
        <script src="../js/insertarT.js"></script>
        <script src="../js/editarT.js"></script>
        <script src="../js/editarT2.js"></script>
        <script src="../js/insertarM.js"></script>
        <script src="../js/editarM.js"></script>
        <script src="../js/editarM2.js"></script>
        <script src="../js/borrarMe.js"></script>
        <script src="../js/insertarU.js"></script>
        <script src="../js/eliminarU.js"></script>
    </body>
</html>




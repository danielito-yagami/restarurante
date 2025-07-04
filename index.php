<?php


//include ("./inc/config/conexion.php");

//$conx = new Conexion();

include("./apiREST/queryBanners.php");
include("./apiREST/queryCL.php");
include("./apiREST/queryTL.php");
include("./apiREST/queryML.php");


?>
<!doctype html>
<html lang="en">
    <head>
        <title>Restaurante</title>
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
         <link rel="stylesheet" href="./css/styles.css">
    </head>

    <body>


    <?php include("./rx/templates/menu-nav/nav-bar.php");?>


      
        
        <h1 class="text-center white bg bg-dark f_hangover m-0">Restaurante AmburGer</h1>

        <!----------------Seccion de banner---------->

        <?php include("./rx/seccion/banner/banner.php");?>

    <!-----------------------Fin de banner ------------>

        <section class="container mt-4 text-center" id="idSeccion1">

            <div class="jumbotron bg bg-dark white pt-3">
               
                    <h2 class="f_hangover l_Grd">Bienvenid@ descubre las ricas Amburgers</h2>
                    <p class="f_hangover l_Med">
                        Prueba y disfruta de nuestra experiencia culinaria unica
                    </p>
                   <br>
            </div>
           
        </div>
        </section>


        <!------------CHEFS---------------->


        <?php include("./rx/seccion/colaboradores/chefs.php"); ?>


        <!------------Fin CHEFS---------------->


      <!---------------Testimonios ----------->

        <?php include("./rx/seccion/testimonios/testimonios.php");?>
      <!----------------Fin de testimonios ---------->

<!----------------------Menu----------------->

<?php include("./rx/seccion/menu/menu.php");?>


<!------------------Fin menu------------------------->


<!-------------------Contacto ------------------>

<?php include("./rx/templates/contacto/contacto.php");?>


<!-----------------------Fin contacto ------->


<!--------------- Seccion de Horarios -------->

<?php include("./rx/templates/horario/horario.php");?>

<!--------------------------------------------->

    
     
       <!----------footer--------------------------------->
        
        <?php include("./rx/templates/footer/footer.php");  ?>

        <!-------------------------------------------------->
      
        <!-- Bootstrap JavaScript Libraries -->
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
        <script src="./js/jquery.js"></script>
        <script src="./js/insertMe.js"></script>
    </body>
</html>

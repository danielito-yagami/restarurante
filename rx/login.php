
<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
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
        <link rel="stylesheet" href="../css//styles.css">
    </head>

    <body id="fondo">
      <br><br><br>
      <div class="container">
        <div class="row justify-content-center align-items-center">
          
            
            <div class="col-lg-10 col-md-10 col-sm-9 col-8">
            <div class="card animacion">
            <div class="card-header"><strong>Login</strong></div>
            <div class="card-body">
            

            <p class="text-center">Esta plataforma es una demo para portafolio web</p>
            <br>
            <code>Usuario: prueba@gmail.com
                Contraseña: 1234
            </code>
            <br>
            <br>
            <form action="../apiREST/index.php" method="post">

            <div class="row">


            <div class="col">

            <label for="user" class="form-label">Email</label>
            <input type="text" name="user" id="user"class="form-control" placeholder="Introduce tu email">
            </div>

            <div class="col">

            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password"class="form-control" placeholder="Introduce tu password">

            </div>


            </div>
            <hr>
            <div class="row justify-content-center">

            <div class="col-6">


            <button id="link" class="btn btn-primary">Volver al sitio</button>

            </div>


            <div class="col-6">


            <div class="d-flex justify-content-end">
            <button type="submit"class="btn btn-danger">ingresar</button>

            </div>

            
            </div>

            </div>


            </form>
           
            </div>
        </div>
        </div>

     


        </div>
    
        
       


      </div>

     

    




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
        <script>

        $("#link").on('click',(e)=>{

            e.preventDefault()

           location.replace("../index.php")


        })



        </script>

    </body>
</html>

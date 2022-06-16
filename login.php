<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
    <header class="d-flex justify-content-end px-3 px-lg-5 py-3 ">
        <a href="index.php" class="nav-link color-home">Catálogo</a>
    </header>
  <body class="bg-home color-home">

      <div class="container ">
          <h1 class="text-center py-5">HOME STATIONARY</h1>
       <div class="row">
            <form class="col-12 col-md-8 col-lg-6 mx-auto" method="POST"  >
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo">
                
                </div>
                <div class="mb-3">
                    <label for="contrasenia" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contrasenia"  name ="contrasenia" >
                </div>
                
                <button type="submit" class="btn border color-home w-100" name="login" >Login</button>
            </form>
       </div>
                <?php 
                     include("PHP/crearSession.php");
                 ?>
      </div>
  </body>
</html>
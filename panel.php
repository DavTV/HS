
<!doctype html>
<html lang="en">
  <head>
    <title>Panel Home Stationary</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css"> -->

  <body id="contenedor">
        <?php session_start(); // reanudo la sessión
          if(!isset($_SESSION["usuario"])){
            header("Location: login.php");
          }
    
        ?>

      <!-- <header class="d-flex justify-content-end px-5 py-3 fixed-top bg-home "> -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-home">
            <div class="container-fluid  px-lg-3  ">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="h2  text-center color-home  nav-link" href="#">HOME <span>STATIONAY</span></a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0  d-lg-flex justify-content-end align-items-center w-100">
                  <li class="nav-item ">
                      <a href="index.php" class="nav-link color-home" target="_blank">Catálogo</a> 
                  </li>
                  <li class="nav-item  ">
                      <a href="PHP/destruirSession.php" class="nav-link color-home">Cerrar Sesión</a>         
                  </li>
                  <li class="nav-item ">
                      <strong class="color-home nav-link"><?php echo $_SESSION["usuario"] ?><i class="fa-solid fa-user color-home px-2"></i></strong>
                  </li>
                </ul>

              </div>
            </div>
          </nav>
         
      <!-- </header> -->
    <!-- Bootstrap JavaScript Libraries -->

    <div class="container mt-5">
        <h1 class="text-center py-5">PANEL - HOME STATIONARY</h1>
            <div class="row">
                <form class="col-12 col-md-6 mx-auto mb-5" id="form-producto" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                        <label for="producto" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="producto" name="producto"  required>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" step="any"  required>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoría</label>
                        <select id="categoria" class="form-select" name="categoria" required>
                            <option value="">Elige una categoría</option>
                            <option value="stikers">stikers</option>
                            <option value="papeleria">papelería</option>
                            <option value="ilustraciones">ilustraciones</option>
                            <option value="complementos">complementos</option>
                            <option value="kits">kits</option>
                            <option value="pack">Packs</option>
                        </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label"  for="imagen">Descripción</label>
                      <textarea name="descripcion" class="form-control" id="descripcion" cols="05" rows="5" placeholder="Descripción opcional"></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="form-label"  for="imagen">Carge la imagen</label>
                      <input type="file" class="form-control" id="imagen" name="imagen" required />
                    </div>
                    <div class="mb-3" id="ancla"></div>
                    <button type="subtmit" class="btn border color-home w-100 bg-home" id="btn-d-e" >Agregar Producto</button>
                </form>
                  <div class="alerts" id="alerts"></div>
                </div> 

                <a id="btn-activador"></a>
              <div class="contenedor-tabla table-responsive " id="w-tabla">
              <table class=" text-center  my-2 bg-home rounded  table table-hover w-100 "  id="table">
                    <thead class="color-home border">
                      <tr>
                        <th scope="col ">Imagen</th>
                        <th scope="col ">Producto</th>
                        <th scope="col ">Precio</th>
                        <th scope="col ">Categoría</th>
                        <th scope="col ">Eliminar</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white border" id="tbody">

                    </tbody>
              </table> 
              </div>
                 
               
                              
            </div>
        </div>
        <br><br>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- <script src="JS/pagination.js"></script> --> 
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
      <!-- <script src="JS/jquery.tablesort.min.js"></script>-->
 
     <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>  
    <!-- <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script> -->
    <script src="JS/panelForm.js"></script>
    <script src="JS/panelTabla.js"></script>   
    <script src="JS/panelEliminar.js"></script>   
    <script>
        
       
         $(document).ready(() => {

            $('#res').on('click', () => {
                $(window).trigger('resize');
            });

            $(window).resize(() => {
              if (screen.width < 560){
                $("#w-tabla").addClass("table-responsive")
              } 
              if (screen.width > 560){
                
                $("#w-tabla").remove("table-responsive")

              } 
            })




          
        });
    </script>
  </body>
</html>
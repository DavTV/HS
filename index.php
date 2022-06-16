<!doctype html>
<html lang="en">
  <head>
    <title>Catálogo Home Stationary</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/style.css">
    
    <style>
      .bg-home{
        background-color:#FF5C8D !important; ;
      }
      .color-home{
        color: #FDEFF4!important;
      }
      .bg-home-bajo{
        background-color: #FF85AA;
        
      }
      .mt-10{
        margin-top: 80px;
      }
      .bg-home-segundary{
        background-color: #524A4E !important;
      }
      .pagos img{
        cursor: pointer;
        transition: ll .5s ease;
      }
      .pagos img:hover{
        opacity: .6;;
      }
      .cont-descripcion{
        overflow-y: scroll;
        height: 70px;
      }
      .d-nonec{
        display: none;
      }
      
    </style>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-home">
            <div class="container-fluid  px-lg-3  ">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="h2  text-center color-home  nav-link" href="#">HOME <span>STATIONARY</span></a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0  d-lg-flex justify-content-around align-items-center w-100">
                  <li class="nav-item">
                    <p class=""></p>
                  </li>
                  <li class="nav-item w-100  " >
                    <form class="d-flex " id="form-busqueda">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="input-buscar">
                        <button class="btn color-home border" type="button" data-bs-toggle="modal" data-bs-target="#buscar-produto" id="btn-buscar" >Buscar</button>
                      </form>
                  </li >
                  <li class="nav-item">
                    <div class="login-carrito d-flex align-items-center">
                        <a href="panel.php" class="fs-3 px-3 py-3 py-lg-0" target="_back"><i class="fa-solid fa-user color-home"></i></a>
                        <button class="btn fs-3 px-3 py-3 py-lg-0" data-bs-toggle="modal" data-bs-target="#btn-carrito" id="btn-carrito-open"><i class="fa-solid fa-bag-shopping color-home"></i></button>
                    </div>
                  </li>
                </ul>

              </div>
            </div>
          </nav>

          <!-- modal carrito -->
          <!-- Modal -->
          <div class="modal fade" id="btn-carrito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable  ">
              <div class="modal-content">
                <div class="modal-header bg-home">
                  <h5 class="modal-title color-home " id="exampleModalLabel">CARRITO</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <table class="table text-center ">
                    <thead>
                      <tr>
                        <th scope="col ">Imagen</th>
                        <th scope="col ">Producto</th>
                        <th scope="col ">Precio</th>
                        <th scope="col ">Cantidad</th>
                        <th scope="col ">Eliminar</th>
                      </tr>
                    </thead>
                    <tbody id="tbody">
                      <tr class="d-none" id="alert-tr">
                        <td colspan="6">
                          <div class="alert alert-warning" role="alert">
                            <strong>Aún no hay productos en el carrito!</strong>
                          </div>
                        </td>
                      </tr>
                      <strong>total: S/ <span id="total" >00:00</span></strong>
                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <form class=" text-end w-100">
                      <input type="text" class="form-control" placeholder="Ingrese su nombre" required  id="nombre-cliente">
                      <button type="submit" class="btn bg-home color-home  my-3" id="mandar-pedido"> <i class="fa-brands fa-whatsapp px-2"></i> Realizar pedido</button>
                      <!-- <button type="button" class="btn color-home bg-home-segundary  my-3" id="limpiar-local"> <i class="fa-solid fa-trash-can px-2"></i>Carrito</button> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        <header class="container-fluid mx-auto  py-4 mt-10 row">
            <div class="col-12 col-md-8">
                <div id="carouselExampleControls" class="carousel slide rounded overflow-hidden" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="IMG/SLIDER/slider1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="IMG/SLIDER/slider1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="IMG/SLIDER/slider1.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

            </div>
            <div class="d-none d-md-block col-md-4 ">
                    <img   src="IMG/SLIDER/ilustracion.jpg" class="rounded float-end  w-100 h-100" alt="...">
            </div>

        </header>


        <!-- Modal busqueda -->
        <div class="contenedor-modal-busqueda">
          <div class="modal fade" id="buscar-produto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
          <div class="modal-dialog modal-lg modal-dialog-scrollable" >
            <div class="modal-content">
              <div class="modal-header bg-home ">
                <h5 class="modal-title color-home" id="staticBackdropLabel">Productos encontrados</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" >
                <div class="row" id="modal-busqueda">
                  
                
              
              </div>
              <div class="modal-footer">
             
                    <!-- Modal Descripcion Busqueda -->
                   
              <div class="alert alert-primary w-100 d-none" role="alert" id="alert-adicionales">
                 <strong>Si deseas algún adicional o personalización hacerlo saber en el mensaje a enviar.</strong>
               </div>
                <button type="button" class="btn bg-home color-home" data-bs-dismiss="modal">Cerrar</button>

              </div>
            </div>
          </div>
        </div>
        </div>
     



        <div class="container-fluid py-2 text-white text-center bg-home color-home ">
            <strong>Si deseas algún adicional o personalización hacerlo saber y especificar en el mensaje a enviar.</strong>
        </div>
        <div class="container py-3 my-3 text-center">
            <h2 class="py-3 h1">ESTIMADO CLIENTE</h2>
            <p>Tienda virtual en Trujillo con envio a todo el Peru Stickers NO troquelados Metodos de pago: BBVA,
              BCP, Plin, Yape, Paypal No se hacen devolucione, No se realizan cambios en productos personalizados
              o que nos sean devuelto usados o en mal estado!
            </p>
        </div>
        

        <div class="sliders container-fluid py-3 px-5" id="lista-productos">
          <div class="categorias ">
            <?php
              include("PHP/obtenerProductos.php");
                while($fila = $resultado->fetch_assoc()) {
                    if ($fila['categoria']=="stikers") {
                      ?>
                      <h2 class="py-3">Stikers</h2>

                      <?php
                      break;
                    }
                }
            ?>
            
            <div class="owl-carousel owl-theme">
              <?php include("PHP/obtenerProductos.php");
                while($fila = $resultado->fetch_assoc()) {
                  if ($fila['categoria']=="stikers") {

                  ?>
                  <div class="item border p-2">
                      <div class="imagen">
                          <img src="<?php echo $fila['imagen'] ?>" alt="">
                      </div>
                      <div>
                          <h5><?php echo $fila['producto'] ?></h5>
                          <p>S/ <span><?php echo $fila['precio'] ?></span></p>
                          <?php 
                             if(empty($fila['descripcion'])){
                          ?>    
                           <p class="p-descripcion"><?php echo $fila['descripcion']?></p>
                           
                            
                          <?php
                          }else{
                          ?>
                          <button type="button" class="btn py-2 bg-home-segundary color-home v-descripcion fa-solid fa-eye"  >
                          </button>
                            <p class="p-descripcion d-none"><?php echo $fila['descripcion']?></p>
                                                
                          <?php
                          }
                          ?>
                           <button type="button" class="btn bg-home color-home p-1 personalizacion">Personalizar</button>
                          
                           <div class="mb-3  div-personalizacion d-nonec py-2">
                              <label class="form-label"  for="imagen">personalización</label>
                              <textarea name="personalizacion" class="form-control " id="personalizacion" cols="05" rows="5" placeholder="Personalización opcional"></textarea>
                          </div>

                          <input type="number" name="" id="" class="form-control my-2" value="1" min="1">
                          <button class="btn bg-home color-home w-100 btn-add-carrito" id="<?php echo $fila['id_producto'] ?>"><i class="fa-solid fa-bag-shopping  px-2"></i>Agregar</button>
                      </div>
                     
               </div>
              <?php                    
                  }} ?>
              
          </div>
        </div>
        
          
          <div class="categorias ">
          <?php
              include("PHP/obtenerProductos.php");
                while($fila = $resultado->fetch_assoc()) {
                    if ($fila['categoria']=="papeleria") {
                      ?>
                      <h2 class="py-3">Papelería</h2>

                      <?php
                      break;
                    }
                }
            ?>
            
            <div class="owl-carousel owl-theme">
            <?php include("PHP/obtenerProductos.php");
                while($fila = $resultado->fetch_assoc()) {
                  if ($fila['categoria']=="papeleria") {

                  ?>
                  <div class="item border p-2">
                  <div class="imagen">
                          <img src="<?php echo $fila['imagen'] ?>" alt="">
                      </div>
                      <div>
                          <h5><?php echo $fila['producto'] ?></h5>
                          <p>S/ <span><?php echo $fila['precio'] ?></span></p>
                          <?php 
                             if(empty($fila['descripcion'])){
                          ?>    
                           <p class="p-descripcion"><?php echo $fila['descripcion']?></p>
                           
                            
                          <?php
                          }else{
                          ?>
                          <button type="button" class="btn py-2 bg-home-segundary color-home v-descripcion fa-solid fa-eye"  >
                          </button>
                            <p class="p-descripcion d-none"><?php echo $fila['descripcion']?></p>
                                                
                          <?php
                          }
                          ?>
                           <button type="button" class="btn bg-home color-home p-1 personalizacion">Personalizar</button>
                          
                           <div class="mb-3  div-personalizacion d-nonec py-2">
                              <label class="form-label"  for="imagen">personalización</label>
                              <textarea name="personalizacion" class="form-control " id="personalizacion" cols="05" rows="5" placeholder="Personalización opcional"></textarea>
                          </div>

                          <input type="number" name="" id="" class="form-control my-2" value="1" min="1">
                          <button class="btn bg-home color-home w-100 btn-add-carrito" id="<?php echo $fila['id_producto'] ?>"><i class="fa-solid fa-bag-shopping  px-2"></i>Agregar</button>
                      </div>
               </div>
              <?php                    
                  }} ?>
            
                  
  
          </div>
          </div>

           <div class="categorias ">

            <?php
              include("PHP/obtenerProductos.php");
                while($fila = $resultado->fetch_assoc()) {
                    if ($fila['categoria']=="ilustraciones") {
                      ?>
                      <h2 class="py-3">Ilustraciones Digitales</h2>
                      <?php
                      break;
                    }
                }
            ?>
              <div class="owl-carousel owl-theme">
              <?php include("PHP/obtenerProductos.php");
                while($fila = $resultado->fetch_assoc()) {
                  if ($fila['categoria']=="ilustraciones") {

                  ?>
                  <div class="item border p-2">
                  <div class="imagen">
                          <img src="<?php echo $fila['imagen'] ?>" alt="">
                      </div>
                      <div>
                          <h5><?php echo $fila['producto'] ?></h5>
                          <p>S/ <span><?php echo $fila['precio'] ?></span></p>
                          <?php 
                             if(empty($fila['descripcion'])){
                          ?>    
                            <p class="p-descripcion"><?php echo $fila['descripcion']?></p>
                           
                            
                          <?php
                          }else{
                          ?>
                          <button type="button" class="btn py-2 bg-home-segundary color-home v-descripcion fa-solid fa-eye"  >
                          </button>
                            <p class="p-descripcion d-none"><?php echo $fila['descripcion']?></p>
                                                
                          <?php
                          }
                          ?>
                           <button type="button" class="btn bg-home color-home p-1 personalizacion">Personalizar</button>
                          
                           <div class="mb-3  div-personalizacion d-nonec py-2">
                              <label class="form-label"  for="imagen">personalización</label>
                              <textarea name="personalizacion" class="form-control " id="personalizacion" cols="05" rows="5" placeholder="Personalización opcional"></textarea>
                          </div>

                          <input type="number" name="" id="" class="form-control my-2" value="1" min="1">
                          <button class="btn bg-home color-home w-100 btn-add-carrito" id="<?php echo $fila['id_producto'] ?>"><i class="fa-solid fa-bag-shopping  px-2"></i>Agregar</button>
                      </div>
               </div>
              <?php                    
                  }} ?>
               
            </div>
                  
  
          </div>

          <div class="categorias ">
            
            
            <?php
              include("PHP/obtenerProductos.php");
                while($fila = $resultado->fetch_assoc()) {
                    if ($fila['categoria']=="complementos") {
                      ?>
                      <h2 class="py-3">Complementos</h2>
                      <?php
                      break;
                    }
                }
            ?>
              <div class="owl-carousel owl-theme">
              <?php include("PHP/obtenerProductos.php");
                while($fila = $resultado->fetch_assoc()) {
                  if ($fila['categoria']=="complementos") {

                  ?>
                  <div class="item border p-2">
                  <div class="imagen">
                          <img src="<?php echo $fila['imagen'] ?>" alt="">
                      </div>
                      <div>
                          <h5><?php echo $fila['producto'] ?></h5>
                          <p>S/ <span><?php echo $fila['precio'] ?></span></p>
                          <?php 
                             if(empty($fila['descripcion'])){
                          ?>    
                            <p class="p-descripcion"><?php echo $fila['descripcion']?></p>
                           
                            
                          <?php
                          }else{
                          ?>
                          <button type="button" class="btn py-2 bg-home-segundary color-home v-descripcion fa-solid fa-eye"  >
                          </button>
                            <p class="p-descripcion d-none"><?php echo $fila['descripcion']?></p>
                                                
                          <?php
                          }
                          ?>
                           <button type="button" class="btn bg-home color-home p-1 personalizacion">Personalizar</button>
                          
                           <div class="mb-3  div-personalizacion d-nonec py-2">
                              <label class="form-label"  for="imagen">personalización</label>
                              <textarea name="personalizacion" class="form-control " id="personalizacion" cols="05" rows="5" placeholder="Personalización opcional"></textarea>
                          </div>

                          <input type="number" name="" id="" class="form-control my-2" value="1" min="1">
                          <button class="btn bg-home color-home w-100 btn-add-carrito" id="<?php echo $fila['id_producto'] ?>"><i class="fa-solid fa-bag-shopping  px-2"></i>Agregar</button>
                      </div>
               </div>
              <?php                    
                  }} ?>
               
            </div>
          </div>

           <div class="categorias ">
            
            <?php
              include("PHP/obtenerProductos.php");
                while($fila = $resultado->fetch_assoc()) {
                    if ($fila['categoria']=="kit") {
                      ?>
                      <h2 class="py-3">Kits</h2>
                      <?php
                      break;
                    }
                }
            ?>
              <div class="owl-carousel owl-theme">
              <?php include("PHP/obtenerProductos.php");
                while($fila = $resultado->fetch_assoc()) {
                  if ($fila['categoria']=="kit") {

                  ?>
                  <div class="item border p-2">
                  <div class="imagen">
                          <img src="<?php echo $fila['imagen'] ?>" alt="">
                      </div>
                      <div>
                          <h5><?php echo $fila['producto'] ?></h5>
                          <p>S/ <span><?php echo $fila['precio'] ?></span></p>
                          <?php 
                             if(empty($fila['descripcion'])){
                          ?>    
                            <p class="p-descripcion"><?php echo $fila['descripcion']?></p>
                           
                            
                          <?php
                          }else{
                          ?>
                          <button type="button" class="btn py-2 bg-home-segundary color-home v-descripcion fa-solid fa-eye"  >
                          </button>
                            <p class="p-descripcion d-none"><?php echo $fila['descripcion']?></p>
                                                
                          <?php
                          }
                          ?>
                           <button type="button" class="btn bg-home color-home p-1 personalizacion">Personalizar</button>
                          
                           <div class="mb-3  div-personalizacion d-nonec py-2">
                              <label class="form-label"  for="imagen">personalización</label>
                              <textarea name="personalizacion" class="form-control " id="personalizacion" cols="05" rows="5" placeholder="Personalización opcional"></textarea>
                          </div>

                          <input type="number" name="" id="" class="form-control my-2" value="1" min="1">
                          <button class="btn bg-home color-home w-100 btn-add-carrito" id="<?php echo $fila['id_producto'] ?>"><i class="fa-solid fa-bag-shopping  px-2"></i>Agregar</button>
                      </div>
               </div>
              <?php                    
                  }} ?>
               
            </div>
          </div>

          <div class="categorias ">
         
            <?php
              include("PHP/obtenerProductos.php");
                while($fila = $resultado->fetch_assoc()) {
                    if ($fila['categoria']=="pack") {
                      ?>
                      <h2 class="py-3">Packs</h2>
                      <?php
                      break;
                    }
                }
            ?>
              <div class="owl-carousel owl-theme">
              <?php include("PHP/obtenerProductos.php");
                while($fila = $resultado->fetch_assoc()) {
                  if ($fila['categoria']=="pack") {

                  ?>
                  <div class="item border p-2">
                  <div class="imagen">
                          <img src="<?php echo $fila['imagen'] ?>" alt="">
                      </div>
                      <div>
                          <h5><?php echo $fila['producto'] ?></h5>
                          <p>S/ <span><?php echo $fila['precio'] ?></span></p>
                          <?php 
                             if(empty($fila['descripcion'])){
                          ?>    
                            <p class="p-descripcion"><?php echo $fila['descripcion']?></p>
                           
                            
                          <?php
                          }else{
                          ?>
                          <button type="button" class="btn py-2 bg-home-segundary color-home v-descripcion fa-solid fa-eye"  >
                          </button>
                            <p class="p-descripcion d-none"><?php echo $fila['descripcion']?></p>
                                                
                          <?php
                          }
                          ?>
                           <button type="button" class="btn bg-home color-home p-1 personalizacion">Personalizar</button>
                          
                           <div class="mb-3  div-personalizacion d-nonec py-2">
                              <label class="form-label"  for="imagen">personalización</label>
                              <textarea name="personalizacion" class="form-control " id="personalizacion" cols="05" rows="5" placeholder="Personalización opcional"></textarea>
                          </div>

                          <input type="number" name="" id="" class="form-control my-2" value="1" min="1">
                          <button class="btn bg-home color-home w-100 btn-add-carrito" id="<?php echo $fila['id_producto'] ?>"><i class="fa-solid fa-bag-shopping  px-2"></i>Agregar</button>
                      </div>
               </div>
              <?php                    
                  }} ?>
               
            </div>
          </div>
        </div>

        <div class="modal-descripcion">
        <div class="modal fade " id="modal-descripcion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-home color-home">
                <h5 class="modal-title" id="exampleModalLabel">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="modal-body-des">
                
              </div>
            </div>
          </div>
        </div>
        </div>
        
        <footer class="container-fluid bg-home-segundary color-home m-0 py-4 text-center">
          <div class="row  ">
            <div class="col-12 col-sm-4 py-3 ">
              <h3>Metodos de pago</h3>
              <div class="row d-flex justify-content-center mt-4 pagos  ">
                <img src="IMG/PAGOS/yape.png"  style="width: 65px; height:35px"  alt="">
                <img src="IMG/PAGOS/plin.png"  style="width: 55px; height:30px"  alt="">
              
                <img src="IMG/PAGOS/bcpc.png"  style="width: 55px; height:30px "  alt="">
                <img src="IMG/PAGOS/bbvac.png"  style="width: 55px; height:30px "  alt="">
              </div>
            </div>
            <div class="col-12 col-sm-4 py-3">
              <h3>Datos Generales</h3>
              <p>Trujillo - San Andrés</p>
              <p>Celular -  948 312 329</p>
              <p>Atención - Lun a Dom</p>
              <!-- <p>Horario - 00 am a 00 pm</p> -->
            </div>
            <div class="col-12 col-sm-4 py-3 redes">
              <h3 class="mb-3">Redes sociales</h3>
              <a href="https://www.facebook.com/Home.StationaryPeru" target="_blank"><img src="IMG/REDES/facebook.svg" alt=""></a>
              <a href="https://www.instagram.com/home.stationary/" target="_blank"><img src="IMG/REDES/instagram.svg" alt=""></a>
              <a href="#"><img src="IMG/REDES/tiktok.svg" alt=""></a>
              <a href="https://api.whatsapp.com/send?phone=948312329&text=Hola"><img src="IMG/REDES/whatsapp.svg" alt=""></a>
            </div>
          </div>
        </footer>
      
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
    
    <script src="JS/main.js"></script>
    <script src="JS/buscarProducto.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        // autoplay:true,
        // autoplayTimeout: 2000,
        nav:false,
        
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
    </script>
  </body>
</html>
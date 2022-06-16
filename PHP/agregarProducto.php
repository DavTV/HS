<?php
    include("conexion.php");

    $producto = $_POST["producto"];
    $categoria = $_POST["categoria"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $tipos = ["image/png","image/jpg","image/gif","image/jpeg"];
    $nombre_imagen = $_FILES['file-0']['name'];
    // valida si se encuentra dentro del array
    if(in_array($_FILES['file-0']["type"],$tipos)){
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT']. "/IMG_PRODUCTOS/";
        move_uploaded_file($_FILES['file-0']['tmp_name'],$carpeta_destino.$nombre_imagen);
    
        $consulta = "INSERT INTO producto (categoria, producto, descripcion, precio, imagen ) VALUES ('$categoria', '$producto','$descripcion','$precio','IMG_PRODUCTOS/$nombre_imagen')";
        $resultado = $conex->query($consulta);
        echo "Producto insertado correctamente";    

     }else{
        echo "formato no valido";
     }
    


    
    


?>
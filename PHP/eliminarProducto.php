<?php
    $id_producto = $_GET["producto_id"];
    $imagen = $_GET["imagen"];
    include("conexion.php");
    $consulta  = "DELETE FROM producto WHERE id_producto = '$id_producto'";
    $resultado = mysqli_query($conex, $consulta);
    unlink("../".$imagen);
    echo "Eliminado exitosamente";


?>
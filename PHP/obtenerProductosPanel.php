<?php
    include("conexion.php");

    $consulta = "SELECT * FROM producto ORDER BY id_producto desc";
    $resultado = mysqli_query($conex, $consulta);
  
    $fila = $resultado->fetch_all();
    echo json_encode($fila);

?>
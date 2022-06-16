<?php

    $nombreBusqueda = $_GET["producto"];
    include("conexion.php");
    $consulta = "SELECT * FROM producto WHERE producto LIKE '%$nombreBusqueda%'";
    $resultado = $conex->query($consulta);
    // while($fila = $resultado->fetch_assoc()) {
    //     echo "ID: " . $fila['id_producto'] . ", Nombre: " . $fila['producto'] . ", Precio: " . $fila['precio'] . "<br>";
    // }
    if($resultado){
        $busqueda = $resultado->fetch_all();
        echo json_encode($busqueda);        
    }


?>




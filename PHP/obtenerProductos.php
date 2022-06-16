<?php
    include("conexion.php");
    $consulta = "SELECT * FROM producto ORDER BY id_producto desc";
    $resultado = $conex->query($consulta);
    // while($fila = $resultado->fetch_assoc()) {
    //     echo "ID: " . $fila['id_producto'] . ", Nombre: " . $fila['producto'] . ", Precio: " . $fila['precio'] . "<br>";
    // }

?>
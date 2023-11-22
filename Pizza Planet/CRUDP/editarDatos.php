<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id_Pizza = $_POST['id'];
    $Nombre_Pizza = $_POST['Nombre_Pizza'];
    $Descripcion = $_POST['Descripcion'];
    $Ingredientes  = $_POST['Ingredientes'];
    $Precio = $_POST['Precio'];
    $tamano = $_POST['tamano'];
    $Tiempo_de_coccion  = $_POST['Tiempo_de_coccion'];
    $Calorias_por_porcion  = $_POST['Calorias_por_porcion'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE pizzas SET `Nombre_Pizza`='$Nombre_Pizza', `Descripcion`='$Descripcion', `Ingredientes`='$Ingredientes', `Precio`='$Precio',`tamano`='$tamano',`Tiempo_de_coccion`='$Tiempo_de_coccion',`Calorias_por_porcion`='$Calorias_por_porcion' WHERE id_Pizza = $id_Pizza";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/pizzas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}

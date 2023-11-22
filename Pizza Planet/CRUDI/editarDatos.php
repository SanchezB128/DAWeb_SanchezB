<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $Nombre_Ingrediente = $_POST['Nombre_Ingrediente'];
    $Descripcion = $_POST['Descripcion'];
    $Precio_Unidad = $_POST['Precio_Unidad'];
    $Unidad_medida = $_POST['Unidad_medida'];
    $Stock_disponible = $_POST['Stock_disponible'];
    $fecha_caducidad = $_POST['fecha_caducidad'];
    $Cantidad_Ingrediente = $_POST['Cantidad_Ingrediente'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE ingredientes SET `id_Ingrediente`='$id_Ingrediente',`Nombre_Ingrediente`='$Nombre_Ingrediente',`Descripcion`='$Descripcion',`Precio_Unidad`='$Precio_Unidad',`Unidad_medida`='$Unidad_medida',`Stock_disponible`='$Stock_disponible', `fecha_caducidad` = '$fecha_caducidad', `Cantidad_Ingrediente` = '$Cantidad_Ingrediente'  WHERE id_Ingrediente = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/ingredientes/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}

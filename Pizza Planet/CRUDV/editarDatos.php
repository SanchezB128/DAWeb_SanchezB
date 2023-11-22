<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $Nombre_Proveedor = $_POST['Nombre_Proveedor'];
    $id_Ingrediente = $_POST['id_Ingrediente'];
    $Nombre_Ingrediente = $_POST['Nombre_Ingrediente'];
    $Pais = $_POST['Pais'];
    $Ciudad = $_POST['Ciudad'];
    $Direccion = $_POST['Direccion'];
    $Numero = $_POST['Numero'];


    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE `proveedor` SET `Nombre_Proveedor`='$Nombre_Proveedor',`id_Ingrediente`='$id_Ingrediente',`Nombre_Ingrediente`='$Nombre_Ingrediente',`Pais`='$Pais',`Ciudad`='$Ciudad',`Direccion`='$Direccion',`Numero`='$Numero' WHERE id_Proveedor = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/proveedor/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}

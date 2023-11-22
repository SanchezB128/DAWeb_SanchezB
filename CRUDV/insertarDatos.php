<?php

include "../config/conexion.php";

    $Nombre_Proveedor = $_POST['Nombre_Proveedor'];
    $id_Ingrediente = $_POST['id_Ingrediente'];
    $Nombre_Ingrediente = $_POST['Nombre_Ingrediente'];
    $Pais = $_POST['Pais'];
    $Ciudad = $_POST['Ciudad'];
    $Direccion = $_POST['Direccion'];
    $Numero = $_POST['Numero'];

$sql = "INSERT INTO `proveedor`( `Nombre_Proveedor`, `id_Ingrediente`, `Nombre_Ingrediente`, `Pais`, `Ciudad`, `Direccion`, `Numero`)
    VALUES ('$Nombre_Proveedor','$id_Ingrediente', '$Nombre_Ingrediente', '$Pais', '$Ciudad', '$Direccion', '$Numero')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/proveedor/index.php");
} else {
    echo "Datos no insertados";
}

<?php

include "../config/conexion.php";

$Nombre_Ingrediente = $_POST['Nombre_Ingrediente'];
$Descripcion = $_POST['Descripcion'];
$Precio_Unidad = $_POST['Precio_Unidad'];
$Unidad_medida = $_POST['Unidad_medida'];
$Stock_disponible = $_POST['Stock_disponible'];
$fecha_caducidad = $_POST['fecha_caducidad'];
$Cantidad_Ingrediente = $_POST['Cantidad_Ingrediente'];

$sql = "INSERT INTO `ingredientes`(`Nombre_Ingrediente`, `Descripcion`, `Precio_Unidad`, `Unidad_medida`, `Stock_disponible`, `fecha_caducidad`, `Cantidad_Ingrediente`) VALUES ('$Nombre_Ingrediente','$Descripcion', '$Precio_Unidad', '$Unidad_medida', '$Stock_disponible', '$fecha_caducidad', '$Cantidad_Ingrediente')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/ingredientes/index.php");
} else {
    echo "Datos no insertados";
}

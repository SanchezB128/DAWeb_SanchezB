<?php

include "../config/conexion.php";

    $Nombre_Pizza = $_POST['Nombre_Pizza'];
    $Descripcion = $_POST['Descripcion'];
    $Ingredientes  = $_POST['Ingredientes'];
    $Precio = $_POST['Precio'];
    $tamano = $_POST['tamano'];
    $Tiempo_de_coccion  = $_POST['Tiempo_de_coccion'];
    $Calorias_por_porcion  = $_POST['Calorias_por_porcion'];

$sql = "INSERT INTO `pizzas`(`Nombre_Pizza`, `Descripcion`, `Ingredientes`, `Precio`, `tamano`, `Tiempo_de_coccion`, `Calorias_por_porcion`) VALUES ('$Nombre_Pizza','$Descripcion','$Ingredientes', '$Precio', '$tamano', '$Tiempo_de_coccion', '$Calorias_por_porcion')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/pizzas/index.php");
} else {
    echo "Datos no insertados";
}

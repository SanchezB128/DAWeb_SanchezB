<?php
// Definir la constante base_url para construir enlaces
const base_url = "http://localhost/DAWeb_SanchezB/Pizza PLanet/";

// Configuración de la base de datos
$servername = "localhost";  // Nombre del servidor de la base de datos
$username = "root";         // Nombre de usuario de la base de datos
$password = "";             // Contraseña de la base de datos
$database = "bd_pizzaplanet";  // Nombre de la base de datos

try {
    // Crear una conexión a la base de datos usando MySQLi
    $conexion = new mysqli($servername, $username, $password, $database);

    // Verificar si la conexión es exitosa
    if ($conexion->connect_error) {
        throw new Exception("Error de conexión: " . $conexion->connect_error);
    }

    // Si la conexión es exitosa, no se muestra ningún mensaje.
    // En caso de error, se lanza una excepción y se muestra un mensaje de error.
} catch (Exception $e) {
    echo "Error de conexión: " . $e->getMessage();
}

<?php
include_once("../../config/conexion.php")
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proveedores</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <h1>PIZZA PLANET</h1>
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/pizzas/index.php">PIZZAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/ingredientes/index.php">INGREDIENTES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/proveedor/index.php">PROVEEDOR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container-lg mt-5">
        <a href="crear.php" type="button" class="btn btn-outline-primary mb-3">
            <i class="fa-solid fa-cart-plus fa-beat"></i>
            NUEVO
        </a>
        <h1 class="text-center bg-danger text-light ">LISTADO DE PROVEEDORES</h1>
        <div class="table-responsive-sm">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID PROVEEDOR</th>
                        <th scope="col">NOMBRE PROVEEDOR</th>
                        <th scope="col">ID INGREDIENTE</th>
                        <th scope="col">NOMBRE INGREDIENTE</th>
                        <th scope="col">PAÍS</th>
                        <th scope="col">CIUDAD</th>
                        <th scope="col">DIRECCIÓN</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = $conexion->query("SELECT * FROM proveedor");

                    while ($resultado = $sql->fetch_assoc()) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $resultado['id_Proveedor'] ?></th>
                            <th scope="row"><?php echo $resultado['Nombre_Proveedor'] ?></th>
                            <th scope="row"><?php echo $resultado['id_Ingrediente'] ?></th>
                            <th scope="row"><?php echo $resultado['Nombre_Ingrediente'] ?></th>
                            <th scope="row"><?php echo $resultado['Pais'] ?></th>
                            <th scope="row"><?php echo $resultado['Ciudad'] ?></th>
                            <th scope="row"><?php echo $resultado['Direccion'] ?></th>
                            <th scope="row"><?php echo $resultado['Numero'] ?></th>
                            
                            <th scope="row">
                                <a href="<?php echo base_url; ?>Formularios/proveedor/actualizar.php?Id=<?php echo $resultado['id_Proveedor'] ?>" class="btn btn-outline-warning">
                                    <i class="fa-solid fa-pen-to-square fa-beat"></i>
                                </a>
                                <a href="<?php echo base_url; ?>CRUDV/eliminarDatos.php?Id=<?php echo $resultado['id_Proveedor'] ?>" class="btn btn-outline-danger">
                                    <i class="fa-solid fa-trash fa-beat"></i>
                                </a>
                            </th>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url; ?>js/all.min.js"></script>

</body>

</html>
<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
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

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR INGREDIENTES</h5>
                        <form action="<?php echo base_url; ?>CRUDI/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM ingredientes WHERE id_Ingrediente =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id_Ingrediente'] ?>">
                            <div class="mb-3">
                                <label for="Nombre_Ingrediente" class="form-label">Nombre ingrediente</label>
                                <input type="text" class="form-control" name="Nombre_Ingrediente" id="Nombre_Ingrediente" placeholder="Nombre ingrediente" value="<?php echo $row['Nombre_Ingrediente'] ?>">
                            </div>   
                            <div class="mb-3">
                                <label for="Descripcion" class="form-label">Descripción</label>
                                <input type="text" class="form-control" name="Descripcion" id="Descripcion" placeholder="Descripción" value="<?php echo $row['Descripcion'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Precio_Unidad" class="form-label">Precio por unidad</label>
                                <input type="text" class="form-control" name="Precio_Unidad" id="Precio_Unidad" placeholder="Precio por unidad" value="<?php echo $row['Precio_Unidad'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Unidad_medida" class="form-label">Unidad medida</label>
                                <input type="text" class="form-control" name="Unidad_medida" id="Unidad_medida" placeholder="Unidad de medida" value="<?php echo $row['Unidad_medida'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Stock_disponible" class="form-label">Stock disponible</label>
                                <input type="text" class="form-control" name="Stock_disponible" id="Stock_disponible" placeholder="stock disponible" value="<?php echo $row['Stock_disponible'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_caducidad" class="form-label">Fecha de caducidad</label>
                                <input type="date" class="form-control" name="fecha_caducidad" id="fecha_caducidad" placeholder="Fecha de caducidad" value="<?php echo $row['fecha_caducidad'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Cantidad_Ingrediente" class="form-label">Cantidad de ingrediente</label>
                                <input type="text" class="form-control" name="Cantidad_Ingrediente" id="Cantidad_Ingrediente" placeholder="Cantidad de ingrediente" value="<?php echo $row['Cantidad_Ingrediente'] ?>">
                            </div>

                            <div class="text-center">
                                <a href="../ingredientes/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>

</body>

</html>
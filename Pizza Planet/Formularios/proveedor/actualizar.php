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
                        <h5 class="card-title text-center">ACTUALIZAR PROVEEDOR</h5>
                        <form action="<?php echo base_url; ?>CRUDV/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM proveedor WHERE id_Proveedor =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id_Proveedor'] ?>">
                            
                            <div class="mb-3">
                                <label for="Nombre_Proveedor" class="form-label">Nombre proveedor</label>
                                <input type="text" class="form-control" id="Nombre_Proveedor" name="Nombre_Proveedor" placeholder="Nombre del proveedor" value="<?php echo $row['Nombre_Proveedor'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="id_Ingrediente" class="form-label">ID ingrediente</label>
                                <input type="text" class="form-control" name="id_Ingrediente" id="id_Ingrediente" placeholder="ID ingrediente" value="<?php echo $row['id_Ingrediente'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Nombre_Ingrediente" class="form-label">Nombre de ingrediente</label>
                                <input type="text" class="form-control" name="Nombre_Ingrediente" id="Nombre_Ingrediente" placeholder="Nombre de ingrediente" value="<?php echo $row['Nombre_Ingrediente'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Pais" class="form-label">Pais</label>
                                <input type="text" class="form-control" id="Pais" name="Pais" placeholder="Pais" value="<?php echo $row['Pais'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Ciudad" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ciudad" value="<?php echo $row['Ciudad'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" name="Direccion" id="Direccion" placeholder="Dirección" value="<?php echo $row['Direccion'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Numero" class="form-label">Numero</label>
                                <input type="text" class="form-control" name="Numero" id="Numero" placeholder="Numero" value="<?php echo $row['Numero'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../ventas/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
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
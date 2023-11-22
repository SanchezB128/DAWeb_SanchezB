<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar pizza</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

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
                        <h5 class="card-title text-center">REGISTRAR PIZZA</h5>
                        <form action="../../CRUDP/insertarDatos.php" method="POST">
                        <div class="mb-3">
                                <label for="Nombre_Pizza" class="form-label">Nombre de la pizza</label>
                                <input type="text" class="form-control" id="Nombre_Pizza" name="Nombre_Pizza" placeholder="Nombre de la pizza">
                            </div>
                            <div class="mb-3">
                                <label for="Descripcion" class="form-label">Descripción</label>
                                <input type="text" class="form-control" name="Descripcion" id="Descripcion" placeholder="Descripción">
                            </div>
                            <div class="mb-3">
                                <label for="Ingredientes" class="form-label">Ingredientes</label>
                                <input type="text" class="form-control" name="Ingredientes" id="Ingredientes" placeholder="Ingredientes">
                            </div>
                            <div class="mb-3">
                                <label for="Precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="Precio" id="Precio" placeholder="Precio"\>
                            </div>
                            <div class="mb-3">
                                <label for="tamano" class="form-label">Tamaño</label>
                                <input type="text" class="form-control" name="tamano" id="tamano" placeholder="Tamaño">
                            </div>
                            
                            <div class="mb-3">
                                <label for="Tiempo_de_coccion" class="form-label">Tiempo de cocción</label>
                                <input type="text" class="form-control" name="Tiempo_de_coccion" id="Tiempo_de_coccion" placeholder="Tiempo de cocción">
                            </div>
                            <div class="mb-3">
                                <label for="Calorias_por_porcion" class="form-label">Calorias por porción</label>
                                <input type="text" class="form-control" name="Calorias_por_porcion" id="Calorias_por_porcion" placeholder="Calorias por porción">
                            </div>
                            <div class="text-center">
                                <a href="../pizzas/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>
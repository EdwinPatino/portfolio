<?php 
    $pg = "index";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="index">
    <?php include_once "header.php" ?>
    <main>
        <div class="container tex-center">
            <div class="row">
                <div class="col-12 mt-3 text-center div-cohete">
                    <a href="proyectos.php">
                        <img src="images/cohete.svg" alt="Proyectos" class="cohete">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 my-3 mt-sm-5 text-center offset-sm-3">
                    <div class="welcome">
                        <p class="bienvenido p-1">Bienvenid@ a mi sitio web sobre desarrollo.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="proyectos.php" class="btn btn-inicio shadow">Conoce mis proyectos</a>
                </div>
            </div>
        </div>
    </main>
    <?php include_once "footer.php" ?>
</body>
</html>
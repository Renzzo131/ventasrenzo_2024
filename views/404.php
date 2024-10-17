<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>plantilla/style.css">
</head>
<body>
    <div class="container-fluid d-flex align-items-center" id="error">
        <div class="container col-4 m-0 text-center">
            <h2>La página que intentas solicitar no está en el servidor</h2>
            <p class="mt-2 mb-2">Vuelve con nosotros</p>
            <div class="col-12 mt-2 mb-2">
                <img src="<?php echo BASE_URL;?>plantilla/images/flecha.png" alt="flecha" style="height: 20px; width: 20px;">
            </div>
            <a href="../index.php" class="btn btn-dark">Regresar</a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
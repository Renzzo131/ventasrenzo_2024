<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="loguin row">
            <div class="col-6">
                <img src="<?php echo BASE_URL;?>assets/images/minimal.png" class="img-fluid" alt="portada">
            </div>
            <form action="" class="col-6 row" id="formularioLogin">
                <div class="col-12 text-center">
                    <h2>LOGIN</h2>
                </div>
                <div class="col-12">
                    <label for="usuario" class="form-label">Usuario:</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="col-12">
                    <label for="pass" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="pass" name="pass" required>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input type="checkbox" id="acepto" class="form-check-input" required>
                        <label for="acepto" class="form-check-label">Acepto los <a href="">Términos y condiciones</a></label>
                    </div>
                </div>
                <div class="col-8">
                    <a href="<?php echo BASE_URL;?>producto" class="btn btn-primary">Iniciar sesión</a>
                    <!--<button type="submit" class="btn btn-primary">Iniciar sesión</button>-->
                </div>
            </div>
            </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
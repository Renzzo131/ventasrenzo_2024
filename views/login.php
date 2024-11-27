
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100" style="background-color: #f4f6f9;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="login-container row g-0">
                    <div class="col-md-6 login-image" style="background-image: url('<?php echo BASE_URL; ?>assets/images/11.jpg');">
                        <!-- Imagen de fondo definida por CSS -->
                    </div>
                    
                    <div class="col-md-6 login-form d-flex align-items-center">
                        <form id="formularioLogin" class="w-100">
                            <div class="text-center mb-4">
                                <h2 class="login-header">Iniciar Sesión</h2>
                            </div>
                            
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control" id="usuario" name="usuario" required placeholder="Ingrese su usuario">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="pass" class="form-label">Contraseña</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" class="form-control" id="pass" name="pass" required placeholder="Ingrese su contraseña">
                                </div>
                            </div>
                            
                            <div class="d-grid">
                                <a href="<?php echo BASE_URL; ?>producto" class="btn btn-login">
                                    Iniciar Sesión
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="<?php echo BASE_URL; ?>views/js/functions_login.js"></script>
</body>
</html>
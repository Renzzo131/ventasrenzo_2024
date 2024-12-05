<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background: linear-gradient(135deg, #f4f6f9 50%, #ffffff 50%);
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .basketball-icon {
            width: 150px;
            height: 150px;
            background: url('https://cdn-icons-png.flaticon.com/512/7321/7321973.png') no-repeat center;
            background-size: contain;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 6rem;
            font-weight: bold;
            color: #dc6435;
            margin: 0;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-size: 1.75rem;
            color: #333333;
            margin: 20px 0;
        }
        p {
            font-size: 1rem;
            color: #555555;
            margin: 10px 0 20px;
        }
        .btn {
            background: #dc6435;
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 50px;
            padding: 10px 30px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #e67e22;
        }
        @media (max-width: 576px) {
            h1 {
                font-size: 4rem;
            }
            h2 {
                font-size: 1.25rem;
            }
            p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <main>
        <div class="basketball-icon"></div>
        <h1>404</h1>
        <h2>¡Ups! Canasta fuera de lugar</h2>
        <p>La página que buscas no está disponible. Es como intentar encestar desde fuera de la cancha.</p>
        <a href="<?php echo BASE_URL; ?>producto" class="btn">Regresar al inicio</a>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

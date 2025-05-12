<?php 
    require_once '../app/config/procesar_inicio.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="/css/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div id="container-inicio-sesion">
        <form action="/inicio_proceso" class="register-form text-center" method="POST">
            <div class="row-1 mb-4">
                <h1 >Iniciar sesión
                    <a href="inicio">
                        <img id="logo" src="img/LogoDef.png">
                    </a>
                </h1>
            </div>
            <div class="row-2 mb-4">
                <label class="datos-usuario1" for="email">Email</label>
                <br>
                <input type="text" id="email" name="email" required class="form-control">
            </div>
            <div class="row-3 mb-4">
                <label class="datos-usuario2" for="password">Contraseña</label>
                <br>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="hidden" id="InicioSesion" name="InicioSesion" value="InicioSesion">
            <div class="row-4 mb-4">
                <button type="submit" href="principal" class="enviar" data-hover="¡Iniciar Sesión!">¡GymPhysical!</button>
            </div>
            <p>¿No tienes cuenta aún?<a href="registro">Registrate ahora</a></p>
        </form>
    </div>
</body>

</html>
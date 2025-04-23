<?php
//require_once '../app/config/procesar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">S
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="/css/registro.js"></script>
    <link rel="stylesheet" href="/css/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div id="container-registro-sesion">
        <form method="POST" action="registro_proceso" class="register-form" id="formulario">

            <div class="row mb-4 align-items-center">
                <div class="col-6">
                    <h1>Registrarse</h1>
                </div>
                <div class="col-6">
                    <a href="..">
                        <img id="logo" class="img-fluid" alt="Imagen responsive" src="/img/LogoDef.png">
                    </a>
                </div>
            </div>

            <div class="input-container">
                <input type="text" id="nombre" name="nombre" required class="form-control" placeholder=" ">
                <label for="nombreCompleto">Nombre completo</label>
            </div>

            <div class="input-container">
                <input type="text" id="apellido" name="surname" required class="form-control" placeholder=" ">
                <label for="apellido">Apellido</label>
            </div>

            <div class="input-container">
                <input type="email" id="email" name="email" required class="form-control" placeholder=" ">
                <label for="email">Correo electrónico</label>
            </div>

            <div class="input-container">
                <input type="password" id="password" name="password" required class="form-control" placeholder=" ">
                <label for="password">Contraseña</label>
            </div>

            <div class="input-container">
                <input type="password" id="confirmpassword" name="confirmpassword" required class="form-control"
                    placeholder=" ">
                <label for="confirm-password">Confirmar contraseña</label>
            </div>

            <div class="mb-4 terms-container">
                <a class="terms-text" href="../html/privacidad/TerminosyCondiciones.html">Acepto los terminos y
                    condiciones</a>
                <div class="input_wrapper">
                    <input type="checkbox" class="switch_4" required>
                    <svg class="is_checked" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 426.67 426.67">
                        <path
                            d="M153.504 366.84c-8.657 0-17.323-3.303-23.927-9.912L9.914 237.265c-13.218-13.218-13.218-34.645 0-47.863 13.218-13.218 34.645-13.218 47.863 0l95.727 95.727 215.39-215.387c13.218-13.214 34.65-13.218 47.86 0 13.22 13.218 13.22 34.65 0 47.863L177.435 356.928c-6.61 6.605-15.27 9.91-23.932 9.91z" />
                    </svg>
                    <svg class="is_unchecked" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.982 212.982">
                        <path
                            d="M131.804 106.49l75.936-75.935c6.99-6.99 6.99-18.323 0-25.312-6.99-6.99-18.322-6.99-25.312 0L106.49 81.18 30.555 5.242c-6.99-6.99-18.322-6.99-25.312 0-6.99 6.99-6.99 18.323 0 25.312L81.18 106.49 5.24 182.427c-6.99 6.99-6.99 18.323 0 25.312 6.99 6.99 18.322 6.99 25.312 0L106.49 131.8l75.938 75.937c6.99 6.99 18.322 6.99 25.312 0 6.99-6.99 6.99-18.323 0-25.313l-75.936-75.936z"
                            fill-rule="evenodd" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <button type="submit" data-hover="¡Regístrate!"  onclick="chechForm()">Empieza ya!</button>
        </form>
    </div>
</body>

</html>
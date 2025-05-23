<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Physical</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/header_inicio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            padding-top: 80px;
        }
    </style>
</head>
<!-- este es el simple header que cargamos cuando SI hemos iniciado sesion -->
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top rounded-navbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-li" href="principal">
                                <img class="logo1" src="../../content/LogoDef.png" alt="Imagen del logo">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-lin" href="producto">Entrenamientos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-lin" href="suplementos">Suplementos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-lin" href="metodologia">Metodología</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-lin" href="nutricion">Nutrición</a>
                        </li>
                        <li class="nav-item">
                            <a id="logout" href="logout">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
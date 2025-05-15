<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();
if (!isset($_SESSION['usuario_email']) || !isset($_SESSION['usuario_id'])) {
    header("Location: /inicioSesion");
    exit;
}

require_once APP . '/views/inc/header_inicio.php';
?>

<body>
    <section class="py-5 text-center bg-light">
        <div class="container">
            <h1 class="display-4">Bienvenido a Gym Physical</h1>
            <p class="lead">Tu espacio para registrar, analizar y optimizar tus entrenamientos.</p>
            <a href="/producto" class="btn btn-primary btn-lg mt-3">Empezar mi entrenamiento</a>
        </div>
    </section>

    <section class="py-5 bg-white text-center">
        <div class="container">
            <h2 class="mb-4">¿Qué puedes hacer aquí?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Organiza tus rutinas</h5>
                            <p class="card-text">Añade ejercicios personalizados y agrúpalos por fecha, tipo o grupo
                                muscular.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Analiza tu progreso</h5>
                            <p class="card-text">Compara tus entrenamientos por fechas con gráficos claros y visuales.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Accede desde cualquier lugar</h5>
                            <p class="card-text">Tu información se guarda online. Revisa o edita desde cualquier
                                dispositivo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 bg-light text-center">
        <div class="container">
            <h4 class="mb-3">¿Listo para mejorar tu rendimiento?</h4>
            <a href="/mi_entrenamiento" class="btn btn-success btn-lg">Ver mi historial</a>
        </div>
    </section>

    <?php require_once APP . '/views/inc/footer.php'; ?>
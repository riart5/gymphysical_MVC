<?php
if (isset($_SESSION['usuario_email'])) {
    require_once APP . '/views/inc/header_inicio.php';
} else {
    require_once APP . '/views/inc/header.php';
}
?>

<body style="margin: 0; padding: 0;">

    <!-- Fondo degradado + sección principal -->
    <section class="d-flex flex-column justify-content-between"
        style="min-height: 100vh; background: linear-gradient(to bottom, #1cb7c2, white); padding-top: 100px;">
        <div class="container text-center my-auto">
            <h1 class="display-4 fw-bold text-white">Bienvenido a Gym Physical</h1>
            <p class="lead text-dark">Crea, guarda y compara tus entrenamientos de forma personalizada y visual.</p>
            <a href="/registro" class="btn btn-azul-gym btn-lg mt-3">Empieza ahora</a>
        </div>

        <!-- Sección explicativa -->
        <section class="py-5 bg-light mt-auto">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2>¿Qué es Gym Physical?</h2>
                        <p class="lead">
                            Es una herramienta intuitiva para organizar tus rutinas, registrar tu progreso
                            y comparar tus entrenamientos por fechas. Ideal para cualquier nivel de entrenamiento.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h2>¿Qué hacemos en GymPhysical?</h2>
                        <p class="lead">
                            GymPhysical te ayuda a organizar tus rutinas, seguir tu evolución y motivarte viendo avances
                            en tiempo real. ¡Cada ejercicio cuenta!
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <?php require_once APP . '/views/inc/footer.php'; ?>
</body>
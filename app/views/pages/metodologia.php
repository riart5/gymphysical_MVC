<?php require_once APP . '/views/inc/header_condicional.php'; ?>
<body>
    <section class="py-5 bg-light" id="metodologia">
        <div class="container">
            <h2 class="mb-4 text-center">Nuestra Metodología</h2>

            <div class="row text-center">
                <!-- Paso 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <i class="fas fa-user-check fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Evaluación Inicial</h5>
                            <p class="card-text">Analizamos tu estado físico, nivel y objetivos para crear un plan totalmente personalizado.</p>
                        </div>
                    </div>
                </div>

                <!-- Paso 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <i class="fas fa-dumbbell fa-3x mb-3 text-success"></i>
                            <h5 class="card-title">Plan de Entrenamiento</h5>
                            <p class="card-text">Recibe una rutina adaptada a tu meta: pérdida de grasa, musculación o mantenimiento.</p>
                        </div>
                    </div>
                </div>

                <!-- Paso 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <i class="fas fa-video fa-3x mb-3 text-warning"></i>
                            <h5 class="card-title">Videos y Guías</h5>
                            <p class="card-text">Cada ejercicio viene con vídeo explicativo para que entrenes seguro y con técnica.</p>
                        </div>
                    </div>
                </div>

                <!-- Paso 4 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <i class="fas fa-chart-line fa-3x mb-3 text-danger"></i>
                            <h5 class="card-title">Seguimiento de Progreso</h5>
                            <p class="card-text">Actualizamos tus rutinas según tus avances y te guiamos en todo momento.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <h4>¿Listo para empezar tu transformación?</h4>
                <a href="registro" class="btn btn-azul-gym mt-3">Empieza ahora</a>
            </div>
        </div>
    </section>
</body>

<?php require_once APP . '/views/inc/footer.php'; ?>

<?php require_once APP . '/views/inc/header_condicional.php'; ?>

<body>
    <section class="py-5 bg-light" style="margin-top: 50px">
        <div class="container">
            <h2 class="text-center text-primary fw-bold mb-4">Nuestra Metodología</h2>
            <p class="lead text-center mb-5">
                GymPhysical es tu plataforma de entrenamiento personalizada. Hemos creado una experiencia pensada para
                que planifiques, controles y mejores tus rutinas con facilidad, tanto si eres principiante como
                avanzado.
            </p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-dumbbell fa-2x text-primary mb-3"></i>
                            <h5 class="card-title">Organiza tu Entrenamiento</h5>
                            <p class="card-text">Selecciona ejercicios por grupos musculares y añade series,
                                repeticiones y peso. Todo queda guardado y ordenado por fecha.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-line fa-2x text-primary mb-3"></i>
                            <h5 class="card-title">Visualiza tu Progreso</h5>
                            <p class="card-text">Gracias a las gráficas integradas, podrás comparar tu rendimiento entre
                                sesiones para ver cómo evolucionas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-heartbeat fa-2x text-primary mb-3"></i>
                            <h5 class="card-title">Enfoque Saludable</h5>
                            <p class="card-text">Integramos consejos de nutrición y suplementos que puedes consultar
                                para complementar tu rutina de forma segura y eficaz.</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="fw-bold text-primary">¿Por qué elegir GymPhysical?</h4>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item">Entrenamientos personalizados y visuales</li>
                        <li class="list-group-item">Seguimiento por fechas y grupos musculares</li>
                        <li class="list-group-item">Gráficas comparativas fáciles de interpretar</li>
                        <li class="list-group-item">Diseño intuitivo, pensado para el día a día</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="../../content/metodologia.png" alt="Metodología GymPhysical" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>
</body>

<?php require_once APP . '/views/inc/footer.php'; ?>
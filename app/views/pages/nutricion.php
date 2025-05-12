<?php require_once APP . '/views/inc/header_condicional.php'; ?>

<body>
    <section class="py-5 bg-light" id="nutricion">
        <div class="container">
            <h2 class="mb-4 text-center">Nutrición y Rendimiento</h2>
            <p class="lead text-center mb-5">
                Una buena alimentación es la base de tu progreso. Aquí te ofrecemos consejos y recursos para complementar tu entrenamiento con una nutrición adecuada.
            </p>

            <div class="row row-cols-1 row-cols-md-2 g-4">

                <!-- Tarjeta 1 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">🍗 Macronutrientes</h5>
                            <p class="card-text">
                                Aprende qué son las proteínas, carbohidratos y grasas. Saber cómo equilibrarlos te ayudará a alcanzar tus objetivos más rápido.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">🧠 Planificación de comidas</h5>
                            <p class="card-text">
                                Te damos ideas para organizar tus comidas semanales de forma sencilla, sin necesidad de dietas estrictas.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">💧 Hidratación</h5>
                            <p class="card-text">
                                Mantente bien hidratado durante el día y durante el entrenamiento. El agua es clave para la energía y la recuperación.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">💊 Suplementos básicos</h5>
                            <p class="card-text">
                                ¿No sabes por dónde empezar? Aquí te explicamos qué suplementos son útiles realmente: proteína, creatina, omega-3...
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Recursos útiles -->
            <div class="text-center mt-5">
                <h4>🔗 Recursos útiles</h4>
                <p>
                    Recomendamos apps como <a href="https://www.myfitnesspal.com/" target="_blank">MyFitnessPal</a> para controlar tus comidas o <a href="https://www.yazio.com/es" target="_blank">Yazio</a> si buscas recetas saludables.
                </p>
            </div>
        </div>
    </section>
</body>

<?php require_once APP . '/views/inc/footer.php'; ?>

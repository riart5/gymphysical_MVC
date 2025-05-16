<?php
if (isset($_SESSION['usuario_email'])) {
    require_once APP . '/views/inc/header_inicio.php';
} else {
    require_once APP . '/views/inc/header.php';
}
?>

<body>
    <section class="py-5 bg-light" style="margin-top: 50px">
        <div class="container">
            <h2 class="text-center mb-4">Conoce a nuestra nutricionista</h2>
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="fw-bold">Sara Valtini Marín</h4>
                    <p class="lead">Graduada en Nutrición Humana y Dietética por la Universidad de Barcelona, Sara Valtini Marín te
                        orientará hacia hábitos saludables para complementar tus entrenamientos de forma efectiva.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Tipos de dieta que ofrecemos</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- Dieta 1 -->
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Dieta de Volumen</h5>
                            <p class="card-text">Ideal para quienes buscan ganar masa muscular. Rica en calorías,
                                proteínas y carbohidratos complejos. Incluye comidas frecuentes, batidos post-entreno y
                                snacks ricos en energía.</p>
                        </div>
                    </div>
                </div>
                <!-- Dieta 2 -->
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Dieta de Definición</h5>
                            <p class="card-text">Diseñada para reducir grasa corporal manteniendo la masa muscular. Alta
                                en proteínas, baja en azúcares y grasas, y con control de calorías. Se adapta según el
                                gasto energético.</p>
                        </div>
                    </div>
                </div>
                <!-- Dieta 3 -->
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Dieta Vegetariana Fitness</h5>
                            <p class="card-text">Plan basado en vegetales, con alto contenido proteico usando legumbres,
                                tofu, huevos, frutos secos y derivados. Equilibrada y energética para mantener el
                                rendimiento deportivo.</p>
                        </div>
                    </div>
                </div>
                <!-- Dieta 4 -->
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Dieta para Principiantes</h5>
                            <p class="card-text">Una guía accesible para quienes se inician en el mundo fitness.
                                Explicaciones claras, platos simples y adaptaciones para el día a día sin
                                complicaciones.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php require_once APP . '/views/inc/footer.php'; ?>
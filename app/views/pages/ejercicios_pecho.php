<?php require_once APP . '/views/inc/header_condicional.php'; 
if (!isset($_SESSION['mi_entrenamiento'])) {
    $_SESSION['mi_entrenamiento'] = [];
}

// Procesar si se ha añadido un ejercicio
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ejercicio'])) {
    $ejercicio = $_POST['ejercicio'];
    if (!in_array($ejercicio, $_SESSION['mi_entrenamiento'])) {
        $_SESSION['mi_entrenamiento'][] = $ejercicio;
    }
}

?>

<body>
    <section class="py-5 bg-light" id="ejercicios-pecho">
        <div class="container">
            <h2 class="mb-4 text-center">Ejercicios para Pecho</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <!-- Ejercicio 1 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="/public/content/press-banca.jpg" class="card-img-top" alt="Press banca">
                        <div class="card-body text-center">
                            <h5 class="card-title">Press de Banca</h5>
                            <p class="card-text">Ejercicio básico para fuerza y volumen en el pectoral.</p>
                            <form method="POST">
                                <input type="hidden" name="ejercicio" value="Press de Banca">
                                <button type="submit" class="btn btn-azul-gym">Añadir a mi entrenamiento</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Ejercicio 2 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="/public/content/aperturas.jpg" class="card-img-top" alt="Aperturas con mancuernas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Aperturas con mancuernas</h5>
                            <p class="card-text">Estira y trabaja la parte media del pecho.</p>
                            <form method="POST">
                                <input type="hidden" name="ejercicio" value="Aperturas con mancuernas">
                                <button type="submit" class="btn btn-azul-gym">Añadir a mi entrenamiento</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Ejercicio 3 -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="/public/content/fondos.jpg" class="card-img-top" alt="Fondos en paralelas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fondos en paralelas</h5>
                            <p class="card-text">Excelente para trabajar el pectoral inferior.</p>
                            <form method="POST">
                                <input type="hidden" name="ejercicio" value="Fondos en paralelas">
                                <button type="submit" class="btn btn-azul-gym">Añadir a mi entrenamiento</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Acceso a nuestro entrenamiento -->
            <div class="text-center mt-5">
                <a href="mi_entrenamiento" class="btn btn-success">Ver mi entrenamiento</a>
            </div>
        </div>
    </section>
</body>

<?php require_once APP . '/views/inc/footer.php'; ?>
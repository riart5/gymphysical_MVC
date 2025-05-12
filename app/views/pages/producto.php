<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();
if (!isset($_SESSION['usuario_email']) || !isset($_SESSION['usuario_id'])) {
    header("Location: /inicioSesion");
    exit;
}

require_once APP . '/config/Usuario.php';
require_once APP . '/views/inc/header_inicio.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre_ejercicio'])) {
    $usuario_id = $_SESSION['usuario_id'];
    $ejercicio = $_POST['nombre_ejercicio'];
    $kg = isset($_POST['kg']) ? floatval($_POST['kg']) : null;
    $series = isset($_POST['series']) ? intval($_POST['series']) : null;
    $repeticiones = isset($_POST['repeticiones']) ? intval($_POST['repeticiones']) : null;

    Usuario::guardarEjercicio($usuario_id, $ejercicio, $kg, $series, $repeticiones);
    header("Location: /producto");
    exit;
}
?>

<body>
    <section class="py-5 bg-light" id="producto">
        <div class="container">
            <h2 class="mb-4 text-center">Organizador de Entrenamiento</h2>

            <?php
            $secciones = [
                "Empujes" => [
                    "Pecho" => [
                        ["Press de Banca", "press-banca.jpg"],
                        ["Aperturas con mancuernas", "aperturas.jpg"],
                        ["Flexiones", "flexiones.jpg"]
                    ],
                    "Hombros" => [
                        ["Press militar", "press-militar.jpg"],
                        ["Elevaciones laterales", "elevaciones-laterales.jpg"],
                        ["Pájaro con mancuernas", "pajaro.jpg"]
                    ],
                    "Tríceps" => [
                        ["Fondos", "fondos.jpg"],
                        ["Extensión con mancuerna", "extension.jpg"],
                        ["Press cerrado", "press-cerrado.jpg"]
                    ]
                ],
                "Tracciones" => [
                    "Espalda" => [
                        ["Jalón al pecho", "jalon.jpg"],
                        ["Dominadas", "dominadas.jpg"],
                        ["Remo con barra", "remo-barra.jpg"]
                    ],
                    "Bíceps" => [
                        ["Curl con barra", "curl-barra.jpg"],
                        ["Curl martillo", "curl-martillo.jpg"],
                        ["Curl concentrado", "curl-concentrado.jpg"]
                    ]
                ],
                "Piernas" => [
                    "Cuádriceps" => [
                        ["Sentadilla libre", "sentadilla.jpg"],
                        ["Prensa de piernas", "prensa.jpg"],
                        ["Extensiones de cuádriceps", "extensiones.jpg"]
                    ],
                    "Isquios" => [
                        ["Curl femoral tumbado", "curl-femoral.jpg"],
                        ["Peso muerto rumano", "peso-muerto.jpg"],
                        ["Buenos días", "buenos-dias.jpg"]
                    ],
                    "Aductores" => [
                        ["Aductor en máquina", "aductor.jpg"]
                    ],
                    "Abductores" => [
                        ["Abductor en máquina", "abductor.jpg"]
                    ],
                    "Gemelos" => [
                        ["Elevaciones de talones", "gemelos.jpg"]
                    ]
                ]
            ];
            ?>

            <?php foreach ($secciones as $seccion => $grupos): ?>
                <h3 class="mt-5"><?= $seccion ?></h3>
                <div class="accordion mb-4" id="acordeon<?= $seccion ?>">
                    <?php foreach ($grupos as $grupo => $ejercicios): ?>
                        <?php $id = strtolower(str_replace(' ', '', $grupo)); ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?= $id ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse<?= $id ?>" aria-expanded="false"
                                    aria-controls="collapse<?= $id ?>">
                                    <?= $grupo ?>
                                </button>
                            </h2>
                            <div id="collapse<?= $id ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $id ?>"
                                data-bs-parent="#acordeon<?= $seccion ?>">
                                <div class="accordion-body">
                                    <div class="row row-cols-1 row-cols-md-3 g-4">
                                        <?php foreach ($ejercicios as [$nombre, $img]): ?>
                                            <div class="col">
                                                <div class="card h-100 shadow-sm">
                                                    <img src="/public/content/<?= $img ?>" class="card-img-top"
                                                        alt="<?= $nombre ?>">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title"><?= $nombre ?></h5>
                                                        <form method="POST">
                                                            <input type="hidden" name="nombre_ejercicio" value="<?= $nombre ?>">
                                                            <input type="number" name="kg" step="0.1" class="form-control mt-2"
                                                                placeholder="Kg" required>
                                                            <input type="number" name="repeticiones" step="1" class="form-control mt-2"
                                                                placeholder="Series" required>
                                                            <input type="number" name="series" step="1" class="form-control mt-2"
                                                                placeholder="Repeticiones" required>
                                                            <button type="submit" class="btn btn-azul-gym mt-2">Añadir a mi
                                                                entrenamiento</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>

            <div class="text-center mt-4">
                <a href="/mi_entrenamiento" class="btn btn-success">Ver mi entrenamiento</a>
            </div>
        </div>
    </section>
</body>

<?php require_once APP . '/views/inc/footer.php'; ?>